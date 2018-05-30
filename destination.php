<?php

require_once 'lib/functions.php';
require_once 'model/database.php';

// Vérifier si le paramètre title est bien présent dans l' URL
if (!isset($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];

$destination = getOneDestination($id);
$destination_sejour = getAllSejoursByDestinations($id);


getHeader("destination"); ?>

<section class="container">
    
    <article>
        <h2><?php echo $destination["title"]; ?></h2> 
        <img src="uploads/<?php echo $destination["picture"]; ?>" alt="<?php echo $destination["title"]; ?>">
        <p><?php echo $destination["description"]; ?></p>
    </article>
    
    
 <?php foreach ($destination_sejour as $sejour) : ?>
        <article>
            <a href="sejour.php?id=<?php echo $sejour["id"]; ?>">
            <h3><?php echo $sejour["title"]; ?></h3></a>
            <p><?php echo $sejour["description"]; ?></p>
            <img src="uploads/<?php echo $sejour["picture"]; ?>" alt="<?php echo $sejour["title"]; ?>">
            <p><?php echo $sejour["duration"]; ?> jours</p>
            <p><?php echo $sejour["price"]; ?> €</p>
        </article>
    
    <article>
       
    </article>
    <?php endforeach; ?>
</section>

<?php
getFooter("destination"); ?>
