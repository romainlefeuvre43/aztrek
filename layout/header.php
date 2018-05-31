<?php
require_once __DIR__ . '/../lib/functions.php';

$utilisateur = currentUser();
?>

<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="...">
  <meta name="keywords" content="Trek aventure sport montagne voyage...">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aztrek - Un nouveau monde à chaque pas</title>
  <link rel="shortcut icon" href="./images/favicon.ico">

  <link rel="stylesheet" href="./css/owl.carousel.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
  <link rel="stylesheet" href="./css/jquery.sidr.light.min.css">
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

  <header id="main-header">
    <div class="container">




<nav id="nav-secondaire">
      <a class="burger" href="#main-nav">Toggle menu</a>


        <a class="newsletter" href="#">News-Letter</a>

       

        <a class="phone" href="#">Phone</a>
        
        <?php if (!isset($utilisateur["id"])) : ?>
        <a class="user" href="admin/login.php">Login</a>
        <?php else: ?>
         <a class="user" href="admin/login.php">Mon espace</a>
         <?php endif; ?>

      </nav>

      <div class="logo-header">
        <a href="index.php"><img src="../Aztrek/images/logo-aztrek.svg" alt="logo aztrek"> </a>

      </div>

      <?php getMenu(); ?>

    </div>

  </header>


  <main>

