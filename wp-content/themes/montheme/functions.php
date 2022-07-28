<?php

function mon_theme_support() {
	add_theme_support('title_tag');
    add_theme_support('post_thumbnails');
}

function mon_theme_register_assets() {
	wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css', [], 1.2); //version mise a jour pour eviter la mise en cache de fichier css ou js
	wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', ['poppers', 'jquery'], false, true);	
	wp_enqueue_style('bootstrap');
	wp_enqueue_script('bootstrap');
}

function mon_theme_title_separator() {
    return '|';
}

add_action('after_setup_theme', 'mon_theme_support');
add_action('wp_enqueue_script','mon_theme_register_assets'); 
add_action('wp_enqueue_style','mon_theme_register_assets'); 

// on utilise un filter pour le titre 
add_filter('document_title_separator', 'mon_theme_title_separator');