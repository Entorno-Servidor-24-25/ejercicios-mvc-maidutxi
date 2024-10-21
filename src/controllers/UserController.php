<?php
// Cargar el modelo de usuario y la conexión a la base de datos
require_once BASE_PATH . '/models/User.php';
require_once BASE_PATH . '/db.php';

class UserController {
    // Método para mostrar el formulario
    public function showForm() {
        // Cargar la vista del formulario
        require_once BASE_PATH . '/views/userForm.php';
    }

    // Método para manejar el guardado de usuario
    public function saveUser() {
        global $connection; // Usamos la conexión a la base de datos

        // Obtener los datos del formulario
        $name = $_POST['name'];

        // Crear un nuevo objeto usuario
        $user = new User($name);

        // Guardar el usuario en la base de datos
        if ($user->save($connection)) {
            // Cargar la vista de éxito
            require_once BASE_PATH . '/views/userSuccess.php';
        } else {
            echo "Error al guardar el usuario.";
        }
    }

    public function getAllUsers() {
        global $connection;
        
        $users = User::getAll($connection);
        
        require_once BASE_PATH . '/views/showUsers.php'; 
    }

    public function deleteUser() {
        global $connection;
    
        if (isset($_POST['userId'])) {
            $userId = $_POST['userId'];
            
            // Llama al método delete del modelo User
            if (User::delete($connection, $userId)) {
                // Cargar  la lista de usuarios después de eliminar
                $this->getAllUsers(); 
            } else {
                echo "Error al eliminar el usuario.";
                $this->getAllUsers(); 
            }
        } else {
            echo "No se ha especificado un ID de usuario.";
            $this->getAllUsers(); 
        }
    }
        
    
}
