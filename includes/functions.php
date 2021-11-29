<?php
include("db_function.php");

function get_users() {
   global $conn;
  $array = array();
  $query = "select users.* , roles.name from users 
  inner join roles on users.role_id=roles.id  order by users.id DESC";
  $result=mysqli_query($conn,$query);
  while($row = mysqli_fetch_object($result)) {
        $array[] = $row;
    }
    return $array;
}

function get_roles() {
    global $conn;
   $array = array();
   $query = "SELECT * FROM `roles`  order by id DESC";
   $result=mysqli_query($conn,$query);
   while($row = mysqli_fetch_object($result)) {
         $array[] = $row;
     }
     return $array;
  }

function get_permissions() {
    global $conn;
   $array = array();
   $query = "SELECT * FROM `permissions`  order by id DESC";
   $result=mysqli_query($conn,$query);
   while($row = mysqli_fetch_object($result)) {
         $array[] = $row;
     }
     return $array;
  }

  function get_customers() {
    global $conn;
   $array = array();
   $query = "SELECT * FROM `customers`  order by id DESC";
   $result=mysqli_query($conn,$query);
   while($row = mysqli_fetch_object($result)) {
         $array[] = $row;
     }
     return $array;
  }

  function get_madenah_street() {
    global $conn;
   $array = array();
   $query = "SELECT * FROM `madenah_street`  order by id DESC";
   $result=mysqli_query($conn,$query);
   while($row = mysqli_fetch_object($result)) {
         $array[] = $row;
     }
     return $array;
  }
  function get_khalda() {
    global $conn;
   $array = array();
   $query = "SELECT * FROM `khalda`  order by id DESC";
   $result=mysqli_query($conn,$query);
   while($row = mysqli_fetch_object($result)) {
         $array[] = $row;
     }
     return $array;
  }



  function get_invoice($id)
  {
      global $conn;
      $array = [];
      $query = "SELECT * FROM `khalda` where id='$id' order by id Desc ";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_assoc($result);
      return $row;
  }


  function get_freedom_street() {
    global $conn;
   $array = array();
   $query = "SELECT * FROM `freedom_street`  order by id DESC";
   $result=mysqli_query($conn,$query);
   while($row = mysqli_fetch_object($result)) {
         $array[] = $row;
     }
     return $array;
  }
  function get_7th() {
    global $conn;
   $array = array();
   $query = "SELECT * FROM `7th`  order by id DESC";
   $result=mysqli_query($conn,$query);
   while($row = mysqli_fetch_object($result)) {
         $array[] = $row;
     }
     return $array;
  }
  function get_tabrbor() {
    global $conn;
   $array = array();
   $query = "SELECT * FROM `tabrbor`  order by id DESC";
   $result=mysqli_query($conn,$query);
   while($row = mysqli_fetch_object($result)) {
         $array[] = $row;
     }
     return $array;
  }
  function get_jabl_amman() {
    global $conn;
   $array = array();
   $query = "SELECT * FROM `jabl_amman`  order by id DESC";
   $result=mysqli_query($conn,$query);
   while($row = mysqli_fetch_object($result)) {
         $array[] = $row;
     }
     return $array;
  }
  function get_zarqa() {
    global $conn;
   $array = array();
   $query = "SELECT * FROM `zarqa`  order by id DESC";
   $result=mysqli_query($conn,$query);
   while($row = mysqli_fetch_object($result)) {
         $array[] = $row;
     }
     return $array;
  }
  function get_mafraq() {
    global $conn;
   $array = array();
   $query = "SELECT * FROM `mafraq`  order by id DESC";
   $result=mysqli_query($conn,$query);
   while($row = mysqli_fetch_object($result)) {
         $array[] = $row;
     }
     return $array;
  }
  function get_irbid() {
    global $conn;
   $array = array();
   $query = "SELECT * FROM `irbid`  order by id DESC";
   $result=mysqli_query($conn,$query);
   while($row = mysqli_fetch_object($result)) {
         $array[] = $row;
     }
     return $array;
  }

  

  function get_sum_invoice_amm_madenah_street() {
    global $conn;
   $array = array();
   $query = "SELECT SUM(invoice_amm) AS SUM FROM madenah_street";
   $result=mysqli_query($conn,$query);
   while($row = mysqli_fetch_object($result)) {
         $array[] = $row;
     }
     return $array;
  }





  function get_ref_amm_null() {
    global $conn;
   $array = array();
   $query = "SELECT COUNT( * ) as Number_of_Rows FROM madenah_street WHERE ref_amm IS NOT NULL;";
   $result=mysqli_query($conn,$query);
   while($row = mysqli_fetch_object($result)) {
         $array[] = $row;
     }
     return $array;
  }












function show_messages(){
    if(isset($_SESSION['check_form'])){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>'.check_form.'</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>';
    }
    unset($_SESSION['check_form']);
  
  
    if(isset($_SESSION['wrong_password'])){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>'.wrong_password.'</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>';
    }
    unset($_SESSION['wrong_password']);
  
    if(isset($_SESSION['exist_name'])){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>'.exist_name.'</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>';
    }
    unset($_SESSION['exist_name']);
  
    if(isset($_SESSION['exist_field'])){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>'.exist_field.'</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>';
    }
    unset($_SESSION['exist_field']);
  
  
    if(isset($_SESSION['exist_ssid'])){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>'.exist_ssid.'</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>';
    }
    unset($_SESSION['exist_ssid']);
  
    if(isset($_SESSION['exist_car'])){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>'.exist_car.'</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>';
    }
    unset($_SESSION['exist_car']);
  
     if(isset($_SESSION['exist_user'])){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>'.exist_user.'</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>';
  }
  unset($_SESSION['exist_user']);
  
  if(isset($_SESSION['password_wrong'])){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>'.password_wrong.'</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>';
  }
  unset($_SESSION['password_wrong']);
  
  if(isset($_SESSION['passwords_not_match'])){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>'.passwords_not_match.'</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>';
  }
  unset($_SESSION['passwords_not_match']);
  
   if(isset($_SESSION['no_user'])){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>'.no_user.'</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>';
  }
  unset($_SESSION['no_user']);
  
  if(isset($_SESSION['exist_email'])){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>'.exist_email.'</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>';
  }
  unset($_SESSION['exist_email']);
  
  if(isset($_SESSION['exist_phone'])){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>'.exist_phone.'</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>';
  }
  unset($_SESSION['exist_phone']);
  
  if(isset($_SESSION['no_activate'])){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>'.no_activate.'</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>';
  }
  unset($_SESSION['no_activate']);
  
   if(isset($_SESSION['success_user'])){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>'.success_user.'</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>';
  }
  unset($_SESSION['success_user']);
  
   if(isset($_SESSION['success_add'])){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>'.success_add.'</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>';
  }
  unset($_SESSION['success_add']);
  
   if(isset($_SESSION['success_edit'])){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>'.success_edit.'</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>';
  }
  unset($_SESSION['success_edit']);   
  
   if(isset($_SESSION['success_delete'])){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>'.success_delete.'</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>';
  }
  unset($_SESSION['success_delete']);
   
    if(isset($_SESSION['yes_email_user'])){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>'.yes_email_user.'</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>';
  }
  unset($_SESSION['yes_email_user']);
   
   if(isset($_SESSION['no_email_user'])){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>'.no_email_user.'</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>';
  }
  unset($_SESSION['no_email_user']);
  
  
   if(isset($_SESSION['no_client'])){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>'.no_client.'</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>';
  }
  unset($_SESSION['no_client']);
  
  // unset($_SESSION['sql_appo']);
  
    if(isset($_SESSION['true'])){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>'.send_email.'</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    </div>';
  }
  unset($_SESSION['true']);
  
   
  }
  ?>