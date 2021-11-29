<?php
include "../includes/functions.php";

$full_name = str_replace("'", "\'", $_POST['full_name']);
$phone = str_replace("'", "\'", $_POST['phone']);
$email = str_replace("'", "\'", $_POST['email']);
$password=openssl_encrypt($_POST['password'],'AES-128-ECB',PROJECT_NAME);
//$password = crypt($_POST['password'], PROJECT_NAME);
$role = $_POST['role'];
$created = date('Y-m-d');
$id = $_POST['primary_id'];

if (isset($_POST['add'])) {
    $check_phone = "Select * from users where phone='$phone' ";
    if (!check_existance($check_phone)) {
        $check_email = "Select * from users where email='$email' ";
        if (!check_existance($check_email)) {
            $add = "INSERT INTO `users` (`full_name`,`phone`,`email`,`password`,`role_id`,`created`) 
		VALUES ('$full_name','$phone','$email','$password','$role','$created')";
            if ($add) {
                insert_query($add);
                $_SESSION['success_add'] = 1;
            } else {
                $_SESSION['general_error'] = 1;
            }
        } else {
            $_SESSION['exist_email'] = 1;
        }
    } else {
        $_SESSION['exist_phone'] = 1;
    }
} elseif (isset($_POST['edit'])) {
    $update = "UPDATE `users` SET  `full_name`='$full_name',
									`phone`='$phone',
									`email`='$email',
									`password`='$password',
									`role_id`='$role',
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
