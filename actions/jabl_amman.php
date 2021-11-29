<?php
/**
* Class and Function List:
* Function list:
* Classes list:
*/
include "../includes/functions.php";

$invoice_number_jam = $_POST['invoice_number_jam'];
$invoice_date_jam   = $_POST['invoice_date_jam'];
$invoice_amm_jam    = $_POST['invoice_amm_jam'];

$ref_amm_jam        = $_POST['ref_amm_jam'];
$ref_date_jam       = $_POST['ref_date_jam'];
$customer_name_jam  = $_POST['customer_name_jam'];

$customer_phone_jam = $_POST['customer_phone_jam'];
$branch_name        = $_POST['branch_name'];

$created            = date('Y-m-d');
$id                 = $_POST['primary_id'];

if (isset($_POST['add'])) {
   $invoice_number     = "Select * from jabl_amman where invoice_number='$invoice_number_jam' ";
   if (!check_existance($invoice_number)) {
      $add                = "INSERT INTO `jabl_amman` (`invoice_number`,`invoice_date`,`invoice_amm`,`ref_amm`,`ref_date`,`customer_name`,`customer_phone`,`branch_name`,`created`) 
	    VALUES ('$invoice_number_jam','$invoice_date_jam','$invoice_amm_jam','$ref_amm_jam','$ref_date_jam','$customer_name_jam','$customer_phone_jam','$branch_name','$created')";
      $add_cus            = "INSERT INTO `customers` (`cus_name`,`cus_phone`,`created`) 
            VALUES ('$customer_name_jam','$customer_phone_jam','$created')";
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
   $update = "UPDATE `jabl_amman` SET  `ref_amm`='$ref_amm_jam',
   `ref_date`='$ref_date_jam'
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
