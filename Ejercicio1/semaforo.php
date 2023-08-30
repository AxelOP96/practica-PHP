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
        echo "frene";
    }else if($color=="amarillo"){
        echo "precaucion";
    }else if($color=="verde"){
        echo "avance";
    }else{
        echo "estado desconocido";
    }
}
function semaforo_b($color){
    //`(a ? b : c) ? d : e` or `a ? b : (c ? d : e)`
    $semaforo = ($color ==="rojo") ?  "frene" :
        (($color === "amarillo") ? "precaucion" :
        (($color ==="verde") ? "avance" :
        "estado desconocido"));
        echo $semaforo;
}
function semaforo_c($color){
    switch($color){
        case  "rojo":
            echo "frene";
            break;
        case  "amarillo":
            echo "precaucion";
            break;    
        case  "verde":
            echo "avance";
            break;
        default:
            echo "estado desconocido";
            break;    
    }
}