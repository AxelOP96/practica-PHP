<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
</head>
<body>
    <form action="" method="post">
        <select  id="numero" name="numero">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
    <?php
        $contador=1;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtiene el valor de "n" desde el formulario
            $n = intval($_POST["numero"]);
            $matriz = array();
            for ($i = 0; $i < $n; $i++) {
                $fila = array();
                for ($j = 0; $j < $n; $j++) {
                    // Agrega valores a la matriz, puedes asignar valores aleatorios o ceros, según tus necesidades.
                    $fila[] = $contador++; // Por ejemplo, aquí se inicializa con ceros.
                }
                $matriz[] = $fila;
            }
            //Diagonal principal
            $n = count($matriz); // Obtiene el tamaño de la matriz (asumiendo que es cuadrada).
            echo "<p>Los elementos de la diagonal principal son<p/><br>";
            for ($i = 0; $i < $n; $i++) {
                echo $matriz[$i][$i] . "<br>";
            }
            //Diagonal secuandaria
            echo "<p>Los elementos de la diagonal secundaria son<p/><br>";
            $n = count($matriz); // Obtiene el tamaño de la matriz (asumiendo que es cuadrada).

            for ($i = 0; $i < $n; $i++) {
                echo $matriz[$i][$n - 1 - $i] . "<br>";
            }
            $total = 0; // Inicializa la variable para almacenar la suma.

        // Recorre todas las filas.
        for ($i = 0; $i < count($matriz); $i++) {
            // Recorre todas las columnas de la fila actual.
            for ($j = 0; $j < count($matriz[$i]); $j++) {
                // Suma el valor actual al total.
                $total += $matriz[$i][$j];
            }
        }

            echo "La suma de todos los elementos de la matriz es: " . $total;


            echo "<h2>Matriz Generada:</h2>";
            echo "<table border='1'>";
            foreach ($matriz as $fila) {
                echo "<tr>";
                foreach ($fila as $valor) {
                    echo "<td>$valor</td>";
                }
            echo "</tr>";
            }
            echo "</table>";
            }
    ?>
</body>
</html>