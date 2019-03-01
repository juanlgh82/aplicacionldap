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
{if $errort==true}
  <div class='error'>
    Acceso Denegado
  </div>
{/if}
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





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>