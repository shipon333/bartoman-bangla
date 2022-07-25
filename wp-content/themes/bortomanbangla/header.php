<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo wp_get_attachment_image_src(cs_get_option('meta_icon'),'full')[0];?>">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body <?php body_class();?>>

    <!-- <div id="preloader">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="preloader-img text-center">
                        <img src="assets/img/logo.jpg" alt="">
                    </div>
                    <div class="preloader-bg"></div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- header top start -->
    <section class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bortoman-bangla-top-head-wappwer">
                        <div class="bortoman-bangla-top-head-left">
                            <span><i class="fa fa-calendar"></i><?php echo date("d F Y");?></span>
                            
                            <span><i class="fa fa-sun-o"></i><?php echo esc_html('Bangladesh','Bortoman Bangla');?>  
                            <?php 
                                echo do_shortcode( '[location-weather id="69"]' );
                            ?>
                            </span>
                        </div>
                        <div class="bortoman-bangla-top-head-right">
                            <span><i class="fa fa-envelope" aria-hidden="true"></i><a href="http://bartomanbangla.com/contact/"><?php echo esc_html('Contact','Bortoman Bangla');?></a></span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- header top end -->
    <!-- header logo start  -->
    <section class="logo-add-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="logo-image">
                        <a href="<?php echo home_url();?>"><img src="<?php echo wp_get_attachment_image_src(cs_get_option('logo'),'full')[0];?>"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="bortoman-bangla-add-num">
                        <img src="<?php echo wp_get_attachment_image_src(cs_get_option('add-one'),'full')[0];?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- header logo end -->
    <!-- menu start -->
    <section class="menu-area sticky-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-8 col-sm-6 col-6">
                    <div class="header-area">
                        <div class="menu-wapper">
                        <?php wp_nav_menu(array(
                            'theme_location'=>'top-menu',
                            'container'=> 'nav',
                            'container_id'=> 'main_menu',
                            'menu_class'=>'main-menu__list',
                            'depth'=>'3',
                            'fallback_cb'       => 'wp_page_menu',
                        ));?>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="social-icon">
                        <ul>
                            <li><a href="<?php echo cs_get_option('facebook')?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php echo cs_get_option('twitter')?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>