<?php
require_once 'home.php';
require_once 'list.php';

if($_GET['action']==''){
    $action='home';
}else{
    $action = $_GET['action'];
}

$parse = explode('/',$action);
switch($parse[0]){
    case 'home':
        showHome();
        break;
    case 'list':
        showList();
        break;
}
?>
