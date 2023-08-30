<?PHP
//Ejercicio 2: Binomio cuadrado perfecto
//Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
//recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)
//2
//a) función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
//potencia
//b) función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
//desarrollada del binomio: a
//2 + 2*a*b + b
//2

function binomioCuadradoPerfecto_a($uno, $dos){
    return pow(($uno + $dos), 2);

}
function binomioCuadradoPerfecto_b($a, $b){
    return (pow($a, 2) + 2 * $a * $b + pow($b, 2));
}
