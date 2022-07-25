<?php
require_once(get_template_directory().'/inc/custom-post.php');
require_once(get_template_directory().'/theme-options/cs-framework.php');
define("VERSION", time());
define("ASSETS_DIR",get_template_directory_uri()."/assets/");
function bortomant_bangla_theme_setup(){
    load_theme_textdomain('Bortoman Bangla',get_template_directory_uri()."/language");
        add_theme_support('post-thumbnails');
        add_theme_support('title-tags');
        add_theme_support('automatic-feed-links');
        add_theme_support('html5',array(
                'search-form',
                'comment-form',
                'gallary',
                'caption',
                'comment-list'
        ));
        
        add_theme_support('custom-logo');
        add_image_size('top_storise_more', 100,70,true);
        register_nav_menu("top-menu",__("TOP MENU","Bortoman Bangla"));

}
add_action('after_setup_theme','bortomant_bangla_theme_setup');



function bortoman_bangla_assets(){
    $css_files = array(
        'google-bangla-font-css'       => 'https://fonts.maateen.me/solaiman-lipi/font.css',
        'preconnect'       => 'https://fonts.gstatic.com',
        'google-english-font-css'       => 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,500;0,700;0,900;1,100&display=swap',
        'bootstrap-css'     => ASSETS_DIR.'css/bootstrap.min.css',
        'fontawesome-all'           => ASSETS_DIR.'css/font-awesome.min.css',
        'slick-css'       => ASSETS_DIR.'css/slick.css',
        'meanmenu-css'            => ASSETS_DIR.'css/meanmenu.min.css',
        'style-css'       => ASSETS_DIR.'css/style.css',
        'media-css'         => ASSETS_DIR.'css/media.css',
    );
    foreach ($css_files as $handle => $css_file) {
        wp_enqueue_style($handle, $css_file, null, VERSION);
    }
    wp_enqueue_style("bortoman-bangla-css",get_stylesheet_uri(), null, VERSION);

    $js_files = array(
        'modernizr-js' =>  array('src' => ASSETS_DIR. 'js/vendor/modernizr-2.8.3.min.js', 'dep' => array('jquery')),
        'popper-js' =>  array('src' => ASSETS_DIR. 'js/popper.min.js', 'dep' => array('jquery')),
        'bootstrap-js' =>  array('src' => ASSETS_DIR. 'js/bootstrap.min.js', 'dep' => array('jquery')),
        'slick-js' =>  array('src' => ASSETS_DIR. 'js/slick.min.js', 'dep' => array('jquery')),
        'meanmenu-js' =>  array('src' => ASSETS_DIR. 'js/jquery.meanmenu.min.js', 'dep' => array('jquery')),
        'theme-js' =>  array('src' => ASSETS_DIR. 'js/theme.js', 'dep' => array('jquery')),

         );
    foreach ($js_files as $handle => $js_file) {
        wp_enqueue_script($handle , $js_file['src'], isset($js_file['dep']) ? $js_file['dep']: null,VERSION,true);
    }
    /*

    */
}
add_action('wp_enqueue_scripts','bortoman_bangla_assets');

function bortoman_bangla_widgets_one() {
    register_sidebar( array(
        'name'          => __( 'Footer Left Widgets', 'Bortoman Bangla' ),
        'id'            => 'sidebar_one',
        'description'   => __( 'Add Widgets', 'Bortoman Bangla' ),
        'before_widget' => '<div id="%1$s" class="footer-wapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'bortoman_bangla_widgets_one' );

function bortoman_bangla_widgets_footer_two() {
    register_sidebar( array(
        'name'          => __( 'Footer Middel Widgets', 'Bortoman Bangla' ),
        'id'            => 'sidebar_two',
        'description'   => __( 'Add Widgets', 'Bortoman Bangla' ),
        'before_widget' => '<div id="%1$s" class="footer-wapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'bortoman_bangla_widgets_footer_two' );

function bortoman_bangla_widgets_footer_three() {
    register_sidebar( array(
        'name'          => __( 'Footer Right Widgets', 'Bortoman Bangla' ),
        'id'            => 'sidebar_three',
        'description'   => __( 'Add Widgets', 'Bortoman Bangla' ),
        'before_widget' => '<div id="%1$s" class="footer-wapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'bortoman_bangla_widgets_footer_three' );
function bortoman_bangla_widgets_single_page() {
    register_sidebar( array(
        'name'          => __( 'Single Page Widgets', 'Bortoman Bangla' ),
        'id'            => 'sidebar_single',
        'description'   => __( 'Add Widgets', 'Bortoman Bangla' ),
        'before_widget' => '<div id="%1$s" class="recent-post-wapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'bortoman_bangla_widgets_single_page' );

