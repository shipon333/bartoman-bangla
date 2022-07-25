<?php
get_header();?>
    <!-- menu end -->
    <!-- top storise start  -->
    <section class="top-storise-area category">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bortoman-bangla-title">
                        <h2><?php single_cat_title();?></h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                <?php 
                    $count = 0;
                    if(have_posts()):
                        while(have_posts()):the_post();
                            $count ++;
                            if($count == 1):
                            ?>
                                <div class="bortoman-bangla-top-storise-wapper">
                                    <div class="bortoman-bangla-top-image">
                                    <?php the_post_thumbnail('');?>                   
                                    </div>
                                    <div class="bortoman-bangla-top-title">
                                        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                                    </div>
                                </div>
                            <?php
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <?php 
                        $count = 0;
                        if(have_posts()):
                            while(have_posts()):the_post();
                                $count ++;
                                if($count >= 2 && $count <= 3):
                                ?>
                                    <div class="bortoman-bangla-top-storise-wapper">
                                        <div class="bortoman-bangla-top-image category-image">
                                        <?php the_post_thumbnail('');?>                             
                                        </div>
                                        <div class="bortoman-bangla-top-title cat-more">
                                            <h2><a href="<?php the_permalink();?>"><?php echo wp_trim_words(get_the_title(),8); ?></a></h2>
                                        </div>
                                    </div>
                                <?php
                                endif;
                            endwhile;
                        endif;
                    ?>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="bortoman-bangla-fbpage">
                        <img src="assets/img/45106114_1921857901196994_5405767609658376192_o.jpg" alt="">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fbartomanbangla2%3F_rdc%3D1%26_rdr&tabs&width=255&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="255" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                    <div class="bortoman-bangla-add">
                        <img src="<?php echo wp_get_attachment_image_src(cs_get_option('top_add'),'full')[0];?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top storise end -->

    <section class="category-wapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 cat-col">
                    <div class="row">
                    <?php 
                        $count = 0;
                        if(have_posts()):
                            while(have_posts()):the_post();
                                $count ++;
                                if($count >= 4 && $count <= 9):
                                ?>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="bortoman-bangla-top-storise-wapper">
                                            <div class="bortoman-bangla-top-image category-inner-image">
                                            <?php the_post_thumbnail('');?>                                     
                                            </div>
                                            <div class="bortoman-bangla-top-title">
                                                <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                endif;
                            endwhile;
                        endif;
                    ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="category-video">
                        <div class="bortoman-bangla-title">
                            <h2><?php echo esc_html('ভিডিও','Bortoman Bangla');?></h2>
                        </div>
                        <div class="video-ifram">
                            <iframe width="235" height="231" src="https://www.youtube.com/embed/<?php echo cs_get_option('category_one')?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-ifram">
                            <iframe width="235" height="231" src="https://www.youtube.com/embed/<?php echo cs_get_option('category_two')?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="bortoman-bangla-add">
                        <img src="<?php echo wp_get_attachment_image_src(cs_get_option('enter_add'),'full')[0];?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="categor-more-post">
        <div class="container">
            <div class="row" id="posts">
                <?php 
                    $count = 0;
                    if(have_posts()):
                        while(have_posts()):the_post();
                            $count ++;
                            if($count >= 10):
                            ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="category-post-wapper">
                                    <div class="category-morpost-image category-all-image">
                                    <?php the_post_thumbnail('');?>   
                                    </div>
                                    <div class="category-morpost-title">
                                        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endif;
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </section>
    <!-- footer area start  -->
    <?php get_footer();?>