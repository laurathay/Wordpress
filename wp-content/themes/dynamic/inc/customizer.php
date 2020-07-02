<?php

function descodeuses_customize_register($wp_customize) {
  $wp_customize->add_section(
    array(
      'title' => 'Bannière',
      'description' => 'Description de la section',
    )
  );
}

add_action('customize_register', 'descodeuses_customize_register');

 ?>
