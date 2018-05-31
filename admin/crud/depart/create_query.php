<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$title = $_POST["title"];
$description = $_POST["description"];




$picture = "";

// Vérifier si l'utilisateur a uploadé un fichier
if (isset($_FILES["picture"])){
    $picture = $_FILES["picture"]["name"];
    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../uploads/" . $picture);
}


// Insertion des données en BDD
insertDestination($title, $picture, $description);

// Redirection vers la liste
header("Location: index.php");