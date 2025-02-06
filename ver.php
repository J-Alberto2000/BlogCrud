<?php
// ver.php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM publicaciones WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $publicacion = $stmt->fetch();

    if (!$publicacion) {
        echo "Publicación no encontrada.";
        exit;
    }
} else {
    echo "ID no proporcionada.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($publicacion['titulo']) ?></title>
</head>
<body>
    <h2><?= htmlspecialchars($publicacion['titulo']) ?></h2>
    <p><strong>Fecha:</strong> <?= $publicacion['fecha'] ?></p>
    <p><?= nl2br(htmlspecialchars($publicacion['contenido'])) ?></p>
    <a href="index.php">Volver al inicio</a>
</body>
</html>
