<!-- form_crear.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Publicación</title>
</head>
<body>
    <h2>Crear Nueva Publicación</h2>
    <form action="crear.php" method="POST">
        Título: <input type="text" name="titulo" required><br>
        Contenido: <textarea name="contenido" required></textarea><br>
        <input type="submit" value="Crear Publicación">
    </form>
</body>
</html>
