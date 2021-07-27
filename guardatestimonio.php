<?php
include_once("funciones.php");
include_once("coneconfig.php");

$name = $_POST["nombre"];
$desde = $_POST["localidad"];
$valor = $_POST["estrellas"];
$texto = $_POST["mensaje"];
$fecha =  date('Y-m-d H:i:s');
if (strlen($desde)<3) { $desde="Austin";}

$v['nombre']=$name;
$v['local']=$desde;
$v['fecha']=$fecha;
$v['puntos']=$valor;
$v['testimonio']=$texto;
$v['activo']=1;

d_alta($vm,$v);
header("location:evaluaciones.php"); 
?>