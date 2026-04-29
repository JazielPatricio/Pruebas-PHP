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
        <input type="text" name ="modelo" id= "modelo" required>
        <br><br>

        <label for= "anio">Año</label>
        <input type="number" name ="anio" id="anio" min="1950" max="2027" required>
        <br><br>

        <label for= "motor">Motor</label>
        <select id="motor" name="motor" required>
            <option value="Gasolina">Gasolina</option>
            <option value="Diésel">Diésel</option>
            <option value="Hibrido">Hibrido</option>
            <option value="Eléctrico">Eléctrico</option>
        </select>
        <br><br>

        <label for= "transmision">Transmisión</label>
        <select id="transmision" name="transmision" required>
            <option value="Manual">Manual</option>
            <option value="Automática">Automática</option>
        </select>
        <br><br>

        <label for= "traccion">Tracción</label>
        <select id="traccion" name="traccion" required>
            <option value="Delantera">Delantera</option>
            <option value="Trasera">Trasera</option>
            <option value="Integral">Integral</option>
        </select>
        <br><br>

        <label for= "frenos">Frenos</label>
        <select id="frenos" name="frenos" required>
            <option value="Disco">Disco</option>
            <option value="Tambor">Tambor</option>
        </select>
        <br><br>

        <button type="submit">Registrar Automovil</button>
    
    </form>
</body>
</html>