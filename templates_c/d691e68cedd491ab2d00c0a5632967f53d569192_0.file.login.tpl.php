<?php
/* Smarty version 3.1.31, created on 2018-09-16 19:03:37
  from "C:\xampp\htdocs\aplicacionldap\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b9e8ce95e9236_33869917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd691e68cedd491ab2d00c0a5632967f53d569192' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aplicacionldap\\templates\\login.tpl',
      1 => 1537117306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9e8ce95e9236_33869917 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <title>LOGIN</title>
  <style>
    .error{

     width:100;
     background-color:red;
     color:white;
     display:flex;
     justify-content:center;
     padding-top:5px;
     padding-bottom:5px;   

      }
  </style>
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['errort']->value == true) {?>
  <div class='error'>
    Acceso Denegado
  </div>
<?php }?>
<div class="container d-flex justify-content-center">
  <div class="row">
    <div class="col-12 border border-primary mt-5 pb-2">
      <h1 >ACCESO AL SISTEMA</h1>
    <form action="validar.php" method="POST">
  <div class="form-group">
    <label for="user">Usuario</label>
    <input type="text" class="form-control" id ="user"name="user" aria-describedby="emailHelp" placeholder="Nombre de Usuario">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
       Recordar
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  </div>
</div>





<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
