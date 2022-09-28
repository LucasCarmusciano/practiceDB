<?php 
    class View {
        function __construct(){
        }

        public function showList($list){
        echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>List</title>
            </head>
            <body>
                <table>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Edad</td>
                    </tr>';
                    foreach ($list as $person){
                        echo "<tr>";
                            echo "<td>$person->id</td>";
                            echo "<td>$person->name</td>";
                            echo "<td>$person->lastname</td>";
                            echo "<td>$person->age</td>";
                            echo '<td>
                                <form action="delete/'.$person->id.'" method="POST">
                                <button type="submit">Borrar</button>
                                </form>
                                </td>';
                        echo "</tr>";
                    }
                echo '</table>
                <a href="home">Volver</a>

            </body>
            </html>';
        }

        public function showHome(){
            echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Home</title>
            </head>
            <body>
                <form action="insert" method="post">
                    <input name="nombre"type="text" placeholder="ingrese nombre">
                    <input name="apellido"type="text" placeholder="ingrese apellido">
                    <input name="edad"type="number" placeholder="ingrese edad">
                    <button type="submit">Enviar</button>
                    <a href="list">Ver lista</a>
                </form>
                <label>Buscar mayores a ? edad:</label>
                <form action="filter" method="post">
                    <input name="edadMayor" type="number" placeholder="numero">
                    <button type="submit">Buscar</button>
                </form>';
        }
    }
?>