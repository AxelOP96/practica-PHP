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
    echo "<div> Axel Leguero</div> <br>";
    echo "<a href=''></a>
    <a href=''>Ejercicio 1</a>
    <a href=''>Ejercicio 2</a>
    <a href=''>Ejercicio 3</a>
    <a href=''>Ejercicio 4</a>
    <a href=''>Ejercicio 5</a> <br>";

echo "<iframe src='https://miel.unlam.edu.ar/data7/data2/contenido/2628/Programacio-n-web-2.pdf' title='Enunciado trabajo práctico'>
    </iframe> <br>";
    function incrementarVariable(){
        static $contador = 0;
        $contador++;
        echo $contador;
    }
    incrementarVariable();
    incrementarVariable();
    incrementarVariable();
    incrementarVariable();
    ?>
</body>
</html>

