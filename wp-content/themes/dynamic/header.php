<!DOCTYPE html>
<!-- Doc WP : https://developer.wordpress.org/reference/ -->
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="<?php bloginfo('author'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4e5f136f21.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>
<body>
  <header class="site-header">
    <nav class="navigation navigation-top desktop-navigation">
      <ul>
        <li><a href="home.html">Accueil</a></li>
        <li><a href="#">Boutique</a></li>
        <li><a href="index.html" class="active">Blog</a></li>
        <li><a href="page.html">Contact</a></li>
      </ul>
    </nav>
    <nav class="navigation navigation-top mobile-navigation">
      <ul>
        <li class="mobile-menu"><i class="fa fa-bars fa-1x"></i>
          <ul class="sub-navigation">
            <li><a href="home.html">Accueil</a></li>
            <li><a href="#">Boutique</a></li>
            <li><a href="index.html" class="active">Blog</a></li>
            <li><a href="page.html">Contact</a></li>
          </ul>
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
