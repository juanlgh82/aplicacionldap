<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
   {* <link rel="stylesheet" href="css/font-awesome.min.css"> *}
   <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
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
           {$user}
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
        {foreach $adminslimit5 as $admin}
            <tr>
          <td>{$admin.NombreU}</td>
                
          <td class="text-right"><a href="editarusuario.php?id={$usuario.id}"title="Editar usuario"><i class="fas fa-pencil-alt text-primary" aria-hidden="true"></i></a>
              <a Title="Eliminar Usuario" href="deleteuser.php?id={$admin.id}"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
          </tr> 
        {/foreach}
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
                 {foreach $lservidores as $lista}
                      <tr>
                        <td>{$lista.id}</td>
                        <td id="ip"> {$lista.ip}</td>
                        <td Title= {$lista.nombre}> {$lista.nombre|truncate:6:"..."}</td>  
                        <td> {$Estado}</td>
                         <td class="text-right"><a href="conectarservidor.php?id={$lista.ip}"title="Conectar"><i class="fas fa-unlock"></a></i>
                        <a Title="Eliminar Usuario" href="deleteserver.php?id={$lista.id}"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
                      </tr>
                {/foreach}
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
        {foreach $adminslimit5 as $admin}
            <tr>
          <td>{$admin.NombreU}</td>
                
          <td class="text-right"><a href="editarusuario.php?id={$usuario.id}"title="Editar usuario"><i class="fas fa-pencil-alt text-primary" aria-hidden="true"></i></a>
              <a Title="Eliminar Usuario" href="deleteuser.php?id={$admin.id}"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
          </tr> 
        {/foreach}
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
        {foreach $adminslimit5 as $admin}
            <tr>
          <td>{$admin.NombreU}</td>
                
          <td class="text-right"><a href="editarusuario.php?id={$usuario.id}"title="Editar usuario"><i class="fas fa-pencil-alt text-primary" aria-hidden="true"></i></a>
              <a Title="Eliminar Usuario" href="deleteuser.php?id={$admin.id}"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
          </tr> 
        {/foreach}
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
        {foreach $adminslimit5 as $admin}
            <tr>
          <td>{$admin.NombreU}</td>
                
          <td class="text-right"><a href="editarusuario.php?id={$usuario.id}"title="Editar usuario"><i class="fas fa-pencil-alt text-primary" aria-hidden="true"></i></a>
              <a Title="Eliminar Usuario" href="deleteuser.php?id={$admin.id}"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a></td>
          </tr> 
        {/foreach}
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>

