<?php
// Verifica si se proporcionó un nombre de imagen en la URL
if (isset($_GET["imagen"])) {
    $nombreImagen = $_GET["imagen"];
    
    // Construye la ruta completa de la imagen
    $rutaImagen = "./imagenes/" . $nombreImagen;

    // Verifica si la imagen existe antes de mostrarla
    if (file_exists($rutaImagen)) {
        // Muestra la imagen
        echo $nombreImagen . "<br>";
        echo "<img src='$rutaImagen' alt='$nombreImagen' width='300' height='300'>";
    } else {
        echo "La imagen no existe.";
    }
} else {
    echo "No se proporcionó un nombre de imagen.";
}
?>
