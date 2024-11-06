<?php

function perso_setup() {

	register_nav_menu( 'primary', 'Menu principal' );
}

add_action( 'after_setup_theme', 'perso_setup' );

add_theme_support( 'post-thumbnails' ); // ajout de image à la une //


function ajouter_script_personnalise() {
    // Charger jQuery inclus avec WordPress
    wp_enqueue_script('jquery');
    
    // Ajouter le fichier script.js personnalisé
    wp_enqueue_script('script-js', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'ajouter_script_personnalise');

function custom_redirect_specific_page() {
    if (is_page('https://infirmieradomicile.ch/?s={search_term_string}')) { // Remplacez par l'URL slug de la page
        wp_redirect(home_url());
        exit;
    }
}
add_action('template_redirect', 'custom_redirect_specific_page');

?>