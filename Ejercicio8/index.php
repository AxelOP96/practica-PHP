<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <?PHP
    include_once("body.php");
    include_once("semaforo.php");
    include_once("mate.php");
    include_once("unir.php");
    include_once("subir.php");
    include_once("sumar.php");
    echo "<div> Axel Leguero</div> <br>";
    echo "<a href='#'></a>
    <a href='?mostrar_codigo=1' >Ejercicio 1</a>
    <a href='?mostrar_codigo2=1'>Ejercicio 2</a>
    <a href='?mostrar_codigo3=1'>Ejercicio 3</a>
    <a href='?mostrar_codigo4=1'>Ejercicio 4</a>
    <a href='?mostrar_codigo5=1'>Ejercicio 5</a> <br>";

echo "<iframe src='https://miel.unlam.edu.ar/data7/data2/contenido/2628/Programacio-n-web-2.pdf' title='Enunciado trabajo práctico'>
    </iframe> <br>";
    $mostrarCodigo = false;
    $mostrarCodigo2 = false;
    $mostrarCodigo3 = false;
    $mostrarCodigo4 = false;
    $mostrarCodigo5 = false;

    // Verifica si se ha hecho clic en el enlace para mostrar el código.
    if (isset($_GET['mostrar_codigo'])) {
        $mostrarCodigo = true;
    }
    if ($mostrarCodigo) {
        echo "<h2>Ejercicio 1:</h2> <br>";
        echo "<p>Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto ('rojo'
        'amarillo','verde'). Dicha función devolverá el estado que corresponde: 'frene', 'precaución',
        'avance' o 'estado desconocido' ante un caso no esperado.
        a) función semaforo_a(color): Resuelva la solución utilizando if else
        b) función semaforo_b(color): Resuelva la solución utilizando if inline (return ?: )
        c) función semaforo_c(color): Resuelva la solución utilizando switch'<p> <br>";
        echo "<pre>";
        echo htmlspecialchars('
            <?php
                echo semaforo_a("rojo");
                echo semaforo_a("amarillo");
                echo semaforo_c("verde");
            ?>
        ');
        echo "</pre>";
        echo semaforo_a("rojo");
        echo semaforo_a("amarillo");
        echo semaforo_c("verde");
    }
    //ejercicio 2
    if (isset($_GET['mostrar_codigo2'])) {
        $mostrarCodigo2 = true;
    }
    if ($mostrarCodigo2) {
        echo "<h2>Ejercicio 2:</h2> <br>";
        echo "<p>Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
        recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)
        2
        a) función binomioCuadradoPerfecto_a(a, b): Resuelva la solución utilizando la función de
        potencia
        b) función binomioCuadradoPerfecto_b(a, b): Resuelva la solución utilizando la fórmula
        desarrollada del binomio: a
        2 + 2*a*b + b
        2<p> <br>";
        echo "<pre>";
        echo htmlspecialchars('
            <?php
            binomioCuadradoPerfecto_a(2, 4);
            binomioCuadradoPerfecto_b(2, 4);
            ?>
        ');
        echo "</pre>";
        echo binomioCuadradoPerfecto_a(2, 4) . "<br>";
        echo binomioCuadradoPerfecto_b(2, 4) . "<br>";
    }
    //ejercicio 3
    if (isset($_GET['mostrar_codigo3'])) {
        $mostrarCodigo3 = true;
    }
    if ($mostrarCodigo3) {
        echo "<h2>Ejercicio 3:</h2> <br>";
        echo "<p>Cree una función concatenar(texto1, texto2) que reciba dos textos como parámetro y devuelva
        ambos textos concatenados como uno solo.<p> <br>";
        echo "<pre>";
        echo htmlspecialchars('
            <?php
                echo concatenar("pepe esta "," muy loco");
            ?>
        ');
        echo "</pre>";
        echo concatenar("pepe esta "," muy loco") . "<br>";
    }
    //Ejercicio 4
    if (isset($_GET['mostrar_codigo4'])) {
        $mostrarCodigo4 = true;
    }
    if ($mostrarCodigo4) {
        echo "<h2>Ejercicio 4:</h2> <br>";
        echo "<p>Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
        la función, el valor del parámetro haya sido incrementado en 1<p> <br>";
        echo "<pre>";
        echo htmlspecialchars('
            <?php
                $numero = 6;
                echo incrementar($numero);
                echo $numero;
                
            ?>
        ');
        echo "</pre>";
        $numero = 6;
        echo incrementar($numero);
        echo $numero;
    }
    //Ejercicio 5
    if (isset($_GET['mostrar_codigo5'])) {
        $mostrarCodigo5 = true;
    }
    if ($mostrarCodigo5) {
        echo "<h2>Ejercicio 5:</h2> <br>";
        echo "<p>Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
        valores.
        a) función sumatoria_a( array ): Resuelva la solución utilizando la estructura de control for
        b) función sumatoria_b( array ): Resuelva la solución utilizando la estructura for each
        c) función sumatoria_c( array ): Resuelva la solución utilizando la estructura de control while<p> <br>";
        echo "<pre>";
        echo htmlspecialchars('
            <?php
                
                echo sumatoria_a([3,4,5,6,7]) ;
                echo sumatoria_a([3,4,5,6,7]) ;
                echo sumatoria_c([3,4,5,6,7]) ;
            ?>
        ');
        echo "</pre>";
        echo sumatoria_a([3,4,5,6,7]) . "<br>";
        echo sumatoria_a([3,4,5,6,7]) . "<br>";
        echo sumatoria_c([3,4,5,6,7]) . "<br>";
    }
    ?>
    
    
</body>
</html>



