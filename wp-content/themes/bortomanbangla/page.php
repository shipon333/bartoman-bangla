<?php
get_header();?>
   
    
   <?php
                            
        if(have_posts()):
            while(have_posts()):the_post();
            ?>
            <div class="bortoman-bangla-top-storise-wapper">
                <?php the_content();?>
                
            </div>
            <?php
            endwhile;
        endif;
        wp_reset_postdata(); 
    ?>
<?php get_footer();?>