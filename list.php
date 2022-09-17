<?php function showList(){ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <?php
        echo "<table>";
            echo "<tr>";
                echo "<td>ID</td>";
                echo "<td>Nombre</td>";
                echo "<td>Apellido</td>";
                echo "<td>Edad</td>";
            echo "</tr>";
        ?>
</body>
</html>

<?php } ?>