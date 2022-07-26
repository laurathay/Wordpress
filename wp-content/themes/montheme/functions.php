<?php

function mon_theme_support() {
	add_theme_support('title_tag');
}

function mon_theme_register_assets() {
	wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css', [], 1.2); //version mise a jour pour eviter la mise en cache de fichier css ou js
	wp_register_script('bootstraps', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', ['poppers', 'jquery'], false, true);	
	wp_register_script('poppers', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js', [], null, true);
	wp_deregister_script('jquery'); //la on desenregistre le jquery de wordpress
	wp_register_script('jquery', 'le-chemin-src-copier-dans-jquery-min-js', [], false, true); //dans la doc on a pas de dependance, pas de version, in footer a true
	wp_enqueue_style('bootstrap');
	wp_enqueue_script('bootstrap');
}

function mon_theme_title_separator() {
    return '|';
}

add_action('after_setup_theme', 'mon_theme_support');
add_action('wp_enqueue_script','mon_theme_register_assets'); 
// on utilise un filter pour le titre 
add_filter('document_title_separator', 'mon_theme_title_separator');