<?php
include "functions.php";

$table = $_REQUEST['type'];
switch ($table) {
    case "users":
        $sql = "Select * From users where id='" . $_POST['id'] . "'";
    break;
    case "customers":
        $sql = "Select * From customers where id='" . $_POST['id'] . "'";
    break;
    case "madenah_street":
        $sql = "Select * From madenah_street where id='" . $_POST['id'] . "'";
    break;
    case "khalda":
        $sql = "Select * From khalda where id='" . $_POST['id'] . "'";
    break;
    case "freedom_street":
        $sql = "Select * From freedom_street where id='" . $_POST['id'] . "'";
    break;
    case "7th":
        $sql = "Select * From 7th where id='" . $_POST['id'] . "'";
    break;
    case "tabrbor":
        $sql = "Select * From tabrbor where id='" . $_POST['id'] . "'";
    break;
    case "jabl_amman":
        $sql = "Select * From jabl_amman where id='" . $_POST['id'] . "'";
    break;
    case "zarqa":
        $sql = "Select * From zarqa where id='" . $_POST['id'] . "'";
    break;
    case "mafraq":
        $sql = "Select * From mafraq where id='" . $_POST['id'] . "'";
    break;
    case "irbid":
        $sql = "Select * From irbid where id='" . $_POST['id'] . "'";
    break;






    case "display":
        $id = $_POST['id'];
        $sql = "SELECT GROUP_CONCAT(permissions.class) as permissions 
                FROM permissions
                WHERE Not EXISTS 
                (SELECT permission_id FROM role_perm WHERE role_perm.permission_id = permissions.id AND role_perm.role_id =" . $id . ")";
    
    break;
    case "permissions":
        $sql = "SELECT GROUP_CONCAT(permissions.class) as permissions FROM `role_perm` 
                inner join  permissions  on role_perm.permission_id= permissions.id
                WHERE role_perm.role_id='" . $_POST['id'] . "'";
    break;



}

$result_sql = select_query($sql);
$row = mysqli_fetch_assoc($result_sql);

echo json_encode($row);
?>
