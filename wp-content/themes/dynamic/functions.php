
<!-- pour rajouter une nouvelle section de menu  -->
<!-- primary est la clé puis la valeur apres la flèche le nom de la zone de menu -->

<?php
function descodeuses_setup() {
  register_nav_menu(
    array(
      'primary' => 'Menu principal',
      'secondary' => 'Menu secondaire',
      'footer' => 'Menu pied de page',
      'social' => 'Menu réseaux sociaux',
    )
  );

}


add_action('after_setup_theme', 'descodeuses_setup');
 ?>
<!-- appel de fonction automatique à la chaîne avec le premier parametre,le nom de function wordpress lié au thème et le 2eme parametre le nom de notre fonction -->
