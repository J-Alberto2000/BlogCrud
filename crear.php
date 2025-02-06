<?php
// crear.php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];

    $sql = "INSERT INTO publicaciones (titulo, contenido) VALUES (:titulo, :contenido)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['titulo' => $titulo, 'contenido' => $contenido]);

    echo "Publicación creada con éxito.";
    echo "<br><a href='index.php'>Volver a inicio</a>";
}
?>
