<?php
include "../includes/functions.php";

$invoice_number_kha =$_POST['invoice_number_kha'];
$invoice_date_kha =$_POST['invoice_date_kha'];
$invoice_amm_kha = $_POST['invoice_amm_kha'];

$ref_amm_kha =$_POST['ref_amm_kha'];
$ref_date_kha =$_POST['ref_date_kha'];
$customer_name_kha = $_POST['customer_name_kha'];

$customer_phone_kha =$_POST['customer_phone_kha'];
$branch_name =$_POST['branch_name'];

$created = date('Y-m-d');
$id = $_POST['primary_id'];

if (isset($_POST['add'])) {
    $invoice_number = "Select * from khalda where invoice_number='$invoice_number_kha' ";
    if (!check_existance($invoice_number)) {
            $add = "INSERT INTO `khalda` (`invoice_number`,`invoice_date`,`invoice_amm`,`ref_amm`,`ref_date`,`customer_name`,`customer_phone`,`branch_name`,`created`) 
	    VALUES ('$invoice_number_kha','$invoice_date_kha','$invoice_amm_kha','$ref_amm_kha','$ref_date_kha','$customer_name_kha','$customer_phone_kha','$branch_name','$created')";
            $add_cus = "INSERT INTO `customers` (`cus_name`,`cus_phone`,`created`) 
            VALUES ('$customer_name_kha','$customer_phone_kha','$created')";
           if ($add) {
                insert_query($add);
                insert_query($add_cus);
                $_SESSION['success_add'] = 1;
            } else {
                $_SESSION['general_error'] = 1;
            }
    } else {
        $_SESSION['exist_phone'] = 1;
    }
} elseif (isset($_POST['edit'])) {
    $update = "UPDATE `khalda` SET  `ref_amm`='$ref_amm_kha',
                                    `ref_date`='$ref_date_kha'              
									 WHERE id='$id' ";
    if ($update) {
        insert_query($update);
        $_SESSION['success_edit'] = 1;
    } else {
        $_SESSION['general_error'] = 1;
    }
}
header('location: ' . $_SERVER['HTTP_REFERER']);
?>
