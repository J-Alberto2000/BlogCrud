<?php
$host = 'localhost';  // Dirección del servidor (prueba de git)
$dbname = 'blog'; // Nombre de la base de datos
$username = 'root';    // Usuario de MySQL
$password = '';        // Contraseña de MySQL

try {
    // Crear una conexión a la base de datos usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Manejo de errores
} catch (PDOException $e) {
    // Si ocurre un error de conexión, lo mostramos
    echo "Conexión fallida: " . $e->getMessage();
}
?>
