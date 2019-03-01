<?php
/* Smarty version 3.1.31, created on 2018-10-03 17:09:06
  from "C:\xampp\htdocs\aplicacionldap\templates\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bb4db92901534_66551596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d5d19b0a415bb9312e61372e06b6622f2b31c47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aplicacionldap\\templates\\admin.tpl',
      1 => 1537522041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb4db92901534_66551596 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\aplicacionldap\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
   
   <?php echo '<script'; ?>
 defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"><?php echo '</script'; ?>
>
   <link rel="stylesheet" href="css/admin.css">
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">STAR</a>
  <span class="navbar-text"><small>ADMINISTRACION SERVIDOR LDAP</small></span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">DASHBOARD</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <?php echo $_smarty_tpl->tpl_vars['user']->value;?>

        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Perfil</a>
          <a class="dropdown-item" href="login.php"><i class="fa fa-power-off" aria-hidden="true"></i> Cerrar Sesion</a>
         
        </div>
      </li>
      
    </ul>
  </div>
  <a href="login.php"><i class="fa fa-power-off text-white" aria-hidden="true"></i></a>
</nav>




<div class="container-fluid">
  <div class="row">
      
    <div class="col-9">
      <div class="container bg-secondary ">
      <h1 class="display-4 text-white">Administración del Sistema</h1>
      </div>
       <div class="container">
        <div class="row">
           <div class="col-3">
          <div class="card">
                <div class="card-header h3 bg-info text-white">
                  Servidores
                </div>
                +ñ
                </div>
            </div>
          </div>
          
         </div>
        
            </div>
          </div>
        </div>
 <div class="container mt-5">
  <div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-header h3 bg-info text-white">
         Admins Aplicación
        </div>
        <div class="card-body">
        <table class="table table-dark">
        <thead> <tr>
          <th scope="col">Nombre</th>
          <th class="text-right"><i class=" fa fa-plus-circle text-success" aria-hidden="true"></i></th>
      </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adminslimit5']->value, 'admin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
?>
            <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['admin']->value['NombreU'];?>
</td>
                
          <td class="text-right"><a href="editarusuario.php?id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
"title="Editar usuario"><i class="fas fa-pencil-alt text-primary" aria-hidden="true"></i></a>
              <a Title="Eliminar Usuario" href="deleteuser.php?id=<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
          </tr> 
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </tbody>
        </table>
        </div>
      </div>
     </div>
    <div class="col-6">
    <div class="card">
        <div class="card-header h3 bg-info text-white">
         Servidores
        </div>
        <div class="card-body text-center  text-white">
             <table class="table table-dark">
                <theader>
                  <th>ID</th>
                  <th>IP</th>  
                  <th>Nombre</th>
                  <th>Estado</th> 
                  <th class="text-right"><a  Title="Agregar Servidor" href=""><i class=" fa fa-plus-circle text-success" aria-hidden="true"></i></a></th>              
                </theader>
                <tbody> 
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lservidores']->value, 'lista');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->value) {
?>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['lista']->value['id'];?>
</td>
                        <td id="ip"> <?php echo $_smarty_tpl->tpl_vars['lista']->value['ip'];?>
</td>
                        <td Title= <?php echo $_smarty_tpl->tpl_vars['lista']->value['nombre'];?>
> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['lista']->value['nombre'],6,"...");?>
</td>  
                        <td> <?php echo $_smarty_tpl->tpl_vars['Estado']->value;?>
</td>
                         <td class="text-right"><a href="conectarservidor.php?id=<?php echo $_smarty_tpl->tpl_vars['lista']->value['ip'];?>
"title="Conectar"><i class="fas fa-unlock"></a></i>
                        <a Title="Eliminar Usuario" href="deleteserver.php?id=<?php echo $_smarty_tpl->tpl_vars['lista']->value['id'];?>
"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
                      </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </tbody>
              </table>
                  
                         
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card">
        <div class="card-header h3 bg-info text-white">
         usuarios LDAP
        </div>
        <div class="card-body">
        <table class="table table-dark">
        <thead> <tr>
          <th scope="col">Nombre</th>
          <th class="text-right"><i class=" fa fa-plus-circle text-success" aria-hidden="true"></i></th>
      </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adminslimit5']->value, 'admin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
?>
            <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['admin']->value['NombreU'];?>
</td>
                
          <td class="text-right"><a href="editarusuario.php?id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
"title="Editar usuario"><i class="fas fa-pencil-alt text-primary" aria-hidden="true"></i></a>
              <a Title="Eliminar Usuario" href="deleteuser.php?id=<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
          </tr> 
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </tbody>
        </table>
        </div>
      </div>
     </div>
    <div class="col-6">
      <div class="card">
        <div class="card-header h3 bg-info text-white">
         UNIDADES ORGANIZATIVAS
        </div>
        <div class="card-body">
        <table class="table table-dark">
        <thead> <tr>
          <th scope="col">Nombre</th>
          <th class="text-right"><i class=" fa fa-plus-circle text-success" aria-hidden="true"></i></th>
      </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adminslimit5']->value, 'admin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
?>
            <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['admin']->value['NombreU'];?>
</td>
                
          <td class="text-right"><a href="editarusuario.php?id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
"title="Editar usuario"><i class="fas fa-pencil-alt text-primary" aria-hidden="true"></i></a>
              <a Title="Eliminar Usuario" href="deleteuser.php?id=<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
          </tr> 
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </tbody>
        </table>
        </div>
      </div>
     </div>
     <div class="col-6">
      <div class="card">
        <div class="card-header h3 bg-info text-white">
         EQUIPOS
        </div>
        <div class="card-body">
        <table class="table table-dark">
        <thead> <tr>
          <th scope="col">Nombre</th>
          <th class="text-right"><i class=" fa fa-plus-circle text-success" aria-hidden="true"></i></th>
      </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adminslimit5']->value, 'admin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
?>
            <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['admin']->value['NombreU'];?>
</td>
                
          <td class="text-right"><a href="editarusuario.php?id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
"title="Editar usuario"><i class="fas fa-pencil-alt text-primary" aria-hidden="true"></i></a>
              <a Title="Eliminar Usuario" href="deleteuser.php?id=<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
          </tr> 
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </tbody>
        </table>
        </div>
      </div>
     </div>
  </div>
</div>
      </div>

  
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
</html>

<?php }
}
