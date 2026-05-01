<?php
$host="localhost";
$db="libreria";
$usuario="root";
try{
    $conexion = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $usuario, $contraseña);
    $conexion->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $error){
    echo "Error de conexión: " . $error->getMessage();
}
?>