<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$list_destinations = getAllEntity("destination");
$list_sejours = getHilightedSejour(3);
$list_comment = getAllEntity("comment");

getHeader("Accueil");
?>



<section id="destinations">

    <header class="header-destinations">
        <h1>Destinations</h1>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
            ex ea commodo consequat. </p>

    </header>

    <div class="container">
        <article class="sejours">

            <?php foreach ($list_destinations as $destination) : ?>
                <a href="destination.php?id=<?php echo $destination["id"]; ?>">
                    <figure><img src="uploads/<?php echo $destination["picture"]; ?>" alt="<?php echo $destination["title"]; ?>">
                        <figcaption>
                            <h2><?php echo $destination["title"]; ?></h2>
                        </figcaption>
                    </figure>
                </a>
            <?php endforeach; ?>

        </article>
    </div>

</section>


<section id="incontournables">
    <div class="container">

        <header class="header-incontournables">
            <h1>Les incontournables</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>

        </header>

        <div class="owl-carousel carousel-incontournables">
            <?php foreach ($list_sejours as $sejour) : ?>
                <article class="item">
                    <a href="sejour.php?id=<?php echo $sejour["id"]; ?>">
                        <figure><img src="uploads/<?php echo $sejour["picture"]; ?>" alt="<?php echo $sejour["title"]; ?>">
                            <figcaption>
                                <h2><?php echo $sejour["title"]; ?></h2>
                                <p><?php echo $sejour["duration"]; ?></p>
                                <p>À partir de 3000€</p>
                            </figcaption>
                        </figure>
                    </a>
                </article> 
            <?php endforeach; ?>

        </div>


    </div>

</section>


<section id="photos">
    <div class="container">

        <header class="header-photos">
            <h1>Vos plus belles photos</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

        </header>

        <article class="pictures">



            <div class="owl-carousel carousel-pictures">
                <article class="item">
                    <figure><img src="../Aztrek/images/bg-slider.jpg" alt="First slide">
                        <figcaption>
                            <p>Photo: Jean Michel Photographe</p>
                        </figcaption>
                    </figure>

                </article>
                <article class="item">
                    <figure><img src="../Aztrek/images/bg-slider.jpg" alt="First slide">
                        <figcaption>
                            <p>Photo: Jean Photo</p>
                        </figcaption>
                    </figure>

                </article>
                <article class="item">
                    <figure><img src="../Aztrek/images/bg-slider.jpg" alt="First slide">
                        <figcaption>
                            <p>Photo: Michel Voyage</p>
                        </figcaption>
                    </figure>

                </article>
            </div>



            <a href="#" class="button">Rejoignez nous sur Instagram</a>


        </article>

    </div>



</section>


<section id="avis">
    <div class="container">


        <header class="header-avis">
            <h1>Vos avis</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

        </header>

        <div class="owl-carousel carousel-avis">
            <?php foreach ($list_comment as $comment) : ?>
            <article class="item">
                 
                <h2 alt="First slide"><?php echo $comment["title"]; ?></h2>
                <p><?php echo $comment["content"]; ?></p>
                <p> Jean Michel Heureux</p>
                
            </article>
            <?php endforeach; ?>
        </div>



        <a href="#" class="button">Donnez votre avis</a>




    </div>
</section>

<section id="about">
    <div class="container">

        <header class="header-about">
            <h1>à propos</h1>

        </header>

        <article class="presentation">
            <img src="../Aztrek/images/about-aztrek.jpg" alt="photo préparation voyage">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                ex ea </p>

        </article>

        <article class="guide">
            <img src="../Aztrek/images/about-guide.jpg" alt="photo randonnée avec un guide">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                ex ea </p>

        </article>

        <a href="#" class="more">En savoir plus</a>

    </div>

</section>


<?php getFooter(); ?>