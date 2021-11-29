<?php
include "../includes/functions.php";
$id =$_POST['ids'];
$tbl =$_POST['table_name'];


if(isset($_POST['delete'])) {

    if($tbl =='users'){ 
            $delete = "DELETE FROM users where id= '$id'";
            delete_query($delete);
    }elseif($tbl =='madenah_street'){ 
        $delete = "DELETE FROM madenah_street where id= '$id'";
        delete_query($delete);
    }
    elseif($tbl =='khalda'){ 
        $delete = "DELETE FROM khalda where id= '$id'";
        delete_query($delete);
    }
    elseif($tbl =='freedom_street'){ 
        $delete = "DELETE FROM freedom_street where id= '$id'";
        delete_query($delete);
    }
    elseif($tbl =='7th'){ 
        $delete = "DELETE FROM 7th where id= '$id'";
        delete_query($delete);
    }
    elseif($tbl =='tabrbor'){ 
        $delete = "DELETE FROM tabrbor where id= '$id'";
        delete_query($delete);
    }
    elseif($tbl =='jabl_amman'){ 
        $delete = "DELETE FROM jabl_amman where id= '$id'";
        delete_query($delete);
    }
    elseif($tbl =='zarqa'){ 
        $delete = "DELETE FROM zarqa where id= '$id'";
        delete_query($delete);
    }
    elseif($tbl =='irbid'){ 
        $delete = "DELETE FROM irbid where id= '$id'";
        delete_query($delete);
    }
    elseif($tbl =='mafraq'){ 
        $delete = "DELETE FROM mafraq where id= '$id'";
        delete_query($delete);
    }
    elseif($tbl =='customers'){ 
        $delete = "DELETE FROM customers where id= '$id'";
        delete_query($delete);
    }
    elseif($tbl =='roles'){ 
        $delete = "DELETE FROM customers where id= '$id'";
        delete_query($delete);
    }
    if($delete) {
        $_SESSION['success_delete']=1;
    } else {
        $_SESSION['general_error']=1;	
    }
}
header('location: '.$_SERVER['HTTP_REFERER']);
?>