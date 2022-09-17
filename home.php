<?php function showHome(){ ?>

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
        <a href="list/">Ver lista</a>
    </form>
</body>
</html>

<?php } ?>
