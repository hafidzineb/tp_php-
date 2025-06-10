<?php
include 'config.php';
echo "Connexion réussie! Version MySQL : " . $conn->server_info;
$conn->close();
?>