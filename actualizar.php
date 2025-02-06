<?php
// actualizar.php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];

    $sql = "UPDATE publicaciones SET titulo = :titulo, contenido = :contenido WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id, ':titulo' => $titulo, ':contenido' => $contenido]);

    echo "Publicación actualizada con éxito.";
    echo "<br><a href='index.php'>Volver a inicio</a>";
}
?>
