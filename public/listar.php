<?php
require_once "../app/config/db.php";

$sql = "SELECT * FROM vehiculos
        ORDER BY id DESC";
$stmt = $conexion->query($sql);
$vehiculos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vehículos</title>
</head>
<body>

<h1>Lista de Vehículos</h1>

<table border="1">
    <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Año</th>
        <th>Motor</th>
        <th>Transmisión</th>
        <th>Tracción</th>
        <th>Frenos</th>
    </tr>

    <?php foreach($vehiculos as $v): ?>
    <tr>
        <td><?= $v["marca"] ?></td>
        <td><?= $v["modelo"] ?></td>
        <td><?= $v["anio"] ?></td>
        <td><?= $v["motor"] ?></td>
        <td><?= $v["transmision"] ?></td>
        <td><?= $v["traccion"] ?></td>
        <td><?= $v["frenos"] ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>