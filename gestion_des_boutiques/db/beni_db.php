<?php
// Configuration de la base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'immo');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
try {
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}