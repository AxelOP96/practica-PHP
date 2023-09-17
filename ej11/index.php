<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1 class="centrado">Axel Leguero</h1>
    <form action="dados.php" method="post" >
    <legend class="centrado">Ingrese la cantidad de dados</legend>
    <select name="cantidad" id="" class="medio" >
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <input type="submit" value="Lanzar dados">
    </form>
    <?PHP
        $cantidad = $_POST['cantidad'];
        print ($cantidad);
    ?>
    
</body>
</html>