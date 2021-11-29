<?php
include "../includes/functions.php";
$role_array= $_POST['role'];
$id=$_POST['primary_id'];

$delete = "DELETE FROM role_perm where role_id= '$id'";
delete_query($delete);

for ($i=0 ;$i <count($role_array) ; $i++) 
    {
    $add="INSERT INTO role_perm (`role_id`,`permission_id`)
                    VALUES ('$id','$role_array[$i]') ";
    insert_query($add);
    }
$_SESSION['success_edit']= 1; 
$_SESSION['role']= 1; 
header('location: '.$_SERVER['HTTP_REFERER']);
?>