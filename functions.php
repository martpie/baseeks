<?php



/* ------------------------------------
 * ----- OPTIONS ----------------------
 * ----------------------------------*/
 
    // PHP Debug -- By default on 'all' to best code practices
    define('ENABLE_PHP_DEBUGGER',       'all'); // 'all'/'default'/'none'
     
    // jQuery
    define('ENABLE_JQUERY',             true);
    define('ENABLE_JQUERY_UI',          false);
    define('ENABLE_JQUERY_MOBILE',      false);   
    
    // JS Extensions
    define('ENABLE_GOOGLE_ANALYTICS',   false);
    define('ENABLE_RETINA_JS',          false);

    // PHP Extentions
    define('ENABLE_GET_BROWSER',        false);

     
           
     
 /* -----------------------------------
  * ----- SOME STUFF ------------------
  * ---------------------------------*/    
     
     // Nothing here anymore (for the moment)
     
     
     
     
/* ------------------------------------
 * ----- VARIABLES --------------------
 * ----------------------------------*/
    
    $root = dirname(__FILE__);




/* ------------------------------------
 * ----- GENERAL SUPPORTS -------------
 * ----------------------------------*/

    add_theme_support('menus'); // Enable enus

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

        wp_register_style('style_normalize', get_bloginfo('template_directory').'/css/style_normalize.css', false, null, false);      // css normalizer for all browsers
        wp_register_style('style_theme', get_bloginfo('template_directory').'/css/style_theme.css', false, null, false);              // theme style, including boxes, and other stuffs
        wp_register_style('style_main', get_bloginfo('template_directory').'/css/style_main.css', false, null, false);                // your style
        wp_register_style('style_responsive', get_bloginfo('template_directory').'/css/style_responsive.css', false, null, false);    // your responsive style (if needed)
        wp_register_style('style_retina', get_bloginfo('template_directory').'/css/style_retina.css', false, null, false);            // your retina style (if needed)

        wp_enqueue_style('style_normalize');
        wp_enqueue_style('style_theme');
        wp_enqueue_style('style_main');
        wp_enqueue_style('style_responsive');
        wp_enqueue_style('style_retina');

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
               
        if(ENABLE_GOOGLE_ANALYTICS){  
            wp_register_script('google_analytics', (get_template_directory_uri().'/js/google_analytics.js'), false, '1.0', true);
            wp_enqueue_script('google_analytics');
        }
        
        if(ENABLE_RETINA_JS){  
            wp_register_script('retina_js', (get_template_directory_uri().'/js/libs/retina.min.js'), false, '1.3.0', true);
            wp_enqueue_script('retina_js');
        }
        
        wp_register_script('custom', (get_template_directory_uri().'/js/custom.js'), false, '1.0', true);
        wp_enqueue_script('custom');
        
        /* You can add you own scripts here */
        
    }
    



/* ------------------------------------
 * ----- PHP EXTENSIONS ---------------
 * ----------------------------------*/

    if(ENABLE_GET_BROWSER){  
        require_once($root . '/../php/get_browser.php');
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