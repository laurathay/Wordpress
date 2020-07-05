<?php get_header(); ?>
<body>
  <header class="site-header">
    <nav class="navigation navigation-top desktop-navigation">
      <ul>
        <li><a href="home.html" class="active">Accueil</a></li>
        <li><a href="#">Boutique</a></li>
        <li><a href="index.html">Blog</a></li>
        <li><a href="page.html">Contact</a></li>
      </ul>
    </nav>
    <nav class="navigation navigation-top mobile-navigation">
      <ul>
        <li class="mobile-menu"><i class="fa fa-bars fa-1x"></i>
          <ul class="sub-navigation">
            <li><a href="home.html" class="active">Accueil</a></li>
            <li><a href="#">Boutique</a></li>
            <li><a href="index.html">Blog</a></li>
            <li><a href="page.html">Contact</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="site-branding">
      <img src="./assets/images/logo-louvre.png" alt="Logo du site" >
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
  <!-- TODO - Ajouter une balise style à <section> et définir en image de fond l'image du paramètre 'fp_container_image'
            + Si la case "effet boxy" est cochée (clé 'fp_container_boxy'), ajouter la classe CSS "boxy-header"
              à <section> à l'aide de la fonction echo
              Utiliser : get_theme_mod() -->
  <section class="page-header front-page-header"
  style="background-image: url('<?php echo get_theme_mod('fp_container_image'); ?>');">
    <!-- TODO - Afficher dynamiquement le titre défini dans le paramètre 'fp_texts_title'
              + ajouter une balise style et déterminer en pixel la taille du titré définie
                dans le paramètre 'fp_texts_title_size' (ne pas oublier le suffixe px)
                Utiliser : get_theme_mod() -->
    <h1 class="page-title">Bienvenue !</h1>
    <!-- TODO - Afficher dynamiquement la description définie dans le paramètre 'fp_texts_description'
                Utiliser : get_theme_mod() -->
    <p class="page-description">
      Un message d'accueil personnalisé. Lorem Ipsum is simply dummy text of
      the printing and typesetting industry. Lorem Ipsum has been the industry's
      standard dummy text ever since the 1500s, when an unknown printer took a
      galley of type and scrambled it to make a type specimen book. It has
      survived not only five centuries, but also the leap into electronic
      typesetting, remaining essentially unchanged.
    </p>
    <!-- TODO - Afficher dynamiquement le texte du bouton défini dans le paramètre 'fp_button_text'
              + récupérer également le lien du bouton défini dans le paramètre 'fp_button_url'
              Utiliser : get_theme_mod() -->
    <a href="index.html">
      <!-- TODO - Ajouter à la liste des classes de <section>, la valeur du paramètre 'fp_button_style'
                  Utiliser : get_theme_mod() -->
      <button type="button" class="call-to-action">Un appel à l'action</button>
    </a>
    <!-- TODO - Ajouter à la liste des classes de <section>, la valeur du paramètre 'fp_quote_background'
                Utiliser : get_theme_mod() -->
  <section class="custom-section">
    <blockquote class="star-quote">
      <!-- TODO - Afficher dynamiquement la citation définie dans le paramètre 'fp_quote_text'
                  Utiliser : get_theme_mod() -->
      <p class="quote-content">
        Words can be like X-rays, if you use them properly—they’ll go
        through anything. You read and you’re pierced.
      </p>
      <!-- TODO - Afficher dynamiquement l'auteur/ la source définie dans le paramètre 'fp_quote_source'
                  Utiliser : get_theme_mod() -->
      <cite class="quote-footer">
        Aldous Huxley, Brave New World
      </cite>
    </blockquote>
  </section>
</section>
<?php get_footer(); ?>
