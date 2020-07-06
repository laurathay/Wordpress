<?php get_header(); ?>
<!-- TODO - Ajouter une balise style à <section> et définir en image de fond l'image du paramètre 'fp_container_image'
          + Si la case "effet boxy" est cochée (clé 'fp_container_boxy'), ajouter la classe CSS "boxy-header"
            à <section> à l'aide de la fonction echo
            Utiliser : get_theme_mod() -->
  <section class="page-header front-page-header <?php if(get_theme_mod('fp_container_boxy')) : echo 'boxy-header'; endif; ?>"
    style="background-image: url('<?php echo get_theme_mod('fp_container_image'); ?>');">
<!-- TODO - Afficher dynamiquement le titre défini dans le paramètre 'fp_texts_title'
          + ajouter une balise style et déterminer en pixel la taille du titré définie
            dans le paramètre 'fp_texts_title_size' (ne pas oublier le suffixe px)
            Utiliser : get_theme_mod() -->
    <h1 class="page-title" style="font-size: <?php echo get_theme_mod('fp_texts_title_size'); ?>px;">
      <?php echo get_theme_mod('fp_texts_title'); ?>
    </h1>
<!-- TODO - Afficher dynamiquement la description définie dans le paramètre 'fp_texts_description'
            Utiliser : get_theme_mod() -->
    <p class="page-description">
      <?php echo get_theme_mod('fp_texts_description'); ?>
    </p>
<!-- TODO - Afficher dynamiquement le texte du bouton défini dans le paramètre 'fp_button_text'
          + récupérer également le lien du bouton défini dans le paramètre 'fp_button_url'
          Utiliser : get_theme_mod() -->
    <a href="<?php echo get_theme_mod('fp_button_url'); ?>">
      <!-- TODO - Ajouter à la liste des classes de <section>, la valeur du paramètre 'fp_button_style'
                  Utiliser : get_theme_mod() -->
      <button type="button" class="call-to-action <?php echo get_theme_mod('fp_button_style'); ?>">
        <?php echo get_theme_mod('fp_button_text'); ?>
      </button>
  </a>
<!-- TODO - Ajouter à la liste des classes de <section>, la valeur du paramètre 'fp_quote_background'
            Utiliser : get_theme_mod() -->
  <section class="custom-section <?php echo get_theme_mod('fp_quote_background'); ?>">
    <blockquote class="star-quote">
      <!-- TODO - Afficher dynamiquement la citation définie dans le paramètre 'fp_quote_text'
                  Utiliser : get_theme_mod() -->
      <p class="quote-content">
        <?php echo get_theme_mod('fp_quote_text'); ?>
      </p>
      <!-- TODO - Afficher dynamiquement l'auteur/ la source définie dans le paramètre 'fp_quote_source'
                  Utiliser : get_theme_mod() -->
      <cite class="quote-footer">
        <?php echo get_theme_mod('fp_quote_source'); ?>
      </cite>
    </blockquote>
  </section>
</section>
<?php get_footer(); ?>
