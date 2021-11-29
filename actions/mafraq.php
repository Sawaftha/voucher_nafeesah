<?php
/**
* Class and Function List:
* Function list:
* Classes list:
*/
include "../includes/functions.php";

$invoice_number_maf = $_POST['invoice_number_maf'];
$invoice_date_maf   = $_POST['invoice_date_maf'];
$invoice_amm_maf    = $_POST['invoice_amm_maf'];

$ref_amm_maf        = $_POST['ref_amm_maf'];
$ref_date_maf       = $_POST['ref_date_maf'];
$customer_name_maf  = $_POST['customer_name_maf'];

$customer_phone_maf = $_POST['customer_phone_maf'];
$branch_name        = $_POST['branch_name'];

$created            = date('Y-m-d');
$id                 = $_POST['primary_id'];

if (isset($_POST['add'])) {
   $invoice_number     = "Select * from mafraq where invoice_number='$invoice_number_maf' ";
   if (!check_existance($invoice_number)) {
      $add                = "INSERT INTO `mafraq` (`invoice_number`,`invoice_date`,`invoice_amm`,`ref_amm`,`ref_date`,`customer_name`,`customer_phone`,`branch_name`,`created`) 
	    VALUES ('$invoice_number_maf','$invoice_date_maf','$invoice_amm_maf','$ref_amm_maf','$ref_date_maf','$customer_name_maf','$customer_phone_maf','$branch_name','$created')";
      $add_cus            = "INSERT INTO `customers` (`cus_name`,`cus_phone`,`created`) 
            VALUES ('$customer_name_maf','$customer_phone_maf','$created')";
      if ($add) {
         insert_query($add);
         insert_query($add_cus);
         $_SESSION['success_add']        = 1;
      }
      else {
         $_SESSION['general_error']        = 1;
      }
   }
   else {
      $_SESSION['exist_phone']        = 1;
   }
}
elseif (isset($_POST['edit'])) {
   $update = "UPDATE `mafraq` SET  `ref_amm`='$ref_amm_maf',
   `ref_date`='$ref_date_maf'
									 WHERE id='$id' ";
   if ($update) {
      insert_query($update);
      $_SESSION['success_edit'] = 1;
   }
   else {
      $_SESSION['general_error'] = 1;
   }
}
header('location: ' . $_SERVER['HTTP_REFERER']);
?>
