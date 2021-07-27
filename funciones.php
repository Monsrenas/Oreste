<?php
// implementar la funcion alta pasandole un vector como argumento

function d_abrir($el_manejo)
{
      $mysqli = new mysqli("localhost", "root", "", "accar");
      if ($mysqli->connect_errno) {
          echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      }
 return $mysqli;
}	

function d_alta($manejo, $vector)
{
  $linea1="INSERT INTO ".$manejo['tabla']." (";
  $linea2=" VALUES (";
  foreach ($vector as $indice => $valor)
  {
      $linea1=$linea1."$indice,";
      $linea2=$linea2."'$vector[$indice]',";
  }
   $linea1[strlen($linea1)-1]=")";
   $linea2[strlen($linea2)-1]=")";
   $consulta=$linea1.$linea2;

  if ( ! $coneccion=d_abrir($manejo)) exit ;
 

  if ( !$coneccion->query($consulta))
    {
     echo $coneccion; 
     echo "<a href=index.html>Error en la consulta</a>";
     exit;
    }
}

function d_baja($manejo, $where)
{
  if ( ! $coneccion=d_abrir($manejo)) exit ;
	
  $linea1="DELETE FROM ".$manejo['tabla'];
  $linea2=" WHERE ".$where;
  $consulta=$linea1.$linea2;
  if ( !$coneccion->query($consulta))
   {
    echo "<a href=index.html>Error en el borrado</a>";
    exit;
   }
}

function contenido ($manejo) {
if ( ! $coneccion=d_abrir($manejo)) exit ;

$consulta= "SELECT * FROM ".$manejo['tabla']." ORDER BY fecha";
$resultado = $coneccion->query($consulta);


  return $resultado;
}
?>