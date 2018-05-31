<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$id = $_POST["id"];

$title = $_POST["title"];
$description = $_POST["description"];
$difficulty = $_POST["difficulty"];
$program = $_POST["program"];
$duration = $_POST["duration"];
$highlighted = isset($_POST["highlighted"]) ? 1 : 0;
$places_total = $_POST["places_total"];

$sejour = getOneEntity("sejour", $id);
$picture = !is_null($sejour["picture"]) ? $sejour["picture"] : ""; // Image présente avant update


// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES["picture"]["error"] == 0) {
    $picture = $_FILES["picture"]["name"];
    // Déplacer le fichier uploadé
    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../uploads/" . $picture);
}


// Insertion des données en BDD
updateSejour($id, $title, $picture, $description, $difficulty, $program, $duration, $highlighted, $places_total);

// Redirection vers la liste
header("Location: index.php");