<?php

mysql_connect("localhost","root","") or die("No puedo conectarme");
mysql_select_db("personas");

$cedula=mysql_real_escape_string($_POST["cedula"]);
$nombre=mysql_real_escape_string($_POST["nombre"]);
$direccion=mysql_real_escape_string($_POST["direccion"]);

mysql_query("insert into persona values ($cedula,'$nombre','$direccion')") or die(mysql_error());

?>
