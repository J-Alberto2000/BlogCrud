<?php
// editar.php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM publicaciones WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
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
    <title>Editar Publicación</title>
</head>
<body>
    <h2>Editar Publicación</h2>
    <form action="actualizar.php" method="POST">
        <input type="hidden" name="id" value="<?= $publicacion['id'] ?>">
        Título: <input type="text" name="titulo" value="<?= htmlspecialchars($publicacion['titulo']) ?>" required><br>
        Contenido: <textarea name="contenido" required><?= htmlspecialchars($publicacion['contenido']) ?></textarea><br>
        <input type="submit" value="Actualizar Publicación">
    </form>
</body>
</html>
