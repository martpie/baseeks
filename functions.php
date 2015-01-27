<?php



/* ------------------------------------
 * ----- THEME OPTIONS ----------------
 * ----------------------------------*/

    // PHP Debug -- By default on 'all' for best code practices
    define('ENABLE_PHP_DEBUGGER',       'all'); // 'all'/'default'/'none'

    // jQuery
    define('ENABLE_JQUERY',                true);                     // true / false
    define('ENABLE_JQUERY_UI',             false);                    // true / false
    define('ENABLE_JQUERY_MOBILE',         false);                    // true / false

    // JS Extensions
    define('ENABLE_GOOGLE_ANALYTICS',      false);                    // true / false

    // Baseeks PHP Extentions
    define('ENABLE_GET_BROWSER',           false);                    // true / false

    // Baseeks Wordpress Options
    define('ENABLE_MENUS',                 true);                     // true / false
    define('ENABLE_POST_THUMBNAILS',       true);                     // true / false
    define('POST_THUMBNAILS_POST_TYPE',    serialize(array('post'))); // Type of the post where thumbnails are enabled
    define('DISABLE_ADMIN_BAR',            false);                    // true / false




 /* -----------------------------------
  * ----- SOME STUFF ------------------
  * ---------------------------------*/

    add_image_size('background', 1920, 1080);




/* ------------------------------------
 * ----- VARIABLES --------------------
 * ----------------------------------*/

    $root = dirname(__FILE__);




/* ------------------------------------
 * ----- SECURITY ---------------------
 * ----------------------------------*/

    remove_action('wp_head', 'wp_generator'); // Hide WordPress version




/* ------------------------------------
 * ----- HOOKS ------------------------
 * ----------------------------------*/

    add_action('wp_enqueue_scripts', 'add_styles');  // Style
    add_action('wp_enqueue_scripts', 'add_scripts'); // Scripts
    add_action('wp_enqueue_scripts', 'add_fonts');   // Fonts
    add_action('admin_menu', 'remove_menus');        // Remove menu items




/* ------------------------------------
 * ----- ADMIN ------------------------
 * ----------------------------------*/

function remove_menus(){

        //remove_menu_page( 'index.php' );                  //Dashboard
        //remove_menu_page( 'edit.php' );                   //Posts
        //remove_menu_page( 'upload.php' );                 //Media
        //remove_menu_page( 'edit.php?post_type=page' );    //Pages
        //remove_menu_page( 'edit-comments.php' );          //Comments
        //remove_menu_page( 'themes.php' );                 //Appearance
        //remove_menu_page( 'plugins.php' );                //Plugins
        //remove_menu_page( 'users.php' );                  //Users
        //remove_menu_page( 'tools.php' );                  //Tools
        //remove_menu_page( 'options-general.php' );        //Settings

    }



/* ------------------------------------
 * ----- STYLESHEETS ------------------
 * ----------------------------------*/

    function add_styles(){

        // Think about using a CDN for Bootstrap

        wp_register_style('style_bootstrap',  get_template_directory_uri().'/css/bootstrap/bootstrap.min.css', false, null, 'all');  // bootstrap stylesheet
        wp_register_style('style_main',       get_template_directory_uri().'/css/style_main.css',              false, null, 'all');  // your style
        wp_register_style('style_responsive', get_template_directory_uri().'/css/style_responsive.css',        false, null, 'all');  // your responsive style (if needed)
        wp_register_style('style_retina',     get_template_directory_uri().'/css/style_retina.css',            false, null, 'all');  // your retina style (if needed)

        wp_enqueue_style('style_bootstrap');
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
            wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"), false, '1.11.1', true);
            wp_enqueue_script('jquery');
        }

        if(ENABLE_JQUERY_UI){
            wp_register_script('jquery_ui', ("//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"), false, '1.10.4', true);
            wp_enqueue_script('jquery_ui');
        }

        if(ENABLE_JQUERY_MOBILE){
            wp_register_script('jquery_mobile', ("//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.2/jquery.mobile.min.js"), false, '1.4.2', true);
            wp_enqueue_script('jquery_mobile');
        }

        if(ENABLE_GOOGLE_ANALYTICS){
            wp_register_script('google_analytics_library', "http://www.google-analytics.com/ga.js", false, '1.0', true);
            wp_enqueue_script('google_analytics_library');
            wp_register_script('google_analytics', (get_template_directory_uri().'/js/google.analytics.js'), false, '1.0', true);
            wp_enqueue_script('google_analytics');
        }

        /* Bootstrap */
        wp_register_script('bootstrap', (get_template_directory_uri().'/js/libs/bootstrap.min.js'), false, '3.1.1', true);
        wp_enqueue_script('bootstrap');

        /* Your custom JS file */
        wp_register_script('custom', (get_template_directory_uri().'/js/custom.js'), false, '1.0', true);
        wp_enqueue_script('custom');

        /* You can add you own scripts here */

    }




/* ------------------------------------
 * ----- SCRIPTS ----------------------
 * ----------------------------------*/

function add_fonts() {

    wp_register_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
    wp_enqueue_style( 'font_awesome');

}




/* ------------------------------------
 * ----- BASEEKS PHP EXTENSIONS -------
 * ----------------------------------*/

    if(ENABLE_GET_BROWSER){
        require_once($root . '/../php/get_browser.php');
    }




/* ------------------------------------
 * ----- WORDPRESS OPTIONS ------------
 * ----------------------------------*/

    if(ENABLE_MENUS){
        add_theme_support('menus'); // Enable enus
    }

    if(ENABLE_POST_THUMBNAILS){
        $post_types = unserialize(POST_THUMBNAILS_POST_TYPE);
        add_theme_support( 'post-thumbnails', $post_types);
    }

    if(DISABLE_ADMIN_BAR){
        add_filter('show_admin_bar', '__return_false');
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
