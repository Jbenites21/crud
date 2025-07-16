<?php include 'db.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $conn->query("INSERT INTO usuarios (nombre, correo) VALUES ('$nombre', '$correo')");
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Crear nuevo usuario</h1>
    <form method="POST">
        <label>Nombre:<br><input type="text" name="nombre" required></label><br><br>
        <label>Correo:<br><input type="email" name="correo" required></label><br><br>
        <button type="submit">Guardar</button>
    </form>
    <br>
    <a href="index.php">Volver</a>
</body>
</html>
