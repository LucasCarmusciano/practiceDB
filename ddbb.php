<?php 
function connect(){
    return new PDO('mysql:host=localhost;'.'dbname=listaNombres;charset=utf8', 'root', '');
}
function getList(){
    $db = connect();
    $query = $db->prepare('SELECT * FROM nombres');
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
}
?>