<?PHP
//Ejercicio 5: Sumatoria
// Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
// valores.
// a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
// b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
// c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while

function sumatoria_a( $array ){
    $contador =0;
    for($i=0; $i < count($array); $i++){
        $contador += $array[$i];
    }
    return $contador;
}
function sumatoria_b($array){
    $contador=0;
    foreach($array as $key => $value){
        $contador += $value;
    }
    return $contador;
}
function sumatoria_c($array){
    $i=0;
    $contador=0;
    while($i < count($array)){
        $contador += $array[$i];
        $i++;
    }
    return $contador;
}