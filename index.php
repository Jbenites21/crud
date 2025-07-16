<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/confirm.js"></script>
</head>
<body>
    <h1>Usuarios</h1>
    <a href="crear.php" class="button">Crear nuevo usuario</a>
    <table>
        <thead>
            <tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Creado</th><th>Acciones</th></tr>
        </thead>
        <tbody>
        <?php
        $result = $conn->query("SELECT * FROM usuarios");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['nombre']) ?></td>
            <td><?= htmlspecialchars($row['correo']) ?></td>
            <td><?= $row['creado_en'] ?></td>
            <td>
                <a class="button" href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                <a class="button danger" href="eliminar.php?id=<?= $row['id'] ?>"
                   onclick="return confirmarEliminar('<?= $row['nombre'] ?>');">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
