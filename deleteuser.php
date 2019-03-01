<?php
include ('include/database.php');
//borra el usuario 
$id=$_GET['id']??0;
if ($id>0):
  deleteUser($id);
  header("Location:".$_SERVER['HTTP_REFERER']);
endif;   
?>