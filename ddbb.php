<?php 
require_once "home.php";

function connect(){
    return new PDO('mysql:host=localhost;'.'dbname=listaNombres;charset=utf8', 'root', '');
}

function getList(){
    $db = connect();
    $query = $db->prepare('SELECT * FROM nombres');
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
}

function insertList($nombre, $apellido, $edad){
    $db = connect();
    $query = $db->prepare('INSERT INTO nombres(name,lastname, age) VALUES (?,?,?)');
    $query->execute([$nombre, $apellido, $edad]);
}

function deleteList($id){
    $db = connect();
    $query = $db->prepare('DELETE FROM nombres where id=?');
    $query->execute([$id]);
}

function queseyo(){
    echo "hola";

}
?>