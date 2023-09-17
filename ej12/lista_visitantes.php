<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Visitantes</title>
</head>
<body>
    <h1>Lista de Visitantes</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Planeta de Origen</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Lee el archivo JSON de visitas
            if (file_exists("visitas.json")) {
                $visitas = json_decode(file_get_contents("visitas.json"), true);
                
                // Inicializa un contador de visitas que no son de la Tierra
                $contador = 0;
                
                foreach ($visitas as $visita) {
                    $nombre = $visita["nombre"];
                    $planeta = $visita["planeta"];
                    
                    // Muestra la información del visitante en la tabla
                    echo "<tr><td>$nombre</td><td>$planeta</td></tr>";
                    
                    // Incrementa el contador si el planeta no es Tierra
                    if ($planeta !== "tierra") {
                        $contador++;
                    }
                }
            }
            ?>
        </tbody>
    </table>
    
    <p>Total de visitantes que no son de la Tierra: <?php echo $contador; ?></p>
</body>
</html>
