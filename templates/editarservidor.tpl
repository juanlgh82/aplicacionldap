<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/grabarincidencias.css">
  </head>
  <body>
      <div class="container">
      <div class="row bg-secondary ">
            <h1 class="display-4 text-white ml-3">Editar servidor <h1> <small>-{$servidor.Nombre}-</small>
            </div>
        <div class="row">
          <div class="col-6">
              <hr>
           
              <form>


  <div class="form-group">
    <label for="exampleInputEmail1">nombre</label>
    
    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="asuntoHelp" placeholder="Nombre" value={$servidor.Nombre} readonly>

 
 
  </div>
    <div class="form-group">
     <label for="descripcion">IP</label>
        <input type="text" class="form-control" name="ip" id="ip" aria-describedby="asuntoHelp" placeholder="password" value={$servidor.ip}>

    <div class="mt-2  text-right">
      <button type="button" onclick="Grabar()" class="btn btn-success cursormano">Guardar...</button>
      <button type="button" class="btn btn-danger cursormano" data-toggle="modal" data-target="#modalcancelar">Cancelar</button>
    </div>

</form>
          </div>
        {$mensaje}
     
         <a href="servidores.php"><i class="fas fa-long-arrow-alt-left" aria-hidden="true"></i>Volver</a>
        </div>
      
      </div>
<!-- Modal -->
<div class="modal fade" id="modalcancelar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cancelar cambios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Si acepta se perderan los cambios</p>
        <p>Esta usted avisado</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="Cancelar()">Aceptar</button>
      </div>
    </div>
     
  </div>
</div>
    <!-- Optional JavaScript -->
    <script> 
      function Cancelar(){
              
        alert("tururu");
          //window.location.href="editarusuario.php";
        
        
      }
      
      function Grabar(){
        nombre=$('#nombre').val();
        ip=$('#ip').val();
        destino="grabardatos.php?id="+{$id}+"&nombre="+nombre+"&ip="+ip;
        window.location.href=destino
        //alert(("#nombre").val()));
      }
     </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>

    
  </body>
</html>
