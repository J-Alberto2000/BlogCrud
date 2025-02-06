<?php
// eliminar.php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Verificar si el usuario ha confirmado la eliminación
    if (isset($_POST['confirmar']) && $_POST['confirmar'] == 'Sí') {
        $sql = "DELETE FROM publicaciones WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);

        echo "Publicación eliminada con éxito.";
        echo "<br><a href='index.php'>Volver a inicio</a>";
        exit;
    }
    if (isset($_POST['confirmar']) && $_POST['confirmar'] == 'No'){
        header("Location: index.php");
        exit;
    } else {
        echo "<h2>¿Estás seguro de que quieres eliminar esta publicación?</h2>";
        echo "<form method='POST'>
                <input type='submit' name='confirmar' value='Sí'>
                <input type='submit' name='confirmar' value='No'>
              </form>";
    }
} else {
    echo "ID no proporcionada.";
}
?>
