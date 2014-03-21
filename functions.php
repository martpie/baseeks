<?php

/* ------------------------------------
 * ----- GENERAL SUPPORTS -------------
 * ----------------------------------*/

    add_theme_support( 'menus' ); // Menus

    add_action('wp_enqueue_scripts', 'add_styles'); // Style
    add_action('wp_enqueue_scripts', 'add_scripts'); // Scripts




/* ------------------------------------
 * ----- STYLESHEETS ------------------
 * ----------------------------------*/

    function add_styles(){

        wp_register_style('style_normalize', get_bloginfo('template_directory').'/css/style_normalize.css', false, null, false);
        wp_register_style('style_main', get_bloginfo('template_directory').'/css/style_main.css', false, null, false);
        wp_register_style('style_responsive', get_bloginfo('template_directory').'/css/style_responsive.css', false, null, false);

        wp_enqueue_style('style_normalize');
        wp_enqueue_style('style_main');
        wp_enqueue_style('style_responsive');

        /* You can add you own stylesheets here */
    }




/* ------------------------------------
 * ----- SCRIPTS ----------------------
 * ----------------------------------*/

    function add_scripts(){

        wp_deregister_script('jquery'); 
        wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"), false, '1.10.2', true);

        wp_enqueue_script('jquery');

        /* You can add you own scripts here */
    }

?>