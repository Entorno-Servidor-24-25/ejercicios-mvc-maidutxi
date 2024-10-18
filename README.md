
# Arquitectura MVC

### Pregunta 1: ¿Qué camino sigue el código cuando el usuario accede por primera vez a `index.php`?
**Descripción**: Explica qué ocurre desde que el usuario carga `index.php` hasta que se muestra algo en pantalla. Incluye cómo intervienen el controlador, las vistas y el modelo, si es necesario.

Cunado el usurio entra en index.php, el archivo index carga el usercontroller, para ello crea una instancia del UserController para poder usar sus metodos.  Pero al ser la primera vez que el usuario entra en index.php solo se ejecuta showForm() y se muestra la vista userForm.php.



### Pregunta 2: ¿Qué camino sigue el código cuando el usuario introduce datos en el formulario?
**Descripción**: Detalla el proceso desde que el usuario envía el formulario hasta que se guarda la información y se muestra una respuesta en pantalla.

Si el usuario envía datos del formulario, el archivo index carga el usercontroler; es decir crea una isntancia para poder utilizar sus funciones y métodos. Lo primero que hace el usercontroller es cargar la User.php y db.php ya que estos archivos manejan la conexión a la base de datos y el guardado de usuario.

Con el require_once lo que se hace es pegar el código en el mimso Usercontroller para poder acceder a la conexion de la base de datos. .Después se ejecuta saveUser(), que usa la conexion a la base de datos con global, obtiene los datos que ha metido el usuario en el formulario , crea el nuevo usuario y lo guarda. Si tiene éxito, se muestra la vista userSuccess.php, y si falla, se muestra un mensaje de error.

> **Nota:** Al crear nuevas vistas, añade alguna forma de navegar entre ellas de modo que el usuario pueda acceder a todas las vistas sin tener que modificar la URL directamente.

Se podrían añadir enlaces en UserForm que redirija al usuario al resto de vistas sin tener que modificar la URL.


### Ejercicio 1: Mostrar Todos los Usuarios
**Descripción**: Extiende la funcionalidad de la aplicación para que se muestre una lista de todos los usuarios que están en la base de datos.
- Añadir un nuevo método en el controlador `UserController` llamado `getAllUsers()`.
- Crear una nueva vista `showUsers.php` para mostrar una tabla con los nombres de los usuarios.

### Ejercicio 2: Eliminar Usuario
**Descripción**: Implementa la funcionalidad para eliminar un usuario de la base de datos.
- Crear un método `deleteUser()` en `UserController`.
- Crear una acción en `showUsers.php` que permita eliminar usuarios, mostrando un botón "Eliminar" al lado de cada nombre en la lista de usuarios.
