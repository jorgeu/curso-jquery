<?php

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='personas';

mysql_connect($dbhost,$dbuser,$dbpass) or die("No puedo conectarme");
mysql_select_db($dbname) or die("no puedo acceder a bd");


?>
