<?php
session_start();
require_once "vendor/autoload.php"; 
require_once "include/database.php"; 
//si esta logueado o no 
$login=$_SESSION['login']??false;
$user=$_SESSION['user']??'';
//var_dump($login);
if(!$login):

 header('Location: login.php');
  
endif;
//configuracion de la incidencia a editar 
$id=$_GET['id']??'';
$mensaje=$_GET['mensaje']??"";
$servidor=servidoresbyid($id);
$smarty = new Smarty();
$smarty->assign('servidor',$servidor);
$smarty->assign('id',$id);
$smarty->assign('mensaje',$mensaje);
$smarty->display('editarservidor.tpl');
?>