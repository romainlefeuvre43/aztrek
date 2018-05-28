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

function getALLMembersByProject(int $id){
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "SELECT  member.*,
            CONCAT(member.firstname, ' ', member.lastname) AS fullname
            FROM member
    INNER JOIN project_has_member ON project_has_member.member_id = member.id
    WHERE project_has_member.project_id = :id;";
            
            
            $stmt = $connexion->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        

    return $stmt->fetchAll();
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

