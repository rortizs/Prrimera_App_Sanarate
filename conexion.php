<?php

$servidor="localhost";
$baseDatos="MiApp_sanarate";
$usuario="root";
$clave="";

//try to connection from database
try {
    $conexion= new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario,$clave);
} catch (Exception $th) {
    echo $th->getMessage();
}


?>
