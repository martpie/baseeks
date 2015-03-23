<?php
/**
 * Main template File
 *
 *
 */

/*
    This is the main template file, usually it is not used, people usually create a template for each page theey have
*/

    get_header();


    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- You can start here. Well, I guess. -->

    <?php endwhile; endif;


    get_footer();
