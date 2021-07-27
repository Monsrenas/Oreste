<?php
$txl=[];
$fila = 1;
$fichero="texto.".$_SESSION['idioma'];
if(($fp = fopen($fichero, "r")) !== FALSE) {
    while (($datos = fgetcsv($fp)) !== FALSE) {
        $numero = count($datos);
        //echo "Animal de la fila $fila:\n";
        $fila++;
        for ($i = 0; $i < $numero; $i++){
            //echo $datos[$i] . "\t";
        }
        //echo "\nFrase: el tipo de animal es {$datos[0]} y se llama {$datos[1]} <br>";
        $_SESSION[$datos[0]]=$datos[1];

    }

    fclose($fp);
}
?>