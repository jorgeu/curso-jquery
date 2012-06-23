<?php

include("config.php");

$nombre=$_GET["term"];

$result = mysql_query("select * from persona where nombre like '%$nombre%' order by nombre");

$objects=array();

while($obj=mysql_fetch_object($result))
    $objects[]=$obj->nombre;

echo json_encode($objects);

?>
