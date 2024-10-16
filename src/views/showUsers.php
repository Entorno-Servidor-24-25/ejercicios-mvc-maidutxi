<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Lista de Usuarios</h1>
        <table border="1"> 
            <thead>
                <tr>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['name']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <form action="">
            <input type="submit" value="Eliminar Usuario" name="eliminar">
        </form>
        <a href="index.php">Volver al inicio</a> 
    </body>
</html>