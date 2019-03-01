<?php
require_once('include/config.php');
// comprueba si esta logueado el usuario
function loginUser($user,$pass){
    $bd=new mysqli(SERVER,USER,PASS,DATABASE);
      
    
    if ($bd->connect_errno):
    die('Imposible conectar a la base de datos');
    endif;
    
    
    $sql="SELECT * FROM admins where NombreU= ". "'" . $user . "'" ." and password= " . "'" . $pass . "'";
    $results=$bd->query($sql);
    $rows=$results->num_rows;
    
    if($rows==0):
    $resultado=false;
    else:
    $resultado=true;
    endif;
    return $resultado;
    
    
}
//consulta la base de datos
function consultar($sql){
    $bd=new mysqli(SERVER,USER,PASS,DATABASE);
        if ($bd->connect_errno):
           die('Imposible conectar a la base de datos');
        endif;    
    
      $results=$bd->query($sql);
             
      $bd->close();
      return $results;  
  }
  //muestra los 5 ultimos administradores
function adminslimit5(){
    $sql="CALL adminslimit5()";
    $results=consultar($sql);
   return $results;
}
function listaservidores(){
    $sql="CALL listaservidores()";
     $results=consultar($sql);
    return $results;
  }



  function conexionldap(){
    //$ldaphost = "192.168.1.100";  // servidor LDAP
    $ldaphost = "84.127.150.17";  // servidor LDAP
    $ldapport = '389';// puerto del servidor LDAP
    
 
    // Conexión al servidor LDAP
    $ldapconn = ldap_connect($ldaphost,$ldapport)
              or die("Could not connect to $ldaphost");

  
      
  return $ldapconn;

} 

//pendiente pone ldapconn
function enlazarldap(){
    $conexion=conexionldap();
    $ldaprdn  = 'cn=admin,dc=asir,dc=com';     // ldap rdn or dn
    $ldappass = '1234';  // associated password
    if ($conexion){
        //hay que poner esto por que si no no enlaza(por la version del ldap)
        ldap_set_option($conexion, LDAP_OPT_PROTOCOL_VERSION, 3);
        $ldapbind = ldap_bind($conexion);

        // verificación del enlace
            if ($ldapbind) {
                $mensaje="conectado y enlazado";
            } else {
            $mensaje="no conectado no enlazado";
            }
                  
        
 


    }
    return $mensaje;
}

function pingservidor($host, $port, $timeout) 
{ 
  $tB = microtime(true); 
  $fP = fSockOpen($host, $port,$timeout); 
  //var_dump($fP);
  if (!$fP) {$estado= "server down"; }
  else{$estado="server online";}
  $tA = microtime(true); 
  //return round((($tA - $tB) * 1000), 0)." ms"; 
  return $fP; 
}

function estadoservidor(){
    $ip=listaservidores();
    var_dump($ip);

}

?>