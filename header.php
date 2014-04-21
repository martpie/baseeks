<?php

    /* PLEASE INCLUDE YOUR SCRIPTS AND STYLES WITH /functions.php */

?>


<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
   
     <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style.css">
        <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/icons/favicon.ico" type="image/x-icon">
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <?php
            /* please notice that jQuery is called by wp_footer(), jQuery won't work here */
            wp_head();
        ?>
    </head>

    <body <?php body_class(); ?>>
    <div id="page">
        <header>
                <nav id="primary_navigation">
                    <div id="primary_navigation_menu_toggle" class="mobile_only">
                        &#9776;
                    </div>
                    <div id="primary_navigation_menu" class="mobile_only none">
                        <?php wp_nav_menu(array('menu' => 'primary_menu', 'menu_class' => 'primary_menu')); ?>
                    </div>
                    
                    <div id="classic_navigation" class="desktop_only">
                        <?php wp_nav_menu(array('menu' => 'primary_menu', 'menu_class' => 'primary_menu')); ?>
                    </div>
                </nav>
                
                <!--<a href="" id="responsive_navigation_toggle" class="mobile_only">&#9776;</a>-->
        </header>

        <div id="main">
            <div id="main_content">