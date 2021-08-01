<?php 

function d_alta( $eval )
{
  

 $tempArray=archivo_json('testimonial_list.json');

 if ($tempArray) { array_Push($tempArray, $eval);} else { $tempArray=array("0"=>$eval);} 

//Creamos el JSON
$json_string = json_encode($tempArray);
$file = 'testimonial_list.json';
file_put_contents($file, $json_string);

}

function archivo_json($file)
{
	//Leemos el JSON
	$datos = file_get_contents($file);
	$json = json_decode($datos, true);

	return $json;
}

function Lista($file)
{
	$json=archivo_json($file);

	return $json;
}
?>