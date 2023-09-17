<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <form action="" method="post">
        <legend>Seleccione una entrada</legend>
        <input type="checkbox" name="entrada[]" value="Snacks" id="">Snacks
        <input type="checkbox" name="entrada[]" value="Sorrentinos" id="">Sorrentinos
        <input type="checkbox" name="entrada[]" value="Ceviche" id="">Ceviche<br>
        <br>
        <legend>Seleccione un plato principal</legend>
        <input type="checkbox" name="principal[]" value="Solomillo" id="">Solomillo
        <input type="checkbox" name=principal[]" value="Anguila teriyaki" id="">Anguila teriyaki
        <input type="checkbox" name="principal[]" value="Corvina asada" id="">Corvina asada<br>
        <br>
        <legend>Seleccione un acompañamiento</legend>
        <input type="checkbox" name="acompania[]" value="Crujientes" id="">Crujientes
        <input type="checkbox" name="acompania[]" value="Encurtidos" id="">Encurtidos
        <input type="checkbox" name="acompania[]" value="Quesos y cremas" id="">Quesos y cremas<br>
        <br>
        <legend>Seleccione un postre</legend>
        <input type="checkbox" name="postre[]" value="Helado" id="">Helado
        <input type="checkbox" name="postre[]" value="Flan" id="">Flan
        <input type="checkbox" name="postre[]" value="Lemon Pie" id="">Lemon Pie<br>

        <input type="submit" value="Enviar menu" name="enviar">
    </form>

    <?php
    // Verifica si se ha enviado el formulario
    if (isset($_POST['enviar'])) {
        // Carga el contenido de menu.ini en un array asociativo
        $menu = parse_ini_file('menu.ini', true);
        // Define las secciones del menú
        $secciones = ['entrada', 'principal', 'acompania', 'postre'];
        // Itera a través de las secciones del menú y muestra lo seleccionado
        foreach ($secciones as $seccion) {
            echo "<h2>$seccion:</h2>";
        if (isset($_POST[$seccion]) && is_array($_POST[$seccion])) {
            foreach ($_POST[$seccion] as $itemSeleccionado) {
                // Comprueba si el elemento seleccionado existe en el menú
                if (isset($menu[$seccion][$itemSeleccionado])) {
                    echo $menu[$seccion][$itemSeleccionado] . "<br>";
                }
            }
        }
    }
}
    ?>
</body>
</html>