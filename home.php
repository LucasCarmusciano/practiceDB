<?php 
    require_once "ddbb.php";   
    function showHome(){ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form action="" method="post">
        <input name="nombre"type="text" placeholder="ingrese nombre">
        <input name="apellido"type="text" placeholder="ingrese apellido">
        <input name="edad"type="number" placeholder="ingrese edad">
        <button type="submit">Enviar</button>
        <a href="list">Ver lista</a>
    </form>
    <?php 
    if(isset($_REQUEST['nombre'])&&isset($_REQUEST['apellido'])&&isset($_REQUEST['edad'])){
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $edad = $_REQUEST['edad'];
        
        insertList($nombre, $apellido, $edad);
    }
    ?>
    <form action="" method="post">
        <label>Buscar mayores a ? edad:</label>
        <input name="edadMayor" type="number" placeholder="numero">
        <button name="buscar" type="submit">Buscar</button>
    </form>
    <div>
    <?php 
    if(isset($_POST['edadMayor'])&&isset($_POST['buscar'])){
        $edadMayor = $_REQUEST['edadMayor'];
        $listOlder = getOlder($edadMayor);
        echo "<ul>";
            foreach ($listOlder as $older){
                echo "<li>$older->name $older->lastname - $older->age</li>";
            }
        echo "</ul>";
    }
    ?>
    </div>
</body>
</html>

<?php } ?>
