<?php
// Paramètres de connexion
define('DB_HOST', 'localhost');
define('DB_USER', 'root');    // Utilisateur par défaut XAMPP/WAMP
define('DB_PASS', '');        // Mot de passe par défaut (vide)
define('DB_NAME', 'est_fes'); // Nom de votre base

// Établir la connexion
try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    // Vérifier la connexion
    if ($conn->connect_error) {
        throw new Exception("Échec de la connexion : " . $conn->connect_error);
    }
    
    // Définir l'encodage des caractères
    $conn->set_charset("utf8mb4");
    
} catch (Exception $e) {
    die("ERREUR : " . $e->getMessage());
}
?>