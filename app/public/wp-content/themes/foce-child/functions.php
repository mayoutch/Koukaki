<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
     // Ajout de Swiper (AVANT LES FEUILLES DE STYLE !)
     wp_enqueue_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '1.0');
     wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), '1.0', true);
     // Déja présent : le parent-style :
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // Ajout -- Chargement du Css du thème enfant
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/style.css');
    // Ajout -- Chargement du fichier Js
    wp_enqueue_script( 'theme-scripts', get_theme_file_uri( '/theme-scripts.js' ),array(), _S_VERSION, true );
   
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}