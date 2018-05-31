<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$pseudo = $_POST["pseudo"];
$email = $_POST["email"];
//$picture = "";

// Vérifier si l'utilisateur a uploadé un fichier
//if (isset($_FILES["picture"])){
//    $picture = $_FILES["picture"]["name"];
//    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../uploads/" . $picture);
//}


// Insertion des données en BDD
insertUser($pseudo, $email);

// Redirection vers la liste
header("Location: index.php");