<footer class="site-footer container">
  <section class="widgets-sections">
    <!-- TODO COURS - Déclarer une zone de widgets et l'insérer dynamiquement -->
    <div class="widgets-section widgets-section-1" id="widgets-section-1">
      <?php
        if(is_active_sidebar('widgets-section-1')) :
          dynamic_sidebar('widgets-section-1');
        endif;
       ?>
    </div>
    <!-- TODO Volontaire - Déclarer une zone de widgets et l'insérer dynamiquement ci-après -->
    <div class="widgets-section widgets-section-2" id="widgets-section-2">
      <?php
        if(is_active_sidebar('widgets-section-2')) :
          dynamic_sidebar('widgets-section-2');
        endif;
       ?>
    </div>
    <!-- TODO En autonomie - Déclarer une zone de widgets et l'insérer dynamiquement ci-après -->
    <div class="widgets-section widgets-section-3" id="widgets-section-3">
      <?php
        if(is_active_sidebar('widgets-section-3')) :
          dynamic_sidebar('widgets-section-3');
        endif;
       ?>
    </div>
    <!-- TODO A la maison - Déclarer une zone de widgets et l'insérer dynamiquement ci-après -->
    <div class="widgets-section widgets-section-4" id="widgets-section-4">
      <?php
        if(is_active_sidebar('widgets-section-4')) :
          dynamic_sidebar('widgets-section-4');
        endif;
       ?>
    </div>
  </section>
  <section class="footer-infos">
    <!-- TODO En autonomie - Déclarer une zone de menu "Menu de pied de page"
    l'insérer dynamiquement ci-après -->
    <div class="navigation-secondary" id="navigation-secondary">
      <nav class="navigation navigation-bottom">
        <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'footer'
          )
        );
         ?>
      </nav>
    </div>
    <!-- TODO A la maison - Déclarer une zone de menu "réseaux sociaux" et
    l'insérer dynamiquement ci-après -->
    <div class="social-medias">
      <nav class="navigation navigation-socials" id="navigation-socials">
        <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'social'
          )
        );
         ?>
      </nav>
    </div>
  </section>
</footer>
<!-- COURS - appel de fonction pour afficher le menu d'administration
à l'accueil du site et permettre la réactualisation automoatique au niveau du Customizer -->
<?php wp_footer(); ?>
</body>
</html>
