<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <table border="1"> 
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th> 
            </tr>
        </thead>
        <tbody>
            <?php if (empty($users)): ?>
                <tr>
                    <td colspan="2">No hay usuarios registrados.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['name']); ?></td>
                        <td>
                            <form action="" method="POST"> 
                                <input type="hidden" name="userId" value="<?php echo $user['id']; ?>"> <!-- ID del usuario -->
                                <input type="submit" value="Eliminar Usuario" name="eliminar">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <a href="index.php">Volver al inicio</a> 
</body>
</html>
