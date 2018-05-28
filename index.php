<?php
require_once 'lib/functions.php';


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
            <a href="#">
                <figure><img src="../Aztrek/images/bg-mexique.png" alt="photo du mexique avec montagne et temple">
                    <figcaption>
                        <h2>Mexique</h2>
                    </figcaption>
                </figure>
            </a>

            <a href="#">
                <figure><img src="../Aztrek/images/bg-guatemala.png" alt="photo d'un lac avec vue sur montagne">
                    <figcaption>
                        <h2>Guatémala</h2>
                    </figcaption>
                </figure>
            </a>

            <a href="#">
                <figure><img src="../Aztrek/images/bg-salvador.png" alt="photo jungle autour du volcan">
                    <figcaption>
                        <h2>Salvador</h2>
                    </figcaption>
                </figure>
            </a>

            <a href="#">
                <figure><img src="../Aztrek/images/bg-honduras.png" alt="photo jungle avec route">
                    <figcaption>
                        <h2>Honduras</h2>
                    </figcaption>
                </figure>
            </a>

            <a href="#">
                <figure><img src="../Aztrek/images/bg-costa-rica.jpg" alt="photo volcan sous les nuages">
                    <figcaption>
                        <h2>Costa-Rica</h2>
                    </figcaption>
                </figure>
            </a>

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
            <article class="item">
                <a href="#">
                    <figure><img src="../Aztrek/images/caminando-mexico.jpg" alt="First slide">
                        <figcaption>
                            <h2>Caminando Mexico</h2>
                            <p>10 jours</p>
                            <p>À partir de 3000€</p>
                        </figcaption>
                    </figure>
                </a>
            </article>
            <article class="item">
                <a href="#">
                    <figure><img src="../Aztrek/images/bg-yucatan.jpg" alt="Second slide">
                        <figcaption>
                            <h2>Les Trésors du Yucatán</h2>
                            <p>7 jours</p>
                            <p>À partir de 2500€</p>
                        </figcaption>
                    </figure>
                </a>
            </article>
            <article class="item">
                <a href="#">
                    <figure><img src="../Aztrek/images/bg-volcans.jpg" alt="Third slide">
                        <figcaption>
                            <h2>Les Volcans</h2>
                            <p>14 jours</p>
                            <p>À partir de 4000€</p>
                        </figcaption>
                    </figure>
                </a>
            </article>
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
            <article class="item">
                <h2 alt="First slide">Caminando Mexico</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                <p> Jean Michel Heureux</p>

            </article>
            <article class="item">
                <h2 alt="Second slide">Parc national Pico Bonito</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                <p>Jean Content</p>


            </article>
            <article class="item">
                <h2 alt="Third slide">Monteverde</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                <p>Michel Sceptique</p>

            </article>
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