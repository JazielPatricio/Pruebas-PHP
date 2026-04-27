<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
</head>
<body>
    <h1>Registro de Carros</h1>

    <form action="guardar.php" method="POST" ecctype="multipart/form-data">
        <label for="marca">Marca</label>
        <input type="text" name ="marca" id="marca" required>
        <br><br>

        <label for="modelo">Modelo</label>
        <input type="text" name ="model" id= "modelo" required>
        <br><br>

        <label for= "ano">Año</label>
        <input type="text" name ="ano" id="ano" required>
        <br><br>
    
    </form>
</body>
</html>