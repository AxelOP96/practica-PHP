<?PHP
//Ejercicio 1: Semáforo
//Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
//“amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
//“avance” o “estado desconocido” ante un caso no esperado.
//a) función semaforo_a($color): Resuelva la solución utilizando if else
//b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
//c) función semaforo_c($color): Resuelva la solución utilizando switch
function semaforo_a($color){
    if($color=="rojo"){
        echo "frene" . "<br>";
    }else if($color=="amarillo"){
        echo "precaucion" . "<br>";
    }else if($color=="verde"){
        echo "avance" . "<br>";
    }else{
        echo "estado desconocido" . "<br>";
    }
}
function semaforo_b($color){
    //`(a ? b : c) ? d : e` or `a ? b : (c ? d : e)`
    $semaforo = ($color ==="rojo") ?  "frene" . "<br>" :
        (($color === "amarillo") ? "precaucion" . "<br>" :
        (($color ==="verde") ? "avance" . "<br>" :
        "estado desconocido <br>"));
        echo $semaforo;
}
function semaforo_c($color){
    switch($color){
        case  "rojo":
            echo "frene " . "<br>";
            break;
        case  "amarillo" :
            echo "precaucion" ."<br>";
            break;    
        case  "verde":
            echo "avance" . "<br>";
            break;
        default:
            echo "estado desconocido" . "<br>";
            break;    
    }
}