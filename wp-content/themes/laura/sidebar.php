<!-- si cocher affiche la side bar hideen -->

 <?php if(checked('widgets-sidebar')) :
   echo hidden('widgets-sidebar');
     endif; ?>"

<aside class="sidebar hidden">
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
