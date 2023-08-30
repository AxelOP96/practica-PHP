<?PHP
include_once("Ejercicio1/semaforo.php");
include_once("Ejercicio3/unir.php");
include_once("Ejercicio2/mate.php");
include_once("Ejercicio4/subir.php");
include_once("Ejercicio5/sumar.php");
include_once("Ejercicio6/integrador.php");
    
    echo web();
    echo "<br>";
    $a = 3;
    $b = 1;
    
    $a += $b;
    echo $a;
    echo "<br>";
    semaforo_a("amarillo");
    echo "<br>";
    semaforo_b("amarillo");
    echo "<br>";
    semaforo_c("amarillo");
    echo "<br>";
    echo binomioCuadradoPerfecto_a(2, 3);
    echo "<br>";
    echo binomioCuadradoPerfecto_b(3, 4);
    echo "<br>";

    echo concatenar("mi perro ", "sale a jugar");
    echo "<br>";
    $variable = 5;
    incrementar($variable);
    echo $variable;
    echo "<br>";
    $array = [1, 2, 3, 4,5,6, 9];

    echo sumatoria_a($array);
    echo "<br>";
    echo sumatoria_b($array);
    echo "<br>";
    echo sumatoria_c($array);
    echo "<br>";

