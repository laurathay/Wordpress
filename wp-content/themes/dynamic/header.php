<!DOCTYPE html>
<!-- https://developer.wordpress.org/reference/ -->
<html <?php language_attributes(); ?>> <!-- a la place de lang="en" dir: "ltr" -->
<head>
  <meta charset="<?php bloginfo('charset'); ?>"> <!-- a la place de utf-8 -->
  <meta name="description" content="<?php bloginfo('description'); ?>">  <!-- cette balise meta est copié coller pour donner la description SEO friendly ou niche (technico-marketing) -->
  <meta name="author" content="<?php bloginfo('author'); ?>"> <!-- cette balise meta est copié coller pour décrire l'auteur -->
  <title><?php bloginfo('name');?></title> <!-- à la place du titre Blog -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4e5f136f21.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?> <!-- pour que wordpress puisse le CMS wordpress puisse mettre sa tambouille une fois fini le head -->
</head>
<body <?php body_class();  ?>> <!-- pour intégrer la mise en page de wordpress -->
<header class="site-header">
  <nav class="navigation navigation-top desktop-navigation">
  <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary'
        )
      );
   ?>
  </nav>
  <nav class="navigation navigation-top mobile-navigation">

    <ul>
      <li class="mobile-menu"><i class="fa fa-bars fa-1x"></i>
          <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'primary',
                  'class' => 'sub-navigation',
                )
              );
           ?>
      </li>
    </ul>
  </nav>
  <div class="site-branding">
    <a href="index.html"><img src="./assets/images/logo-louvre.png" alt="Logo du site"></a>
  </div>
  <nav class="navigation navigation-aside">
    <ul>
      <li><a href="#"><i class="fas fa-search"></i></a></li>
      <li><a href="#"><i class="fas fa-user"></i></a></li>
      <li>
        <a href="#">
          <i class="fas fa-shopping-cart"></i>
          <span class="count cart-counter">0</span>
        </a>
      </li>
    </ul>
  </nav>
</header>
