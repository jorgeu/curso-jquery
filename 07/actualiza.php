<?php
include("config.php");

$cedula=mysql_real_escape_string($_GET["cedula"]);
$nombre=mysql_real_escape_string($_GET["nombre"]);
$direccion=mysql_real_escape_string($_GET["direccion"]);

mysql_query("update persona set nombre='$nombre',direccion='$direccion' where cedula=$cedula ") or die(mysql_error());

?>
