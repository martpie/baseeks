<?php



/* ------------------------------------
 * ----- OPTIONS ----------------------
 * ----------------------------------*/
 
     // PHP Debug -- By default on 'all' to best code practices
     define('ENABLE_PHP_DEBUGGER',    'all'); // 'all'/'default'/'none'
     
     // jQuery
     define('ENABLE_JQUERY',          true);
     define('ENABLE_JQUERY_UI',       false);
     define('ENABLE_JQUERY_MOBILE',   false);
     
     
 /* -----------------------------------
  * ----- SOME STUFF ------------------
  * ---------------------------------*/    
     
     // Nothing here anymore (for the moment)
     
     
     
     
/* ------------------------------------
 * ----- GENERAL SUPPORTS -------------
 * ----------------------------------*/

    add_theme_support('menus'); // Menus

    remove_action('wp_head', 'wp_generator'); // Security: hide WordPress version
    
    
    
/* ------------------------------------
 * ----- HOOKS ------------------------
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

        
        /* using google hosted JS scripts, if you wonder why, check this link: https://stackoverflow.com/questions/2180391/why-should-i-use-googles-cdn-for-jquery */
        if(ENABLE_JQUERY){        
            wp_deregister_script('jquery'); 
            wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"), false, '1.11.0', true);
            wp_enqueue_script('jquery');
        }
        
        if(ENABLE_JQUERY_MOBILE){   
            wp_register_script('jquery_ui', ("https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"), false, '1.10.4', true);           
            wp_enqueue_script('jquery_ui');
        }
        
        if(ENABLE_JQUERY_MOBILE){  
            wp_register_script('jquery_mobile', ("https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.2/jquery.mobile.min.js"), false, '1.4.2', true);
            wp_enqueue_script('jquery_mobile');
        }

        /* You can add you own scripts here */
    }
    
    
    
    
/* ------------------------------------
 * ----- DEBUGGER ---------------------
 * ----------------------------------*/

    switch(ENABLE_PHP_DEBUGGER){
        case 'all':
            error_reporting(E_ALL);
            break;
        case 'default':
            // Default PHP configuration
            error_reporting(E_ALL ^ E_NOTICE);
            break;
        case 'none':
            // Disable debugger, no error will be displayed
            error_reporting(E_ALL);
            break;
    }
    
?>
















