<?php
if($_GET['action']==''){
    $action='home';
}else{
    $action = $_GET['action'];
}

$parse = explode('/',$action);
switch($parse[0]){
    case 'home':
        echo "aca va el formulario para llenar";
        break;
    case 'list':
        echo "aca va la lista";
        break;
}
?>
