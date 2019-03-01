<?php
require_once('include/database.php');
$conexion=conexionldap();
$enlace=enlazarldap();
$dn="cn=admin,dc=asir,dc=com";
$info["cn"] = "John Jones";
    $info["sn"] = "Jones";
    $info["objectclass"] = "person";
$r = ldap_add($conexion,$dn,$info);


//Echoing it will display the ping if the host is up, if not it'll say "down".
//echo estadoservidor("192.168.1.100", 389, 10);

var_dump(conexionldap());