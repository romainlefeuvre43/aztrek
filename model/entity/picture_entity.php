<?php

function getALLPicturesByProject(int $id){
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "SELECT *
from project_picture
where project_id = :id;";
            
            
            $stmt = $connexion->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        

    return $stmt->fetchAll();
}

