<?php include 'db.php'; ?>
<?php
$id = $_GET["id"];
$result = $conn->query("SELECT * FROM usuarios WHERE id=$id");
$usuario = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $conn->query("UPDATE usuarios SET nombre='$nombre', correo='$correo' WHERE id=$id");
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Editar usuario</h1>
    <form method="POST">
        <label>Nombre:<br><input type="text" name="nombre" value="<?= $usuario['nombre'] ?>" required></label><br><br>
        <label>Correo:<br><input type="email" name="correo" value="<?= $usuario['correo'] ?>" required></label><br><br>
        <button type="submit">Actualizar</button>
    </form>
    <br>
    <a href="index.php">Volver</a>
</body>
</html>
