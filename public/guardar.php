<?php
require_once "../app/config/db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $marca = $_POST["marca"]?? null;
    $modelo = $_POST["modelo"]?? null;
    $anio = $_POST["anio"]?? null;
    $motor = $_POST["motor"]?? null;
    $transmision = $_POST["transmision"]?? null;
    $traccion = $_POST["traccion"]?? null;
    $frenos = $_POST["frenos"]?? null;

    $sql = "INSERT INTO vehiculos
            (marca, modelo, anio, motor, transmision, traccion, frenos)
            VALUES
            (:marca, :modelo, :anio, :motor, :transmision, :traccion, :frenos)";
    $stmt = $conexion->prepare($sql);

    $stmt->bindParam(":marca", $marca);
    $stmt->bindParam(":modelo", $modelo);
    $stmt->bindParam(":anio", $anio);
    $stmt->bindParam(":motor", $motor);
    $stmt->bindParam(":transmision", $transmision);
    $stmt->bindParam(":traccion", $traccion);
    $stmt->bindParam(":frenos", $frenos);

    $stmt->execute();

    header("Location: listar.php");
    exit;
} else {
    echo "Acceso no permitido.";
}
?>