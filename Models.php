<?php 
    class Models {
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=listaNombres;charset=utf8', 'root', '');
        }

        public function getList(){
            $query = $this->db->prepare('SELECT * FROM nombres');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        
        public function insertList($nombre, $apellido, $edad){
            $query = $this->db->prepare('INSERT INTO nombres(name,lastname, age) VALUES (?,?,?)');
            $query->execute([$nombre, $apellido, $edad]);
        }
        
        public function deleteList($id){
            $query = $this->db->prepare('DELETE FROM nombres where id= ? ');
            $query->execute([$id]);
        }
        
        public function getFilterList($edadMayor){
            $query = $this->db->prepare('SELECT * FROM nombres WHERE age >='.$edadMayor.' ORDER BY age DESC');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>