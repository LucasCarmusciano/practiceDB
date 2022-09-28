<?php
require_once 'Models.php';
require_once 'View.php';

class Controller {
    private $model;
    private $view;
    function __construct(){
        $this->model = new Models();
        $this->view = new View();
    }

    public function getList(){
        $list = $this->model->getList();
        $this->view->showList($list);
    }

    public function insertList(){
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $edad = $_REQUEST['edad'];

        $this->model->insertList($nombre, $apellido, $edad);
    }
    
    public function getHome(){
        $this->view->showHome();
    }

    public function getFilterList(){
        $edadMayor = $_REQUEST['edadMayor'];
        $FilterList = $this->model->getFilterList($edadMayor);
        $this->view->showList($FilterList);
    }

    public function deleteList($id){
        $this->model->deleteList($id);
    }
}
?>