<?php
// Inclure le fichier de configuration
require_once "config.php";

// Récupérer les données du formulaire
$nom = $_POST['nom'] ?? '';
$prenom = $_POST['prenom'] ?? '';
$email = $_POST['email'] ?? '';
$filiere = $_POST['filiere'] ?? '';
$message = $_POST['message'] ?? '';

echo $nom;

// Préparation de la requête SQL
$sql = "INSERT INTO etudiants (nom, prenom, email, filiere, message) VALUES ($nom, $prenom, $email, $filiere, $message)";
echo $prenom;

echo $sql;

// if($stmt = mysqli_prepare($conn, $sql)){
//     // Liaison des paramètres
//     mysqli_stmt_bind_param($stmt, $nom, $prenom, $email, $filiere, $message);
    
//     // Exécution de la requête
//     if(mysqli_stmt_execute($stmt)){
//         echo "Enregistrement réussi!";
//     } else{
//         echo "Erreur: " . mysqli_error($conn);
//     }
    
//     // Fermeture du statement
//     mysqli_stmt_close($stmt);
// } else {
//     echo "Erreur de préparation: " . mysqli_error($conn);
// }

// // Fermeture de la connexion
// mysqli_close($conn);

// // Redirection vers la page de contact après 3 secondes
// header("refresh:3;url=../contact.html");
?>