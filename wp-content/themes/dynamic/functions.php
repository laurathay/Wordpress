
<!-- pour rajouter une nouvelle section de menu  -->
<!-- primary est la clé puis la valeur apres la flèche le nom de la zone de menu -->

<?php
function descodeuses_setup() {
  register_nav_menus(
    array(
      'primary' => 'Menu principal',
      'secondary' => 'Menu secondaire',
      'footer' => 'Menu pied de page',
      'social' => 'Menu réseaux sociaux',
      'category' => 'Menu des catégories'
    )
  );

}

add_action('after_setup_theme', 'descodeuses_setup');
 ?>
<!-- appel de fonction automatique à la chaîne avec le premier parametre,le nom de function wordpress lié au thème et le 2eme parametre le nom de notre fonction -->

<!-- pour insérer la zone de widget -->
<?php
function descodeuses_widgets_init(){
  register_sidebar( array(
    'name'          => __( 'Sidebar'),
    'id'            => 'sidebar',
    'description'   => __( 'Zone de widgets'),
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title widgettitle">',
    'after_title'   => '</h3>',
    'before_paragraph' => '<p>',
    'after_paragraph' => '</p>'
  ));
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Widgets'),
    'id'            => 'widgets-section-1',
    'description'   => esc_html__( 'Zone de widgets 1'),
   'before_widget' => '<div  class="widgets-sections">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title widgettitle">',
    'after_title'   => '</h2>',
    'image'         => '<img src="./assets/images/logo-louvre.png" alt="Logo du site" >',
    'before_paragraph' =>'<p>',
    'after_paragraph' => '</p>'
  ));
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Widgets 2'),
    'id'            => 'widgets-section-2',
    'description'   => esc_html__( 'Zone de widgets 2'),
   'before_widget' => '<div  class="widgets-sections">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class = "widget-title widgettitle">',
    'after_title'   => '</h2>',
    'image'         => '<img src="./assets/images/logo-louvre.png" alt="Logo du site" >',
    'before_paragraph' =>'<p>',
    'after_paragraph' => '</p>'
  ));
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Widgets 3'),
    'id'            => 'widgets-section-3',
    'description'   => esc_html__( 'Zone de widgets 3'),
   'before_widget' => '<div  class="widgets-sections">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class = "widget-title widgettitle">',
    'after_title'   => '</h4>',
    'image'         => '<img src="./assets/images/logo-louvre.png" alt="Logo du site" >',
    'before_paragraph' =>'<p>',
    'after_paragraph' => '</p>'
  ));
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Widgets 4'),
    'id'            => 'widgets-section-4',
    'description'   => esc_html__( 'Zone de widgets 4'),
   'before_widget' => '<div  class="widgets-sections">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class = "widget-title widgettitle">',
    'after_title'   => '</h4>',
    'image'         => '<img src="./assets/images/logo-louvre.png" alt="Logo du site" >',
    'before_paragraph' =>'<p>',
    'after_paragraph' => '</p>'
  ));
}
do_action( 'widgets_init', 'wp_nav_menu' );
?>
