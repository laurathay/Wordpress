<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<aside id="sidebar" class="sidebar">
    <?php dynamic_sidebar( 'sidebar' ); ?>
</aside>


<!-- <aside class="sidebar" id="sidebar">
  <div class="widget">
    <h3 class="widget-title widgettitle">Zone de widgets</h3>
    <p>Ajout dynamique des titres et contenus des widgets.</p>
  </div>
</aside> -->
