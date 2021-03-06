<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$destination_id = $_POST["destination_id"];
$title = $_POST["title"];
$description = $_POST["description"];
$difficulty = $_POST["difficulty"];
$program = $_POST["program"];
$duration = $_POST["duration"];
$highlighted = isset($_POST["highlighted"]) ? 1 : 0; // Checkbox
$places_total = $_POST["places_total"];




$picture = "";

// Vérifier si l'utilisateur a uploadé un fichier
if (isset($_FILES["picture"])){
    $picture = $_FILES["picture"]["name"];
    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../uploads/" . $picture);
}


// Insertion des données en BDD
insertSejour($destination_id, $title, $picture, $description, $difficulty, $program, $duration, $highlighted, $places_total);

// Redirection vers la liste
header("Location: index.php");