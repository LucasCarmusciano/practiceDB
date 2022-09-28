<?php
require_once 'Controller.php';

if($_GET['action']==''){
    $action='home';
}else{
    $action = $_GET['action'];
}

$parse = explode('/',$action);
switch($parse[0]){
    case 'home':
        $controller = new Controller();
        $controller->getHome();
        break;
    case 'list':
        $controller = new Controller();
        $controller->getList();
        break;
    case 'insert':
        $controller = new Controller();
        $controller->insertList();
        $controller->getHome();
        break;
    case 'filter':
        $controller = new Controller();
        $controller->getFilterList();
        break;
    case 'delete':
        $controller = new Controller();
        $controller->deleteList($parse[1]);
        $controller->getList();
        break;
}
?>
