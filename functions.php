<?php

/*
  For upload Pictures
  Please Create Fields
    -> picture_name 
    -> picture_file
    -> picture_alt
    -> picture_title
    -> breakpoint [Drop Down with breakpoint values]
*/
add_action('init', 'picture');

function picture()
{
  register_post_type(
    'picture',
    array(
      'labels' => array(
        'name' => __('picture'),
        'singular_name' => __('picture')
      ),
      'menu_icon' => 'dashicons-format-image',
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'page-attributes')
    )
  );
}

?>