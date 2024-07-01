<?php
$host = 'localhost';
$db = 'gestiontache';
$user = 'toyi';    // Remplace par ton nom d'utilisateur PostgreSQL
$pass = 'krami';    // Remplace par ton mot de passe PostgreSQL
$port = '5432';        // Le port par défaut pour PostgreSQL

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
