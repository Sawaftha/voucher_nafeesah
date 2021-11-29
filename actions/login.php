<?php
include "../includes/functions.php";
if (isset($_POST['submit'])) 
{
$email=$_POST['email'];
$password=$_POST['password'];
$email=stripslashes($email);
$password=crypt($password,PROJECT_NAME);
$query="SELECT  * FROM users WHERE password='$password' and (email='$email' or phone='$email')";
if(check_existance($query)){
        $row=get_record($query);
        $_SESSION['user_id']=$row['id'];
        $_SESSION['name']=$row['full_name'];
        $_SESSION['role']=$row['role_id'];
        $_SESSION['email']=$row['email'];
        $_SESSION['image']=$row['image'];
        $_SESSION['in_login']=1;
        header('location:../home_page.php');
    }
    else{
        $_SESSION['no_user']=1;
        header('location:../home_page.php');
    }
}
    else{
        header("location: ../home_page.php");
}
?>
