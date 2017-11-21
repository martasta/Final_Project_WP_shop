<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function wykroje_enqueue_style() {

    wp_enqueue_style(
        'main',
        get_stylesheet_directory_uri() . '/css/main.css',
        null );

}
add_action( 'wp_enqueue_scripts' , 'wykroje_enqueue_style' );


function register_my_menus() {
    register_nav_menus(
        array(

            'main' => 'Main Menu'
        )
    );
} add_action('init','register_my_menus');

?>
