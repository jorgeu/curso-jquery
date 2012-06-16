<?php

mysql_connect("localhost","root","") or die("No puedo conectarme");
mysql_select_db("personas") or die("no puedo acceder a bd");

$nombre=$_GET["nombre"];
$direccion=$_GET["direccion"];

if(nombre) {
    $result = mysql_query("select * from persona where nombre like '%$nombre%' order by nombre");
} else if(direccion) {
    $result = mysql_query("select * from persona where direccion like '%$direccion%' order by nombre");
} else {
    $result = mysql_query("select * from persona order by nombre");
}

$objects=array();

while($obj=mysql_fetch_object($result))
    $objects[]=$obj;

echo json_encode($objects);

?>
