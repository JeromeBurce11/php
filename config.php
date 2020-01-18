<?php
    class Config 
    {
        private $connection;
        public function __construct(){
           $this->connection = mysqli_connect("localhost", "root", "", "inventory");
        }

        public function getConnection(){
            return $this->connection;
        }
    }

    $cnf = new Config();
    $connection = $cnf -> getConnection();
    
?>