<!-- si cocher affiche la side bar hideen --> 

<aside class="sidebar  <?php if(get_theme_mod('widgets-sidebar')) : echo 'hidden'; endif; ?>" id="widgets-sidebar">
  <?php
    if(is_active_sidebar('widgets-sidebar')) :
      dynamic_sidebar('widgets-sidebar');
    endif;
  ?>
  <!-- <div class="widget">
    <h3 class="widget-title">Zone de widgets</h3>
    <p>Ajout dynamique des titres et contenus des widgets.</p>
  </div> -->
</aside>
