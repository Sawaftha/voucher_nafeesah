<?php
include "../includes/functions.php";

$cus_name = str_replace("'", "\'", $_POST['cus_name']);
$cus_phone = str_replace("'", "\'", $_POST['cus_phone']);
$cus_add = str_replace("'", "\'", $_POST['cus_add']);
$created = date('Y-m-d');
$id = $_POST['primary_id'];

if (isset($_POST['add'])) {
    $check_phone = "Select * from customers where cus_phone='$cus_phone' ";
    if (!check_existance($check_phone)) {
            $add = "INSERT INTO `customers` (`cus_name`,`cus_phone`,`cus_add`,`created`) 
		VALUES ('$cus_name','$cus_phone','$cus_add','$created')";
            if ($add) {
                insert_query($add);
                $_SESSION['success_add'] = 1;
            } else {
                $_SESSION['general_error'] = 1;
            }
    } else {
        $_SESSION['exist_phone'] = 1;
    }
} elseif (isset($_POST['edit'])) {
    $update = "UPDATE `customers` SET  `cus_name`='$cus_name',
									`cus_phone`='$cus_phone',
									`cus_add`='$cus_add',
									`created`='$created'
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
