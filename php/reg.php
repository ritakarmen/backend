<?php
$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
$db=mysql_select_db("mantenimientousuario",$link) or die("<h2>Error conexion</h2>")

$nombre=$_POST('nombre');
$dni=$_POST('dni');
$telefono=$_POST('telefono');
$direccion=$_POST('direccion');
$password=$_POST('password');
?>