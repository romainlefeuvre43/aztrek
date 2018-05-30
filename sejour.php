<?php

require_once 'lib/functions.php';
require_once 'model/database.php';

// Vérifier si le paramètre title est bien présent dans l' URL
if (!isset($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];

$sejour = getOneSejour($id);


getHeader("destination"); ?>

<section class="container">
    
    <article>
        <h2><?php echo $sejour["title"]; ?></h2> 
        <img src="uploads/<?php echo $sejour["picture"]; ?>" alt="<?php echo $sejour["title"]; ?>">
        <p><?php echo $sejour["description"]; ?></p>
        <p>Départ le : <?php echo $sejour["date_depart"]; ?></p>
        <p><?php echo $sejour["difficulty"]; ?></p>
        <p><?php echo $sejour["program"]; ?></p>
        <p><?php echo $sejour["price"]; ?> €</p>
        <p><?php echo $sejour["nb_person"]; ?> personnes</p>
    </article>
    
    
</section>

<?php
getFooter("destination"); ?>

