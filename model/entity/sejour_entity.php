<?php

function getALLMembers(){
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "SELECT  member.*,
            CONCAT(member.firstname, ' ', member.lastname) AS fullname
            FROM member;";
    
    
            
            
            $stmt = $connexion->prepare($query);
            $stmt->execute();
        

    return $stmt->fetchAll();
}

function getHilightedSejour(int $limit = 999){
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "SELECT *
            FROM sejour
            WHERE sejour.highlighted = 1
            LIMIT :limit;";
            
            $stmt = $connexion->prepare($query);
           $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
            $stmt->execute();
        

    return $stmt->fetchAll();
}

function getOneSejour(int $id) {
    /* @var $connexion PDO */
    global $connexion;

    $query = "SELECT sejour.*,
		depart.date_depart,
        depart.price,
        sejour.places_total - SUM(reservation.nb_person) AS places_restantes
       FROM sejour
     INNER JOIN depart ON depart.sejour_id = sejour.id
    INNER JOIN reservation ON reservation.depart_id = depart.id
    WHERE sejour.id = :id;";


    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();


    return $stmt->fetch();
}

function insertMember(string $firstname, string $lastname, string $picture) {
    /* @var $connexion PDO */
    global $connexion;

    $query = "INSERT INTO member (firstname, lastname, picture)
                VALUES (:firstname, :lastname, :picture);";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":picture", $picture);
    $stmt->execute();
}

function updateMember(int $id, string $firstname, string $lastname, string $picture) {
    /* @var $connexion PDO */
    global $connexion;

    $query = "UPDATE member 
                SET firstname = :firstname,
                lastname  = :lastname,
                picture = :picture
                WHERE id = :id;";
                

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":picture", $picture);
    $stmt->execute();
}

