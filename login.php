<?php
session_start();
session_destroy();
include "vendor/autoload.php";
$smarty = new Smarty();
$smarty->assign('name','Ned');
$error=$_GET['error']??false;
$smarty->assign('errort',$error);
$smarty->display('login.tpl');
?>