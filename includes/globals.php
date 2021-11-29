<?php 
$where = "local";
if($where == "local" ) {
    define("Root", "http://localhost/voucher_nafeesah/");
    define("PROJECT_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/voucher_nafeesah/");
    define("server","localhost");
    define("username","root");
    define("password", "");
    define("db_name", "voucher_nafeesah");
}
else {
    define("Root", "http://demo.spider-tech.net./");
    define("PROJECT_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/");
    define("server","localhost:3306");
    define("username","spideru2_login");
    define("password", "12345");
    define("db_name", "spideru2_demo");
}

define("UPLOAd",Root."upload/");
define("IMAGES",Root."images/");
define("INCLUDES",Root."includes/");
define("ACTIONS",Root."actions/");
define("PDF",Root."pdf/");
define("ASSETS",Root."assets/");

define ('PROJECT_NAME', 'voucher_nafeesah');
define ('System_NAME', 'voucher_nafeesah');
define("from_mail","info@leaders-pro.net");
define ('company_Name', 'شركة الامين لتأجير السيارات');
define ('Email_Address', '');
define ('Phone', '');
define ('header', 'favicon.png');
define('default_img','user.png');

define("general_error","حدث خطأ لأسباب غير معروفة ، يرجى المحاولة مرة أخرى بعد 5 دقائق.");
define("no_user","اسم المستخدم أو كلمة المرور غير موجودة في النظام");
define("exist_user","اسم المستخدم او البريد الاكتروني مستخدم من قبل");
define("exist_phone","رقم الهاتف مستخدم من قيل مستخدم اخر");
define("exist_email","البريد الالكتروني مستخدم من قبل مستخدم أخر");
define("exist_car","رقم السيارة مستخدم من قبل");
define("exist_name"," الاسم مستخدم من قبل ");
define("exist_field"," محتوى الحقل مستخدم من قبل  ");
define("check_form"," يرجى التحقق من ان رقم السيارة تابع للسائق   ");
define("exist_ssid","الرقم الوطني مستخدم من قبل ");
define("no_email_user","البريد الالكتروني غير مستخدم في النظام" );
define("yes_email_user","تم إرسال كلمة السر الجديدة الى البريد الالكتروني الخاص بك" );
define("send_email", "تم ارسال الرسالة  الالكترونية");
define("success_user","تم إضافة المستخدم بنجاح");
define("success_add","تم الاضافة بنجاح");
define("success_edit","تم التعديل بنجاح");
define("success_delete","تم الحذف بنجاح");
define("passwords_not_match"," كلمتا السر غير متطابقتان ");
define("wrong_password","كلمة السر الحالية غير صحيحة");
define("no_activate","المستخدم غير مفعل");
date_default_timezone_set('Asia/Amman');
