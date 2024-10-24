<?php

class User {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Método para guardar el usuario en la base de datos
    public function save($connection) {
        // Insertar el usuario en la base de datos
        $sql = "INSERT INTO Usuario (name) VALUES ('$this->name')";
        
        if ($connection->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    //funcion estatica para no crear un objeto user en el controller
    public static function getAll($connection) { 
        $users = []; // Inicializar un array para almacenar los usuarios
        $sql = "SELECT * FROM Usuario"; 
        $result = $connection->query($sql); 

        if ($result->num_rows > 0) { 
            while ($rowNombre = $result->fetch_assoc()) { 
                $users[] = $rowNombre; 
               
            }
        }

        return $users; 
    }

    public static function delete($connection, $userId) {
        $sql = "DELETE FROM Usuario WHERE id = $userId";
    
        if ($connection->query($sql) === TRUE) {
            return true; 
        } else {
            return false; 
        }
    }
}


   
