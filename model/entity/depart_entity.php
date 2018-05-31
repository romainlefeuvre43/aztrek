<?php

function getAllDeparts() {
    /* @var $connexion PDO */
    global $connexion;

    $query = "SELECT
            depart.*,
            sejour.title AS sejour_title,
            sejour.picture AS sejour_picture,
            destination.title AS destination_title
        FROM depart
        INNER JOIN sejour ON depart.sejour_id = sejour.id
        INNER JOIN destination ON destination.id = sejour.destination_id
        ORDER BY depart.date_depart DESC;";


    $stmt = $connexion->prepare($query);
 
    $stmt->execute();


    return $stmt->fetchAll();
}