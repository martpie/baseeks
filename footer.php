<?php
/**
 * Displaying the footer
 *
 * Contains footer content and the closing of the #page, #main and #main_content div elements.
 *
 */
?>
                
<?php
    
    // Getting template filename (with the .php extension)
    $template_name = basename(get_page_template());
    
?>
            
            </div><!-- #wrap -->           

            <footer>
            </footer>
            
        </div><!-- #page -->


        <!-- footer, scripts and libraries -->       
        <script>
            var template = '<?php echo $template_name; ?>';
        </script>
        <?php
            wp_footer();
        ?>
        <!-- you should place your script under this line for best performance -->

    </body>
</html>