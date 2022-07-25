<?php
get_header();?>
    <!-- menu end -->
    <!-- top storise start  -->
    <section class="top-storise-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bortoman-bangla-title">
                        <h2><?php echo esc_html('টপ স্টোরিস','Bortoman Bangla')?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <?php
                        $shc_posts= new WP_Query(array(
                            'post_type'=> 'post',
                            'category_name' => 'টপ স্টোরিস' ,
                            'posts_per_page'=>1,
                            'orderby'=>'date',
                            'order'=>'DESC',
                            'status'=>'publish'
                        ));
                        if($shc_posts->have_posts()):
                        while($shc_posts->have_posts()):$shc_posts->the_post();
                    ?>
                    <div class="bortoman-bangla-top-storise-wapper">
                        <div class="bortoman-bangla-top-image">
                        <?php the_post_thumbnail('');?>                          
                        </div>
                        <div class="bortoman-bangla-top-title">
                            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        endif;
                        wp_reset_postdata(); 
                    ?>
                </div>
                <div class="col-lg-3 col-md-4">
                    <?php
                        $shc_posts= new WP_Query(array(
                            'post_type'=> 'post',
                            'category_name' => 'টপ স্টোরিস' ,
                            'posts_per_page'=>5,
                            'orderby'=>'date',
                            'order'=>'DESC',
                            'status'=>'publish'
                        ));
                        $count = 0;
                        if($shc_posts->have_posts()):
                        while($shc_posts->have_posts()):$shc_posts->the_post();
                        $count ++;
                        if($count != 1):
                    ?>
                    <div class="bortoman-bangla-top-more">
                        <div class="bortoman-bangla-top-more-image">
                        <?php the_post_thumbnail('top_storise_more');?> 
                        </div>
                        <div class="bortoman-bangla-top-more-title">
                        
                            <h4><a href="<?php the_permalink();?>"> <?php echo wp_trim_words(get_the_title(),6); ?></a></h4>
                        </div>
                    </div>
                    <?php
                    endif;
                        endwhile;
                        endif;
                        wp_reset_postdata(); 
                    ?>
                    
                </div>
                <div class="col-lg-3">
                    <div class="bortoman-bangla-fbpage">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fbartomanbangla2%2F&tabs&width=290&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="290" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                    <div class="bortoman-bangla-add">
                        <img src="<?php echo wp_get_attachment_image_src(cs_get_option('top_add'),'full')[0];?>" alt="">
                        
                    </div>
                    <img src="<?php echo wp_get_attachment_image_src(cs_get_option('play_adde'),'full')[0];?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- top storise end -->
    <!-- netional & video start  -->
    <section class="netional-video-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bortoman-bangla-title">
                                <h2><?php echo esc_html('জাতীয়','Bortoman Bangle');?></h2>
                            </div>
                        </div>
                        <?php
                            $national_posts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => 'জাতীয়' ,
                                'posts_per_page'=>2,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                            if($national_posts->have_posts()):
                            while($national_posts->have_posts()):$national_posts->the_post();
                        ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="bortoman-bangla-top-storise-wapper">
                                <div class="bortoman-bangla-top-image">
                                <?php the_post_thumbnail('');?>                                    
                                </div>
                                <div class="bortoman-bangla-top-title">
                                    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                </div>
                            </div>
                        </div>
                        <?php
                            endwhile;
                            endif;
                            wp_reset_postdata(); 
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="bortoman-bangla-national-wapper">
                        <?php
                            $national_moreposts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => 'জাতীয়' ,
                                'posts_per_page'=>5,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                            $nmcount = 0;
                            if($national_moreposts->have_posts()):
                                while($national_moreposts->have_posts()):$national_moreposts->the_post();
                                    $nmcount ++;
                                    if($nmcount > 2):
                        ?>
                        <div class="bortoman-bangla-national">
                            <div class="bortoman-bangla-national-image">
                            <?php the_post_thumbnail('');?>
                            </div>
                            <div class="bortoman-bangla-national-title">
                                <h4><a href="<?php the_permalink();?>"> <?php echo wp_trim_words(get_the_title(),6); ?></a></h4>
                            </div>
                        </div>

                        <?php
                                    endif;
                                endwhile;
                            endif;
                            wp_reset_postdata(); 
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="bortoman-bangla-title">
                        <h2><?php echo esc_html('ভিডিও','Bortoman Bangla');?></h2>
                    </div>
                    <div class="bortoman-bangla-video">
                        <iframe width="251" height="186" src="https://www.youtube.com/embed/<?php echo cs_get_option('national_one')?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="bortoman-bangla-video-wapper">
                        <div class="bortoman-bangla-video one">
                            <iframe width="120" height="82" src="https://www.youtube.com/embed/<?php echo cs_get_option('national_two')?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="bortoman-bangla-video">
                            <iframe width="120" height="82" src="https://www.youtube.com/embed/<?php echo cs_get_option('national_three')?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- netional & video end -->
    <!-- netional & video start  -->
    <section class="play-video-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bortoman-bangla-title">
                        <h2><?php echo esc_html('খেলাধুলা','Bortoman Bangla');?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <?php
                                $play_posts= new WP_Query(array(
                                    'post_type'=> 'post',
                                    'category_name' => 'খেলাধুলা',
                                    'posts_per_page'=>2,
                                    'orderby'=>'date',
                                    'order'=>'DESC',
                                    'status'=>'publish'
                                ));

                                if($play_posts->have_posts()):
                                    while($play_posts->have_posts()):$play_posts->the_post();
                            ?>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="bortoman-bangla-top-storise-wapper">
                                    <div class="bortoman-bangla-top-image">
                                    <?php the_post_thumbnail('');?>                                  
                                    </div>
                                    <div class="bortoman-bangla-top-title">
                                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    endwhile;
                                endif;
                                wp_reset_postdata(); 
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="bortoman-bangla-national-wapper">
                            <?php
                                $play_moreposts= new WP_Query(array(
                                    'post_type'=> 'post',
                                    'category_name' => 'খেলাধুলা' ,
                                    'posts_per_page'=>5,
                                    'orderby'=>'date',
                                    'order'=>'DESC',
                                    'status'=>'publish'
                                ));
                                $pm_count = 0;
                                if($play_moreposts->have_posts()):
                                    while($play_moreposts->have_posts()):$play_moreposts->the_post();
                                        $pm_count ++;
                                        if($pm_count > 2):
                                            ?>
                                            <div class="bortoman-bangla-national">
                                                <div class="bortoman-bangla-national-image">
                                                <?php the_post_thumbnail('');?>
                                                </div>
                                                <div class="bortoman-bangla-national-title">
                                                    <h4><a href="<?php the_permalink();?>"> <?php echo wp_trim_words(get_the_title(),6); ?></a></h4>
                                                </div>
                                            </div>
                                            <?php
                                        endif;
                                    endwhile;
                                endif;
                                wp_reset_postdata(); 
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="bortoman-bangla-video">
                            <iframe width="251" height="140" src="https://www.youtube.com/embed/<?php echo cs_get_option('play_one')?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="bortoman-bangla-video-wapper">
                            <div class="bortoman-bangla-video one">
                                <iframe width="120" height="70" src="https://www.youtube.com/embed/<?php echo cs_get_option('play_two')?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="bortoman-bangla-video">
                                <iframe width="120" height="70" src="https://www.youtube.com/embed/<?php echo cs_get_option('play_three')?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="bortoman-bangla-play-add">
                            <img src="<?php echo wp_get_attachment_image_src(cs_get_option('play_adde'),'full')[0];?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- netional & video end -->
    <!-- entertainment and star start  -->
    <section class="entertainment-star-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="bortoman-bangla-title entertainment">
                        <h2><?php echo esc_html('বিনোদন','Bortoman Bangla');?></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <?php
                                $entertainment_posts= new WP_Query(array(
                                    'post_type'=> 'post',
                                    'category_name' => 'বিনোদন' ,
                                    'posts_per_page'=>1,
                                    'orderby'=>'date',
                                    'order'=>'DESC',
                                    'status'=>'publish'
                                ));
                                $count = 0;
                                if($entertainment_posts->have_posts()):
                                    while($entertainment_posts->have_posts()):$entertainment_posts->the_post();
                                        ?>
                                        <div class="bortoman-bangla-top-storise-wapper">
                                            <div class="bortoman-bangla-top-image">
                                            <?php the_post_thumbnail('');?>
                                                
                                            </div>
                                            <div class="bortoman-bangla-top-title">
                                                <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                endif;
                                wp_reset_postdata(); 
                            ?>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="row">
                            <?php
                                $entertainment_moreposts= new WP_Query(array(
                                    'post_type'=> 'post',
                                    'category_name' => 'বিনোদন' ,
                                    'posts_per_page'=>5,
                                    'orderby'=>'date',
                                    'order'=>'DESC',
                                    'status'=>'publish'
                                ));
                                $etm_count = 0;
                                if($entertainment_moreposts->have_posts()):
                                    while($entertainment_moreposts->have_posts()):$entertainment_moreposts->the_post();
                                        $etm_count ++;
                                        if($etm_count !=1):
                                        ?>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="bortoman-bangla-top-storise-wapper m-b">
                                                <div class="bortoman-bangla-top-image star">
                                                <?php the_post_thumbnail('');?>
                                                    
                                                </div>
                                                <div class="bortoman-bangla-top-title star-title">
                                                    <h2><a href="<?php the_permalink();?>"><?php echo wp_trim_words(get_the_title(),6); ?></a></h2>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                        endif;
                                    endwhile;
                                endif;
                                wp_reset_postdata(); 
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bortoman-bangla-title entertainment">
                        <h2><?php echo esc_html('তারকা আড্ডা','Bortoman Bangle');?></h2>
                    </div>
                        <?php
                            $starp_osts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => 'তারকা আড্ডা' ,
                                'posts_per_page'=>1,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                            if($starp_osts->have_posts()):
                                while($starp_osts->have_posts()):$starp_osts->the_post();
                                ?>
                                    <div class="bortoman-bangla-star-image star-one">
                                    <?php the_post_thumbnail('');?>
                                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                    </div>
                                <?php
                                endwhile;
                            endif;
                            wp_reset_postdata(); 
                        ?>
                    <div class="bortoman-bangla-star-image-inner">
                        <?php
                            $star_moreposts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => 'তারকা আড্ডা' ,
                                'posts_per_page'=>3,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                            $smt_count = 0;
                            if($star_moreposts->have_posts()):
                                while($star_moreposts->have_posts()):$star_moreposts->the_post();
                                    $smt_count ++;
                                    if($smt_count != 1):
                                    ?>
                                    <div class="bortoman-bangla-star-image two">
                                    <?php the_post_thumbnail('');?>
                                        <h3><a href="<?php the_permalink();?>"><?php echo wp_trim_words(get_the_title(),4); ?></a></h3>
                                    </div>
                                    <?php
                                    endif;
                                endwhile;
                            endif;
                            wp_reset_postdata(); 
                        ?>
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
    <!-- entertainment and star end -->
    <!-- international area start  -->
    <section class="international-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bortoman-bangla-title international">
                        <h2><?php echo esc_html('আন্তর্জাতিক','Bortoman Bangla')?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                $international_posts= new WP_Query(array(
                    'post_type'=> 'post',
                    'category_name' => 'আর্ন্তজাতিক' ,
                    'posts_per_page'=>8,
                    'orderby'=>'date',
                    'order'=>'DESC',
                    'status'=>'publish'
                ));
                if($international_posts->have_posts()):
                    while($international_posts->have_posts()):$international_posts->the_post();
                    ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="bortoman-bangla-top-storise-wapper">
                            <div class="bortoman-bangla-top-image">
                            <?php the_post_thumbnail('');?>                                   
                            </div>
                            <div class="bortoman-bangla-top-title">
                                <h2><a href="<?php the_permalink();?>"><?php echo wp_trim_words(get_the_title(),4); ?></a></h2>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                endif;
                wp_reset_postdata(); 
            ?>
            </div>
        </div>
    </section>
    <!-- international area end -->
    <!-- business area start  -->
    <section class="business-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="business-wapper">
                        <div class="bortoman-bangla-title business">
                            <h2><?php echo esc_html('বাণিজ্য/অর্থনীতি','Bortoman Bangla');?></h2>
                        </div>
                        <?php
                            $bus_posts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => 'অর্থনীতি',
                                'posts_per_page'=>1,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                            if($bus_posts->have_posts()):
                                while($bus_posts->have_posts()):$bus_posts->the_post();
                                ?>
                                <div class="bortoman-bangla-top-storise-wapper">
                                    <div class="bortoman-bangla-top-image">
                                    <?php the_post_thumbnail('');?>                                   
                                    </div>
                                    <div class="bortoman-bangla-top-title">
                                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    </div>
                                </div>
                                <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();  
                        ?>
                        <div class="business-title">
                            <ul>
                            <?php 
                                $bus_morposts= new WP_Query(array(
                                    'post_type'=> 'post',
                                    'category_name' => 'অর্থনীতি',
                                    'posts_per_page'=>6,
                                    'orderby'=>'date',
                                    'order'=>'DESC',
                                    'status'=>'publish'
                                ));
                                $bus_count = 0;
                                if($bus_morposts->have_posts()):
                                    while($bus_morposts->have_posts()):$bus_morposts->the_post();
                                        $bus_count ++;
                                        if($bus_count >= 2):
                                        ?>
                                        <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="business-wapper">
                        <div class="bortoman-bangla-title business">
                            <h2><?php echo esc_html('বিজ্ঞান ও প্রযুক্তি','Bortoman Bangla');?></h2>
                        </div>
                        <?php
                            $science_posts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => 'বিজ্ঞান ও প্রযুক্তি' ,
                                'posts_per_page'=>1,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                            if($science_posts->have_posts()):
                                while($science_posts->have_posts()):$science_posts->the_post();
                                ?>
                                <div class="bortoman-bangla-top-storise-wapper">
                                    <div class="bortoman-bangla-top-image">
                                    <?php the_post_thumbnail('');?>                                    
                                    </div>
                                    <div class="bortoman-bangla-top-title">
                                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    </div>
                                </div>
                                <?php
                                endwhile;
                            endif;
                            wp_reset_postdata(); 
                        ?>
                        <div class="business-title">
                            <ul>
                                <?php 
                                    $science_moreposts= new WP_Query(array(
                                        'post_type'=> 'post',
                                        'category_name' => 'বিজ্ঞান ও প্রযুক্তি' ,
                                        'posts_per_page'=>6,
                                        'orderby'=>'date',
                                        'order'=>'DESC',
                                        'status'=>'publish'
                                    ));
                                    $sc_count = 0;
                                    if($science_moreposts->have_posts()):
                                        while($science_moreposts->have_posts()):$science_moreposts->the_post();
                                            $sc_count ++;
                                            if($sc_count >= 2):
                                            ?>
                                            <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="business-wapper">
                        <div class="bortoman-bangla-title business">
                            <h2><?php echo esc_html('শিক্ষা','Bortoman Bangla');?></h2>
                        </div>
                        <?php
                            $edu_posts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => 'শিক্ষা' ,
                                'posts_per_page'=>1,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                            if($edu_posts->have_posts()):
                                while($edu_posts->have_posts()):$edu_posts->the_post();
                                ?>
                                <div class="bortoman-bangla-top-storise-wapper">
                                    <div class="bortoman-bangla-top-image">
                                    <?php the_post_thumbnail('');?>                                    
                                    </div>
                                    <div class="bortoman-bangla-top-title">
                                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    </div>
                                </div>
                                <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();  
                        ?>
                        <div class="business-title">
                            <ul>
                                <?php 
                                    $edu_moreposts= new WP_Query(array(
                                        'post_type'=> 'post',
                                        'category_name' => 'শিক্ষা' ,
                                        'posts_per_page'=>6,
                                        'orderby'=>'date',
                                        'order'=>'DESC',
                                        'status'=>'publish'
                                    ));
                                    $edu_count =0;
                                    if($edu_moreposts->have_posts()):
                                        while($edu_moreposts->have_posts()):$edu_moreposts->the_post();
                                            $edu_count ++;
                                            if($edu_count >= 2):
                                            ?>
                                            <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="business-wapper">
                        <div class="bortoman-bangla-title business">
                            <h2><?php echo esc_html('বিশেষ সংবাদ','Bortoman Bangla');?></h2>
                        </div>
                        <?php
                            $special_posts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => 'বিশেষ সংবাদ' ,
                                'posts_per_page'=>1,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                            if($special_posts->have_posts()):
                                while($special_posts->have_posts()):$special_posts->the_post();
                                ?>
                                <div class="bortoman-bangla-top-storise-wapper">
                                    <div class="bortoman-bangla-top-image">
                                    <?php the_post_thumbnail('');?>                                    
                                    </div>
                                    <div class="bortoman-bangla-top-title">
                                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    </div>
                                </div>
                                <?php
                                endwhile;
                            endif;
                            wp_reset_postdata(); 
                        ?>
                        <div class="business-title">
                            <ul>
                                <?php 
                                    $special_moreposts= new WP_Query(array(
                                        'post_type'=> 'post',
                                        'category_name' => 'বিশেষ সংবাদ' ,
                                        'posts_per_page'=>6,
                                        'orderby'=>'date',
                                        'order'=>'DESC',
                                        'status'=>'publish'
                                    ));
                                    $sp_count = 0;
                                    if($special_moreposts->have_posts()):
                                        while($special_moreposts->have_posts()):$special_moreposts->the_post();
                                            $sp_count ++;
                                            if($sp_count >= 2):
                                            ?>
                                            <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
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
        </div>
    </section>
    <!-- business area end  -->
    <!-- lmh area start  -->
    <section class="lmh-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="lmb-wapper life">
                        <div class="bortoman-bangla-title lmh life">
                            <h2><?php echo esc_html('লাইফ স্টাইল','Bortomanb Bangla');?></h2>
                        </div>
                        <?php
                            $life_posts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => 'লাইফ স্টাইল' ,
                                'posts_per_page'=>1,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                            if($life_posts->have_posts()):
                                while($life_posts->have_posts()):$life_posts->the_post();
                                ?>
                                <div class="bortoman-bangla-top-storise-wapper">
                                    <div class="bortoman-bangla-top-image life-style">
                                        <?php the_post_thumbnail('');?>                                     
                                    </div>
                                    <div class="bortoman-bangla-top-title">
                                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    </div>
                                </div>
                                <?php
                                endwhile;
                            endif;
                            wp_reset_postdata(); 
                        ?>
                        <div class="lmb-title">
                            <ul>
                                <?php 
                                    $life_moreposts= new WP_Query(array(
                                        'post_type'=> 'post',
                                        'category_name' => 'লাইফ স্টাইল' ,
                                        'posts_per_page'=>6,
                                        'orderby'=>'date',
                                        'order'=>'DESC',
                                        'status'=>'publish'
                                    ));
                                    $life_count = 0;
                                    if($life_moreposts->have_posts()):
                                        while($life_moreposts->have_posts()):$life_moreposts->the_post();
                                            $life_count ++;
                                            if($life_count != 1):
                                            ?>
                                            <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="lmb-wapper my">
                        <div class="bortoman-bangla-title lmh my">
                            <h2><?php echo esc_html('আমার কিচেন','Bortoman Bangla');?></h2>
                        </div>
                        <?php
                            $my_ckposts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => 'কিচেন' ,
                                'posts_per_page'=>1,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                            if($my_ckposts->have_posts()):
                                while($my_ckposts->have_posts()):$my_ckposts->the_post();
                                ?>
                                <div class="bortoman-bangla-top-storise-wapper">
                                    <div class="bortoman-bangla-top-image kitchen">
                                    <?php the_post_thumbnail('');?>                                   
                                    </div>
                                    <div class="bortoman-bangla-top-title">
                                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></h2>
                                    </div>
                                </div>
                                <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();  
                        ?>
                        <div class="lmb-title">
                            <ul>
                                <?php 
                                    $my_ckmoreposts= new WP_Query(array(
                                        'post_type'=> 'post',
                                        'category_name' => 'কিচেন' ,
                                        'posts_per_page'=>6,
                                        'orderby'=>'date',
                                        'order'=>'DESC',
                                        'status'=>'publish'
                                    ));
                                    $myck_count = 0;
                                    if($my_ckmoreposts->have_posts()):
                                        while($my_ckmoreposts->have_posts()):$my_ckmoreposts->the_post();
                                            $myck_count ++;
                                            if($myck_count != 1):
                                            ?>
                                            <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="lmb-wapper life-here">
                        <div class="bortoman-bangla-title lmh life-here">
                            <h2><?php echo esc_html('জীবন যেখানে যেমন','Bortoman Bangla');?></h2>
                        </div>
                        <?php
                            $here_posts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => 'জীবন' ,
                                'posts_per_page'=>1,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                            if($here_posts->have_posts()):
                                while($here_posts->have_posts()):$here_posts->the_post();
                                ?>
                                <div class="bortoman-bangla-top-storise-wapper">
                                    <div class="bortoman-bangla-top-image life-here">
                                    <?php the_post_thumbnail('');?>                                    
                                    </div>
                                    <div class="bortoman-bangla-top-title">
                                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    </div>
                                </div>
                                <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();  
                        ?>
                        <div class="lmb-title">
                            <ul>
                                <?php 
                                    $here_moreposts= new WP_Query(array(
                                        'post_type'=> 'post',
                                        'category_name' => 'জীবন' ,
                                        'posts_per_page'=>6,
                                        'orderby'=>'date',
                                        'order'=>'DESC',
                                        'status'=>'publish'
                                    ));
                                    $he_count = 0;
                                    if($here_moreposts->have_posts()):
                                        while($here_moreposts->have_posts()):$here_moreposts->the_post();
                                            $he_count ++;
                                            if($he_count != 1):
                                            ?>
                                            <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="lmb-wapper helth">
                        <div class="bortoman-bangla-title lmh helth">
                            <h2><?php echo esc_html('স্বাস্থ্য কথা','Bortoman Bangla');?></h2>
                        </div>
                            <?php
                                $helth_posts= new WP_Query(array(
                                    'post_type'=> 'post',
                                    'category_name' => 'স্বাস্থ্য কথা' ,
                                    'posts_per_page'=>1,
                                    'orderby'=>'date',
                                    'order'=>'DESC',
                                    'status'=>'publish'
                                ));
                                if($helth_posts->have_posts()):
                                    while($helth_posts->have_posts()):$helth_posts->the_post();
                                    ?>
                                    <div class="bortoman-bangla-top-storise-wapper">
                                        <div class="bortoman-bangla-top-image helth">
                                        <?php the_post_thumbnail('');?>                                    
                                        </div>
                                        <div class="bortoman-bangla-top-title">
                                            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                        </div>
                                    </div>
                                    <?php
                                    endwhile;
                                endif;
                                wp_reset_postdata(); 
                            ?>
                        <div class="lmb-title">
                            <ul>
                                <?php 
                                    $helth_moreposts= new WP_Query(array(
                                        'post_type'=> 'post',
                                        'category_name' => 'স্বাস্থ্য কথা' ,
                                        'posts_per_page'=>6,
                                        'orderby'=>'date',
                                        'order'=>'DESC',
                                        'status'=>'publish'
                                    ));
                                    $health_count = 0;
                                    if($helth_moreposts->have_posts()):
                                        while($helth_moreposts->have_posts()):$helth_moreposts->the_post();
                                            $health_count ++;
                                            if($health_count != 1):
                                            ?>
                                            <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
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
        </div>
    </section>
    <!-- lmh area end -->
    <!-- bscc area start  -->
    <section class="bscc-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="business-wapper foren">
                        <div class="bortoman-bangla-title">
                            <h2><?php echo esc_html('প্রবাসে বাংলা','Bortoman Bangla');?></h2>
                        </div>
                        <?php
                            $probas_posts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => 'প্রবাসে বাংলা' ,
                                'posts_per_page'=>2,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                            if($probas_posts->have_posts()):
                                while($probas_posts->have_posts()):$probas_posts->the_post();
                                ?>
                                <div class="bortoman-bangla-top-storise-wapper foren">
                                    <div class="bortoman-bangla-top-image">
                                    <?php the_post_thumbnail('');?>                                     
                                    </div>
                                    <div class="bortoman-bangla-top-title">
                                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    </div>
                                </div>
                                <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();  
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="business-wapper foren">
                        <div class="bortoman-bangla-title">
                            <h2><?php echo esc_html('সৌন্দর্য কথা','Bortoman Bangla');?></h2>
                        </div>
                        <?php
                            $nice_posts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => 'সৌন্দর্য কথা' ,
                                'posts_per_page'=>2,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                            if($nice_posts->have_posts()):
                                while($nice_posts->have_posts()):$nice_posts->the_post();
                                ?>
                                <div class="bortoman-bangla-top-storise-wapper foren">
                                    <div class="bortoman-bangla-top-image">
                                    <?php the_post_thumbnail('');?>                                    
                                    </div>
                                    <div class="bortoman-bangla-top-title">
                                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    </div>
                                </div>
                                <?php
                                endwhile;
                            endif;
                            wp_reset_postdata(); 
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="business-wapper foren">
                        <div class="bortoman-bangla-title">
                            <h2><?php echo esc_html('কর্পোরেট কর্নার','Bortoman Bangla');?></h2>
                        </div>
                        <?php
                            $korporate_posts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => 'কর্পোরেট কর্নার' ,
                                'posts_per_page'=>2,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                            if($korporate_posts->have_posts()):
                                while($korporate_posts->have_posts()):$korporate_posts->the_post();
                                ?>
                                <div class="bortoman-bangla-top-storise-wapper foren">
                                    <div class="bortoman-bangla-top-image">
                                    <?php the_post_thumbnail('');?>                                    
                                    </div>
                                    <div class="bortoman-bangla-top-title">
                                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    </div>
                                </div>
                                <?php
                                endwhile;
                            endif;
                            wp_reset_postdata(); 
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="business-wapper foren">
                        <div class="bortoman-bangla-title">
                            <h2><?php echo esc_html('মুক্ত মত','Bortoman Bangla');?></h2>
                        </div>
                        <?php
                            $free_posts= new WP_Query(array(
                                'post_type'=> 'post',
                                'category_name' => 'মুক্ত মত' ,
                                'posts_per_page'=>2,
                                'orderby'=>'date',
                                'order'=>'DESC',
                                'status'=>'publish'
                            ));
                            if($free_posts->have_posts()):
                                while($free_posts->have_posts()):$free_posts->the_post();
                                ?>
                                <div class="bortoman-bangla-top-storise-wapper foren">
                                    <div class="bortoman-bangla-top-image">
                                    <?php the_post_thumbnail('');?>                                    
                                    </div>
                                    <div class="bortoman-bangla-top-title">
                                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    </div>
                                </div>
                                <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();  
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bscc area end -->
    <!-- picture and vice area start  -->
    <section class="pic-video-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php 
                        $picture_posts= new WP_Query(array(
                            'post_type'=> 'picture',
                            'posts_per_page'=>6,
                            'orderby'=>'date',
                            'order'=>'DESC',
                            'status'=>'publish'
                        ));
                    ?>
                    <div class="bortoman-bangla-title">
                        <h2><?php echo esc_html('ছবি','Bortoman Bangla');?></h2>
                    </div>
                    <div class="bortoman-picture slider">
                        <?php
                            
                            if($picture_posts->have_posts()):
                                while($picture_posts->have_posts()):$picture_posts->the_post();
                                ?>
                                <div class="bortoman-bangla-top-storise-wapper">
                                    <div class="bortoman-bangla-top-image">
                                    <?php the_post_thumbnail('');?>                                    
                                    </div>
                                    <div class="bortoman-bangla-top-title">
                                        <h2><?php the_title();?></h2>
                                    </div>
                                </div>
                                <?php
                                endwhile;
                            endif;
                            wp_reset_postdata(); 
                        ?>
                    </div>
                    <div class="bortoman-thumb slider">
                        <?php
                            
                            if($picture_posts->have_posts()):
                                while($picture_posts->have_posts()):$picture_posts->the_post();
                                ?>
                                <div class="thumb-image">
                                <?php the_post_thumbnail('');?> 
                                </div>
                        
                                <?php
                                endwhile;
                            endif;
                            wp_reset_postdata(); 
                        ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bortoman-bangla-title">
                        <h2><?php echo esc_html('ভিডিও','Bortoman Bangla');?></h2>
                    </div>
                    <div class="video-ifram">
                        <iframe width="410" height="231" src="https://www.youtube.com/embed/<?php echo cs_get_option('pricture_one')?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="video-ifram">
                        <iframe width="410" height="231" src="https://www.youtube.com/embed/<?php echo cs_get_option('pricture_two')?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- picture and vice area end -->
    <!-- footer area start  -->
    <?php get_footer();?>