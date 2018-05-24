<?php

/**
 * Gestion des miniatures dans les thèmes
 * Donne la possibilité au thème d'avoir des images à la une
 **/

add_theme_support('post-thumbnails');

/**
 * Ajoute une taille d'image
 */
add_image_size( '320x217',320,217, true );
add_image_size( '123x123',123,123, true );


/**
 * Initialisation
 * Styles, Jquery
 */

add_action('wp_enqueue_scripts', 'azdojiazdopjazd');

function azdojiazdopjazd() {
    $path = get_stylesheet_directory_uri();

    $css = array(
        'main'  => $path . '/assets/css/main.css'
    );

    // // Scripts CSS
    foreach ($css as $id => $path_file) {
        wp_register_style($id, $path_file, array(), false, 'all');
        wp_enqueue_style($id);
    }

    /**
     * Ajout des JS
     */


    $js = array(
        'jquery'   => $path . '/assets/js/jquery.min.js',
        'poptrox'   => $path . '/assets/js/jquery.poptrox.min.js',
        'skel'   => $path . '/assets/js/skel.min.js',
        'util'   => $path . '/assets/js/util.js',
        'main-js'  => $path . '/assets/js/main.js'
    );

    // supp la version de base de WP
    wp_deregister_script('jquery');

    foreach ($js as $id => $path_file) {
        wp_register_script($id, $path_file, array(), false, true);
        wp_enqueue_script($id);
    }

}



if( function_exists('acf_add_options_page') ) {

    $args = array(
        'page_title' => ('Options du site'),
        'menu_title' => ('Options du site'),
        'menu_slug'  => 'all-configurations-theme',
        'icon_url'   => 'dashicons-feedback',
        'position'   => 61,
    );
    $parent = acf_add_options_page($args);

   
    // add sub page
    acf_add_options_sub_page(array(
        'page_title' 	=> ('Éléments globaux'),
        'menu_title' 	=> ('Éléments globaux'),
        'parent_slug' 	=> $parent['menu_slug'],
    ));

}
