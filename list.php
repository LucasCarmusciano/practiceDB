<?php 
require_once "ddbb.php";
function showList(){ ?>

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
        $list = getList();
        echo "<table>";
            echo "<tr>";
                echo "<td>ID</td>";
                echo "<td>Nombre</td>";
                echo "<td>Apellido</td>";
                echo "<td>Edad</td>";
            echo "</tr>";
            foreach ($list as $person){
                echo "<tr>";
                    echo "<td>$person->id</td>";
                    echo "<td>$person->name</td>";
                    echo "<td>$person->lastname</td>";
                    echo "<td>$person->age</td>";
                echo "</tr>";
            }
        echo "</table>";
        ?>
</body>
</html>

<?php } ?>