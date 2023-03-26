<?php

$servidor="localhost";//ip
$baseDatos="MiApp_sanarate"; //dbname
$usuario="root";//user
$clave="";//password

//try to connection from database
try {
    $conexion= new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario,$clave);
} catch (Exception $th) {
    echo $th->getMessage();
}


?>
