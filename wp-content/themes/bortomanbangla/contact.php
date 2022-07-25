<?php
/* Template Name: Contact Page */
get_header();?>
    <!-- menu end -->
    <section class="contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wapper">
                        <h2><?php echo esc_html('বিজ্ঞাপনের জন্য যোগাযোগ করুন','Bortoman Bangla');?></h2>
                            <?php 
                                echo do_shortcode( '[contact-form-7 id="100" title="Contact Form"]' );
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- footer area start  -->
    <?php get_footer();?>