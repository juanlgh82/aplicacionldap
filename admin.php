<?php 
session_start();
require_once "vendor/autoload.php"; 
require_once "include/database.php"; 
$login=$_SESSION['login']??false;
$user=$_SESSION['user']??'';
//var_dump($login);
//comprobar si esta logueado
if(!$login):

 header('Location: login.php');
  
endif;
   


        

// $usuarios=activeUsers();
// foreach ($usuarios as $usuario):
 
//   $activeusers=$usuario['numactiveUsers'];
// endforeach;

// $usuariosT=totalUsers();
// foreach ($usuariosT as $usuarioT):
 
//   $totalusers=$usuarioT['numUsers'];
  
// endforeach;

$adminslimit5=adminslimit5();

// $listausuarios=listaUsuarios();
// $incidencias=ultimasIncidencias();
// $tincidencias=totalincidencias();
// $tservidores=totalservidores();
 $ldapconectado=conexionldap();
 $enlazar=enlazarldap();
 $estado=estadoservidor();
// $tpcs= totalPCs();
// $tpcscaidos=totalpcscaidos();
 $lservidores=listaservidores();
// $tincidenciasabiertas=totalincidenciasabiertas();
// $tincidenciascerradas=totalincidenciascerradas();
// $totalusuarios=totalusuarios();
// $totalactiveusers=activeUsers();
// $usuarioslimit5=usuariosLimit5();
//asignacion de variables a smarty
$smarty = new Smarty();
$smarty->assign('user',$user);
// $smarty->assign('usuariosactivos',$totalactiveusers);
// $smarty->assign('totalusuarios',$totalusuarios);
// $smarty->assign('listausuarios',$listausuarios);
// $smarty->assign('incidencias',$incidencias);
// $smarty->assign('tincidencias',$tincidencias);
// $smarty->assign('tincidenciasabiertas',$tincidenciasabiertas);
// $smarty->assign('tincidenciascerradas',$tincidenciascerradas);
    $smarty->assign('estadoservidor',$estado);
     $smarty->assign('ldapconectado',$ldapconectado);
    $smarty->assign('enlazar',$enlazar);
//  $smarty->assign('mensaje',$mensaje);
// $smarty->assign('tpcs',$tpcs);
// $smarty->assign('tpcscaidos',$tpcscaidos);
$smarty->assign('lservidores',$lservidores);
$smarty->assign('adminslimit5',$adminslimit5);
$smarty->display('admin.tpl');




?>