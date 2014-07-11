<?php
/**
 * Main template File
 *
 *
 */
 
/*
    This is the main template file, usually it is not used, people usually create a template for each page theey have
*/

    
    $ID = get_the_ID();

    // Getting text
    $post = get_post($ID);
    $description = $post->post_content;
    $description = apply_filters( 'the_content', $description );


    get_header();
    
?>


    <!-- You can start here. Well, I guess. -->
    
    <?php echo $description; ?>
    

<?php
    
    get_footer();