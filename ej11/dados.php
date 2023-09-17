<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1 class="centrado">Axel Leguero</h1>
<?php
   
    function random(){
        return random_int(1, 6);
    }
    if (isset($_POST['cantidad'])) {
        $cantidad = $_POST['cantidad'];
    } else {
        $cantidad = 1; // Valor predeterminado si no se selecciona una cantidad
    }
    $total=0;
    for ($i = 0; $i < $cantidad; $i++) {
    $resultado = random();
    $imagenUrl = "$resultado.jpg";
    echo "<img src='./imagenes/$imagenUrl' alt='Imagen $resultado'>";
    
    $total += $resultado;
    }
    echo "<p>Resultado obtenido: </p>  $total<br>";
?>
</body>
</html>