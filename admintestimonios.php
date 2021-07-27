<?php
 include('logo.php');

include_once("coneconfig.php");
include_once("funciones.php");
$result=contenido($vm);
$i=0;
$result->data_seek(0);
while ($fila = $result->fetch_assoc()) { $i+=$i;								
	$start=str_pad($estrellas, $fila['puntos'], "*", STR_PAD_LEFT);
	$ngstart=str_pad($estrellas, 5-$fila['puntos'], "*", STR_PAD_LEFT);
	echo "<input id='radio1' name='n$i' value='5' type='radio'>";
	echo "<br><div style='clear: left; float: left; margin-right: 15px; width: 285px; min-width: 285px;'><a style='color: #CCFF2F; font-size: 1.6vw;'>$start</a><a style='color: #808080; font-size: 1.6vw;'>$ngstart</a>";
    echo "<a style='color: white; font-size: 1.3vw;'>    ".$fila['nombre']."</a> <a style='color: white; font-size: 0.9vw;'>(".$fila['local'].")</a>: </div>	<div style=''><a style='color: yellow; font-size: 0.9vw;'>".$fila['testimonio']."</a><br></div>";
   
}
?>