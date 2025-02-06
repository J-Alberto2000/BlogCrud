<?php
// index.php
include 'conexion.php';

$sql = "SELECT * FROM publicaciones ORDER BY fecha DESC";
$stmt = $pdo->query($sql);
$publicaciones = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
</head>
<body>
    <h2>Blog</h2>
    <a href="form_crear.php">Crear Nueva Publicación</a>
    <h3>Publicaciones Recientes</h3>
    <ul>
        <?php foreach ($publicaciones as $publicacion): ?>
            <li>
                <a href="ver.php?id=<?= $publicacion['id']; ?>"><?= htmlspecialchars($publicacion['titulo']) ?></a>
                <p><?= substr(htmlspecialchars($publicacion['contenido']), 0, 100); ?>...</p>
                <a href="editar.php?id=<?= $publicacion['id']; ?>">Editar</a> |
                <a href="eliminar.php?id=<?= $publicacion['id']; ?>">Eliminar</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
