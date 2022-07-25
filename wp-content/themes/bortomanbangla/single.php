<?php
get_header();?>
    <!-- menu end -->
    <?php 
        if(have_posts()):
            while(have_posts()):the_post();
            ?>
            <section class="singel-page-breadcumb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="singl-page-breadcumb-wapper">
                                <h2><?php the_title(); ?></h2>
                                <p><?php echo wp_trim_words(get_the_content(),34); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            endwhile;
        endif;
        wp_reset_postdata(); 
    ?>  
    <section class="single-page-content">
        <div class="container bortoman">
            <div class="row bortoman">
                <div class="col-lg-9 bortoman">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="single-page-author">
                                <div class="author-image">
                                    <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/author.png" alt=""></a>
                                    <h4><a href=""><?php echo get_the_author();?></a> </h4>
                                </div>
                                <div class="single-post-inner">
                                    <div class="single-post-left">
                                        <div class="single-post-info">
                                            <div class="sigle-date">
                                                <span><i class="fa fa-calendar"></i><?php echo get_the_date("d F Y"); ?></span>
                                            </div>
                                            <div class="single-post-view">
                                                <span><i class="fa fa-clock-o" ></i><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . '&nbsp;ago'; ?>  </span>
                                                <span><i class="fa fa-eye" ></i>
                                                    <?php 
                                                        echo do_shortcode( '[WPPV-TOTAL-VIEWS]' );
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-post-right">
                                        <!-- <div class="single-post-tag">
                                            <ul>
                                                <li><a href="">tag</a></li>
                                                <li><a href="">tag</a></li>
                                                <li><a href="">tag</a></li>
                                            </ul>
                                        </div> -->
                                        <div class="single-post-social">
                                            <ul>
                                                <?php 
                                                    echo do_shortcode( '[Sassy_Social_Share]' );
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-mpre-news">
                                    <h3><?php echo esc_html('আরও খবর','Bortoman Bangla');?></h3>
                                    <?php
                                        $get_cat = single_cat_title();
                                        $shc_posts= new WP_Query(array(
                                            'post_type'=> 'post',
                                            'category_name' => $get_cat ,
                                            'posts_per_page'=>6,
                                            'orderby'=>'date',
                                            'order'=>'DESC',
                                            'status'=>'publish'
                                        ));
                                        $count = 0;
                                        if($shc_posts->have_posts()):
                                            while($shc_posts->have_posts()):$shc_posts->the_post();
                                                $count ++;
                                                if($count == 2):
                                                ?>
                                                <div class="bortoman-bangla-top-storise-wapper">
                                                    <div class="bortoman-bangla-top-image single-category">
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
                                        wp_reset_postdata(); 
                                    ?>
                                    <div class="business-title">
                                        <ul>
                                            <?php 
                                                if($shc_posts->have_posts()):
                                                    while($shc_posts->have_posts()):$shc_posts->the_post();
                                                        $count ++;
                                                        if($count >= 3):
                                                        ?>
                                                            <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
                                                        <?php
                                                        endif;
                                                    endwhile;
                                                endif;
                                                 wp_reset_postdata();     
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <?php 
                                if(have_posts()):
                                    while(have_posts()):the_post();
                                    ?>
                                        <div class="single-content-wapper">
                                            <div class="singla-page-image">
                                            <?php the_post_thumbnail('single_blog');?>
                                            </div>
                                            <div class="single-page-content">
                                                <p><?php the_content();?></p>
                                            </div>
                                        </div>

                                    <?php
                                    endwhile;
                                endif;
                                wp_reset_postdata(); 
                            ?>  
                        </div>
                        <div class="col-lg-12">
                            <div class="single-post-pagination">
                                <div class="left-pagination">
                                    <div class="page-title">
                                        <p>Prev</p>
                                        <?php $prevPost = get_previous_post(true);?>
                                        <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(50,50) );?>
                                        <h3><?php previous_post_link('%link',"$prevthumbnail  <p>%title</p>", TRUE); ?></h3>
                                    </div>
                                </div>
                                <div class="right-pagination">
                                    <div class="page-title">
                                        <p>Next</p>
                                        <?php $nextPost = get_next_post(true);?>
                                        <?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(50,50) ); ?>
                                        <h3><?php next_post_link('%link',"$nextthumbnail  <p>%title</p>", TRUE); ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-page-sidebar">
                        <div class="bortoman-bangla-fbpage">
                            <img src="<?php echo wp_get_attachment_image_src(cs_get_option('single_add'),'full')[0];?>" alt="">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fbartomanbangla2%3F_rdc%3D1%26_rdr&tabs&width=255&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="255" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                        <div class="bortoman-bangla-add">
                            <img src="assets/img/belltravelad.jpg" alt="">
                        </div>
                        <div class="single-ppost-recent">
                            <h3><?php echo esc_html('সর্বশেষ খবর','Bortoman Bangle')?></h3>
                            <div class="recent-post-wapper">
                            <?php
                                if(is_active_sidebar('sidebar_single')){
                                    dynamic_sidebar('sidebar_single');
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer area start  -->
    <?php get_footer();?>