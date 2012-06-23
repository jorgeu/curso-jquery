<?php

include("config.php");

$cedula=mysql_real_escape_string($_POST["cedula"]);

mysql_query("delete from persona where cedula=$cedula") or die(mysql_error());

?>
