<?php


function getAllDestinations(int $limit = 999) {
    /* @var $connexion PDO */
    global $connexion;

    $query = "SELECT 
	project.id,
        project.title,
        project.picture,
        project.price,
        date_format(project.date_start, '%d/%m/%Y') AS date_start,
        category.label AS category,
        COUNT(DISTINCT(project_has_member.member_id)) AS nb_members,
        AVG(notation.grade) AS grade

    FROM project

    INNER JOIN category ON project.category_id = category.id
    LEFT JOIN project_has_member ON project_has_member.project_id = project.id
    LEFT JOIN notation ON notation.project_id = project.id
    GROUP BY project.id
    ORDER BY project.date_start DESC
    LIMIT :limit;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
    $stmt->execute();


    return $stmt->fetchAll();
}

function getAllSejoursByDestinations(int $id) {
/* @var $connexion PDO */
    global $connexion;

$query = "SELECT sejour.id,
		sejour.title,
                sejour.picture,
                sejour.description,
                sejour.difficulty,
                sejour.duration,
                depart.price
        FROM sejour
        INNER JOIN depart ON depart.sejour_id = sejour.id
        WHERE sejour.destination_id = :id;";


    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();


    return $stmt->fetchAll();
}



function getOneDestination(int $id) {
    /* @var $connexion PDO */
    global $connexion;

    $query = "SELECT *
    FROM destination
    WHERE destination.id = :id;";


    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();


    return $stmt->fetch();
}

function insertDestination(string $title, string $picture, string $description, float $price, string $date_start, string $date_end, int $category_id) {
        /* @var $connection PDO */
    global $connexion;

    $query = "INSERT INTO project (title, picture, description, price, date_start, date_end, category_id)
                VALUES (:title, :picture, :description, :price, :date_start, :date_end, :category_id);";


    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":picture", $picture);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":price", $price);
    $stmt->bindParam(":date_start", $date_start);
    $stmt->bindParam(":date_end", $date_end);
    $stmt->bindParam(":category_id", $category_id);
    $stmt->execute();
}
