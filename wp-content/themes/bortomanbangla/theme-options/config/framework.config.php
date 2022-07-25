<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Codestar Framework <small>by Codestar</small>',
  'menu_icon'           => 'dashicons-images-alt',
  'menu_position'      => 5,
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();



// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'header',
  'title'       => 'Header',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'meta_icon',
      'type'    => 'image',
      'title'   => 'Meta Icon',
    ),
    array(
      'id'      => 'logo',
      'type'    => 'image',
      'title'   => 'Logo',
    ),
    array(
      'id'      => 'add-one',
      'type'    => 'image',
      'title'   => 'Add Header',
    ),


  ), 
);

$options[]      = array(
  'name'        => 'top_storise',
  'title'       => 'Top Storise Add',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'top_add',
      'type'    => 'image',
      'title'   => 'Top Section Add',
    ),


  ), 
);

$options[]      = array(
  'name'        => 'entertainment_add',
  'title'       => 'Home & Category Page Add ',

  // begin: fields
  'fields'      => array(

    
    array(
      'id'      => 'enter_add',
      'type'    => 'image',
      'title'   => 'Add',
      'desc'   => 'Please Add Image',
    ),


  ), 
);


$options[]      = array(
  'name'        => 'social',
  'title'       => 'Social Icon Link',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'facebook',
      'type'    => 'text',
      'title'   => 'Facebook Link',
      'desc'   => 'Please Add Your Facebook Link',
    ),
    array(
      'id'      => 'twitter',
      'type'    => 'text',
      'title'   => 'Twitter Link',
      'desc'   => 'Please Add Your Twitter Link',
    ),


  ), 
);
$options[]      = array(
  'name'        => 'single_page',
  'title'       => 'Single Page',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'single_add',
      'type'    => 'image',
      'title'   => 'Add',
    ),


  ), 
);
$options[]      = array(
  'name'        => 'national',
  'title'       => 'National Section Video',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'national_one',
      'type'    => 'text',
      'title'   => 'One Video',
      'desc'   => 'Please Add Youtube Video Id',
    ),
    array(
      'id'      => 'national_two',
      'type'    => 'text',
      'title'   => 'Two Video',
      'desc'   => 'Please Add Youtube Video Id',
    ),
    array(
      'id'      => 'national_three',
      'type'    => 'text',
      'title'   => 'Three Video',
      'desc'   => 'Please Add Youtube Video Id',
    ),


  ), 
);
$options[]      = array(
  'name'        => 'playing',
  'title'       => 'Play Section Video',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'play_one',
      'type'    => 'text',
      'title'   => 'One Video',
      'desc'   => 'Please Add Youtube Video Id',
    ),
    array(
      'id'      => 'play_two',
      'type'    => 'text',
      'title'   => 'Two Video',
      'desc'   => 'Please Add Youtube Video Id',
    ),
    array(
      'id'      => 'play_three',
      'type'    => 'text',
      'title'   => 'Three Video',
      'desc'   => 'Please Add Youtube Video Id',
    ),
    array(
      'id'      => 'play_adde',
      'type'    => 'image',
      'title'   => 'Add',
      'desc'   => 'Please Add Image',
    ),


  ), 
);
$options[]      = array(
  'name'        => 'picture',
  'title'       => 'Picture Section Video',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'pricture_one',
      'type'    => 'text',
      'title'   => 'One Video',
      'desc'   => 'Please Add Youtube Video Id',
    ),
    array(
      'id'      => 'pricture_two',
      'type'    => 'text',
      'title'   => 'Two Video',
      'desc'   => 'Please Add Youtube Video Id',
    ),


  ), 
);
$options[]      = array(
  'name'        => 'category_page',
  'title'       => 'Category Page Video',

  // begin: fields
  'fields'      => array(

    array(
      'id'      => 'category_one',
      'type'    => 'text',
      'title'   => 'Video One',
      'desc'   => 'Please Add Youtube Video Id',
    ),
    array(
      'id'      => 'category_two',
      'type'    => 'text',
      'title'   => 'Video Two',
      'desc'   => 'Please Add Youtube Video Id',
    ),

  ), 
);




CSFramework::instance( $settings, $options );
