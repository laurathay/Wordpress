<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Blog</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4e5f136f21.js" crossorigin="anonymous"></script>
  <script src="./assets/js/main.js" type="text/javascript"></script>
</head>
<body>
  <header class="site-header">
    <div class="site-branding">
      <a href="index.html"><img src="./assets/images/logo-rock-band.png" alt="Logo du site"></a>
    </div>
    <nav class="navigation navigation-top desktop-navigation">
      <ul>
        <li><a href="front-page.html">Accueil</a></li>
        <li><a href="index.html" class="active">Blog</a></li>
        <li><a href="page.html">Page</a></li>
        <li><a href="single.html">Article</a></li>
      </ul>
    </nav>
    <nav class="navigation navigation-top mobile-navigation">
      <ul>
        <li class="mobile-menu"><i class="fa fa-bars fa-1x"></i>
          <ul class="sub-navigation">
            <li><a href="front-page.html">Accueil</a></li>
            <li><a href="index.html" class="active">Blog</a></li>
            <li><a href="page.html">Page</a></li>
            <li><a href="single.html">Article</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <nav class="navigation navigation-aside">
      <ul>
        <li class="search-toggle">
          <a href="#"><i class="fas fa-search"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-shopping-cart"></i>
            <span class="count cart-counter">0</span>
          </a>
        </li>
      </ul>
    </nav>
    <section class="search-popup">
      <form class="search-form" action="index.html" method="post">
        <input type="text" name="search" value="" placeholder="Tapez quelque chose...">
        <input type="submit" name="submit" value="Rechercher">
      </form>
    </section>
  </header>
  <main class="container site-content">
    <section class="main-content">
      <article class="entry post">
        <header class="entry-header">
          <img src="./assets/images/joey-thompson-unsplash.jpg" alt="Foule"
          class="featured-image">
          <section class="entry-metadata">
            <section class="entry-data">
              <h6 class="publish-date">29 juin 2020</h6>
              <h5 class="entry-category"><a href="#">Actualité</a></h5>
              <h4 class="comments-number"><i class="fas fa-comment"></i> 3</h4>
            </section>
            <h2 class="entry-title">
              <a href="single.html">Vos meilleurs moments en concert</a>
            </h2>
          </section>
        </header>
        <section class="entry-content">
          <p>
            Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deseru mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
            do eiusmod tempor incididunt…
          </p>
        </section>
        <footer class="entry-footer">
          <div class="read-more">
            <a href="single.html">Lire la suite</a>
          </div>
        </footer>
      </article>
      <nav class="navigation pagination">
        <ul>
          <li><a href="#"><i class="fas fa-arrow-left"></i> Précédent</a></li>
          <li><a href="#">Suivant <i class="fas fa-arrow-right"></i></a></li>
        </ul>
      </nav>
    </section>
    <aside class="sidebar">
      <div class="widget">
        <h3 class="widget-title">Zone de widgets</h3>
        <p>Ajout dynamique des titres et contenus des widgets.</p>
      </div>
    </aside>
<?php get_footer(); ?>
