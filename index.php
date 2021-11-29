<?php
include("includes/connect.php");
if(isset ($_SESSION['in_login']) && $_SESSION['in_login'] == 1)
{
header('Location:home_page.php');
}
  else{
      header('Location:login.php');
  }  
    
    ?>