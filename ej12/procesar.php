<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $planeta = $_POST["planeta"];
    
    // Crea un array con los datos de la visita
    $visita = array("nombre" => $nombre, "planeta" => $planeta);
    $visitas = [];
    if (file_exists("visitas.json")) {
        $visitas = json_decode(file_get_contents("visitas.json"), true);
    }
    $visitas[] = $visita;
    file_put_contents("visitas.json", json_encode($visitas));
    header("Location: lista_visitantes.php");
    exit;
}
?>
