<!-- TODO A la maison - Déclarer une zone de widgets et l'insérer dynamiquement ci-après -->
<aside class="sidebar" id="widgets-sidebar">
  <?php
    if(is_active_sidebar('widgets-sidebar')) :
      dynamic_sidebar('widgets-sidebar');
    endif;
   ?>
</aside>
