<?php

/* ------------------------------------
 * ----- OPTIONS ----------------------
 * ----------------------------------*/
 
     // Debug
     $activate_debugger = 'all'; // 'all'/'dafault'/'none'
     
     // jQuery
     $activate_jquery = true;
     $activate_jquery_ui = false;
     $activate_jquery_mobile = false;
     
     
     
     
/* ------------------------------------
 * ----- GENERAL SUPPORTS -------------
 * ----------------------------------*/

    add_theme_support('menus'); // Menus

    remove_action('wp_head', 'wp_generator'); // Security: hide WordPress version
    
    
    
/* ------------------------------------
 * ----- HHOOKS -----------------------
 * ----------------------------------*/
    
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

        /* using google hosted JS scripts for better performance, you can find more infos there: https://stackoverflow.com/questions/2180391/why-should-i-use-googles-cdn-for-jquery */
        if($activate_jquery){        
            wp_deregister_script('jquery'); 
            wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"), false, '1.11.0', true);
            wp_enqueue_script('jquery');
        }
        
        if($activate_jquery_ui){   
            wp_register_script('jquery_ui', ("https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"), false, '1.10.4', true);           
            wp_enqueue_script('jquery_ui');
        }
        
        if($activate_jquery_mobile){  
            wp_register_script('jquery_mobile', ("https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.2/jquery.mobile.min.js"), false, '1.4.2', true);
            wp_enqueue_script('jquery_mobile');
        }

        /* You can add you own scripts here */
    }
    
    
    
    
/* ------------------------------------
 * ----- DEBUGGER ---------------------
 * ----------------------------------*/

    if($activate_debugger == 'all'){
        // Enable 
        error_reporting(E_ALL);
    }
    elseif($activate_debugger == 'default'){
        // Default PHP configuration
        error_reporting(E_ALL ^ E_NOTICE);
    }
    elseif($activate_debugger == 'none'){
        // Disable debugger, no error will be displayed
        error_reporting(E_ALL);
    }
    
?>