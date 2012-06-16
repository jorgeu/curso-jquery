<?php

mysql_connect("localhost","root","") or die("No puedo conectarme");
mysql_select_db("personas");

$cedula=mysql_real_escape_string($_POST["cedula"]);

mysql_query("delete from persona where cedula=$cedula") or die(mysql_error());

?>
