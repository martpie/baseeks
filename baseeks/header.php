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
        <title><?php wp_title( '', true, 'right' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style.css">
        <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/icons/favicon.ico" type="image/x-icon">
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->

        <?php
            wp_head();
        ?>
    </head>

    <body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
        <header id="masthead" class="site-header" role="banner">
            <div class="header-main">	
                <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                    <?php wp_nav_menu(array('menu' => 'primary_left', 'menu_class' => 'menu_primary_left')); ?>
                </nav>
            </div>
        </header><!-- #masthead -->

        <div id="main" class="site-main">     
            <!-- main-content -->
            <div id="main-content" class="main-content">