<!DOCTYPE html>
<html>
<head>
    <title>Lista de Edificios</title>
</head>
<body>

<h2>Lista de Edificios</h2>

<a href="/public/cambiar_password.php">Cambiar contraseña</a>

<a href="form.html">Crear nuevo</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Ciudad</th>
        <th>Pisos</th>
        <th>Acciones</th>
    </tr>

    <?php foreach($edificios as $e): ?>
    <tr>
        <td><?= $e['id'] ?></td>
        <td><?= $e['nombre'] ?></td>
        <td><?= $e['ciudad'] ?></td>
        <td><?= $e['numPisos'] ?></td>
        <td>
                <a href="index.php?accion=editar&id=<?= $e['id'] ?>">Editar</a> |
                <a href="index.php?accion=eliminar&id=<?= $e['id'] ?>">Eliminar</a>

        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>