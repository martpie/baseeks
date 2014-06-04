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
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
        
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style.css">
        <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/img/icons/favicon.ico" type="image/x-icon">
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->  
        <?php wp_head(); /* please notice that jQuery is called by wp_footer(), jQuery won't work here */ ?>
    </head>

    <body <?php body_class(); ?>>
    
        <div id="page">

            <header>
            </header>

            <div id="wrap">