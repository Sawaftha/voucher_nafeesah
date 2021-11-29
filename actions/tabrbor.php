<?php
/**
* Class and Function List:
* Function list:
* Classes list:
*/
include "../includes/functions.php";

$invoice_number_tab = $_POST['invoice_number_tab'];
$invoice_date_tab   = $_POST['invoice_date_tab'];
$invoice_amm_tab    = $_POST['invoice_amm_tab'];

$ref_amm_tab        = $_POST['ref_amm_tab'];
$ref_date_tab       = $_POST['ref_date_tab'];
$customer_name_tab  = $_POST['customer_name_tab'];

$customer_phone_tab = $_POST['customer_phone_tab'];
$branch_name        = $_POST['branch_name'];

$created            = date('Y-m-d');
$id                 = $_POST['primary_id'];

if (isset($_POST['add'])) {
   $invoice_number     = "Select * from tabrbor where invoice_number='$invoice_number_tab' ";
   if (!check_existance($invoice_number)) {
      $add                = "INSERT INTO `tabrbor` (`invoice_number`,`invoice_date`,`invoice_amm`,`ref_amm`,`ref_date`,`customer_name`,`customer_phone`,`branch_name`,`created`) 
	    VALUES ('$invoice_number_tab','$invoice_date_tab','$invoice_amm_tab','$ref_amm_tab','$ref_date_tab','$customer_name_tab','$customer_phone_tab','$branch_name','$created')";
      $add_cus            = "INSERT INTO `customers` (`cus_name`,`cus_phone`,`created`) 
            VALUES ('$customer_name_tab','$customer_phone_tab','$created')";
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
   $update = "UPDATE `tabrbor` SET  `invoice_number`='$invoice_number_tab',
									`invoice_date`='$invoice_date_tab',
									`invoice_amm`='$invoice_amm_tab',

                                    `ref_amm`='$ref_amm_tab',
									`ref_date`='$ref_date_tab',
									`customer_name`='$customer_name_tab',

									`created`='$created'
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
