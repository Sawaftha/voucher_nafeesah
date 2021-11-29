<?php
/**
* Class and Function List:
* Function list:
* Classes list:
*/
include "../includes/functions.php";

$invoice_number_7th = $_POST['invoice_number_7th'];
$invoice_date_7th   = $_POST['invoice_date_7th'];
$invoice_amm_7th    = $_POST['invoice_amm_7th'];

$ref_amm_7th        = $_POST['ref_amm_7th'];
$ref_date_7th       = $_POST['ref_date_7th'];
$customer_name_7th  = $_POST['customer_name_7th'];

$customer_phone_7th = $_POST['customer_phone_7th'];
$branch_name        = $_POST['branch_name'];

$created            = date('Y-m-d');
$id                 = $_POST['primary_id'];

if (isset($_POST['add'])) {
   $invoice_number     = "Select * from 7th where invoice_number='$invoice_number_7th' ";
   if (!check_existance($invoice_number)) {
      $add                = "INSERT INTO `7th` (`invoice_number`,`invoice_date`,`invoice_amm`,`ref_amm`,`ref_date`,`customer_name`,`customer_phone`,`branch_name`,`created`) 
	    VALUES ('$invoice_number_7th','$invoice_date_7th','$invoice_amm_7th','$ref_amm_7th','$ref_date_7th','$customer_name_7th','$customer_phone_7th','$branch_name','$created')";
      $add_cus            = "INSERT INTO `customers` (`cus_name`,`cus_phone`,`created`) 
            VALUES ('$customer_name_7th','$customer_phone_7th','$created')";
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
   $update = "UPDATE `7th` SET  `ref_amm`='$ref_amm_7th',
                                 `ref_date`='$ref_date_7th' 
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
