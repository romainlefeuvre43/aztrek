<?php



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

function insertSejour(string $destination_id, string $title, string $picture, string $description, string $difficulty, string $program, string $duration, string $highlighted, string $places_total) {
        /* @var $connection PDO */
    global $connexion;

    $query = "INSERT INTO sejour (destination_id, title, picture, description, difficulty, program, duration, highlighted, places_total)
                VALUES (:destination_id, :title, :picture, :description, :difficulty, :program, :duration, :highlighted, :places_total);";


    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":destination_id", $destination_id);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":picture", $picture);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":difficulty", $difficulty);
    $stmt->bindParam(":program", $program);
    $stmt->bindParam(":duration", $duration);
    $stmt->bindParam(":highlighted", $highlighted);
    $stmt->bindParam(":places_total", $places_total);
    
    $stmt->execute();
}

function updateSejour(int $id, string $title, string $picture, string $description, string $difficulty, string $program, string $duration, string $highlighted, string $places_total) {
    /* @var $connexion PDO */
    global $connexion;

    $query = "UPDATE sejour
                SET  title = :title,
                picture = :picture,
                description  = :description,
                difficulty  = :difficulty,
                program  = :program,
                duration  = :duration,
                highlighted  = :highlighted,
                places_total  = :places_total
                
                WHERE id = :id;";
                

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
   
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":picture", $picture);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":difficulty", $difficulty);
    $stmt->bindParam(":program", $program);
    $stmt->bindParam(":duration", $description);
    $stmt->bindParam(":highlighted", $highlighted);
    $stmt->bindParam(":places_total", $places_total);
    $stmt->execute();
}

