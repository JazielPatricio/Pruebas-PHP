<?php
    $host ="localhost";
    $db = "concesionaria";
    $usuario ="root";
    $contraseña = "";

    try{
        $conexion =new PDO("mysql:host=$host;dbname=$db;charset=utf8", $usuario, $contraseña);

        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch (PDOException $error){
        echo "Error de conexión: " . $error->getMessage();
    }
?>