<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Formulario de Ingreso a Nuestro Planeta</h1>
    <form action="procesar.php" method="POST">
        <label for="nombre">Nombre del Visitante:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="planeta">Planeta de Origen:</label>
        <select id="planeta" name="planeta" required>
            <option value="tierra">Tierra</option>
            <option value="marte">Marte</option>
            <option value="venus">Venus</option>
            <option value="jupiter">Júpiter</option>
            <!-- Agrega más opciones según sea necesario -->
        </select><br><br>
        <input type="submit" value="Enviar">
    </form>
    
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $planeta = $_POST["planeta"];
    echo "¡Bienvenido, $nombre! Eres de $planeta.";
}
?>

</body>
</html>