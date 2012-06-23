<?php

include("config.php");

$nombre=$_GET["nombre"];

if(nombre) {
    $result = mysql_query("select * from persona where nombre like '%$nombre%' order by nombre");
} else {
    $result = mysql_query("select * from persona order by nombre");
}

$objects=array();

while($obj=mysql_fetch_object($result))
    $objects[]=$obj;

echo json_encode($objects);

?>
