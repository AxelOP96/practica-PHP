<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class="centrado">Axel Leguero</h1>
    <div class="container">
        
        <?php
        include_once("imagen.php");
        $directorio = "./imagenes/"; // Reemplaza esto con la ruta de tu directorio
        $elementos = scandir($directorio,1);
        
        foreach ($elementos as $elemento) {
            $imagenUrl = "imagen.php?imagen=" . urlencode($elemento);
            echo "<a href='$imagenUrl'> $elemento . </a> <br>";
        }


        ?>
    </div>
    <form action="index.php" method="post" class="medio" enctype="multipart/form-data">
        <input type="text" placeholder="Ingrese el nombre de la imagen" name="nombre">
        <input type="file" name="archivo">
        <input type="submit" value="Publicar" name="enviar">
    </form>
    <?php
    $target_dir = "./imagenes/";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] === 0) {
        $nombreImagen = $_POST["nombre"];
        $target_dir = "./imagenes/";
        $target_file = $target_dir . basename($_FILES["archivo"]["name"]);
        $nombreOriginal = basename($_FILES["archivo"]["name"]);
        $nuevoNombre = $target_dir . $nombreImagen . "." . pathinfo($nombreOriginal, PATHINFO_EXTENSION);
        if (file_exists($target_file)) {
            echo "El archivo ya existe.";
    } else {
        // Mueve el archivo cargado al directorio de destino
        if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file)) {
            echo "El archivo " . htmlspecialchars(basename($_FILES["archivo"]["name"])) . " ha sido cargado correctamente.";
            $nombreOriginal = $nuevoNombre;
        } else {
            echo "Hubo un error al cargar el archivo.";
        }
    }
}
    ?>
</body>
</html>