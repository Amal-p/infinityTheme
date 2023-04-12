<?php

/* title: picture.php 
Author: Amal - P
date: 2023-01-31 19:57:20 */

use Core\Core;

$obj = new Core;


$args = array(
  'post_type' => 'picture',
  'meta_query' => array(
    'relation' => 'AND',
    array(
      'key' => 'picture_name',
      'value' => $values['name'],
      'compare' => '=',
    ),
  ),
  // 'title' => $values['name'],
  'posts_per_page' => -1,
  'orderby' => 'breakpoint',
  'order' => 'ASC'
);

$query = new WP_Query($args);
$i = 0;
while ($query->have_posts()) : $query->the_post();
  $image = wp_get_attachment_image_src(get_post_meta(get_the_ID(), "picture_file", true), 'full');
  $values['pictures'][$i]['title'] = get_the_title();
  $values['pictures'][$i]['image'] = $image[0];
  $values['pictures'][$i]['image_alt'] = get_post_meta(get_the_ID(), "picture_alt", true);
  $values['pictures'][$i]['image_title'] = get_post_meta(get_the_ID(), "picture_title", true);
  $values['pictures'][$i]['breakpoint'] = (get_post_meta(get_the_ID(), "breakpoint", true) == 1) ? 0 : get_post_meta(get_the_ID(), "breakpoint", true);
  
  $i++;
endwhile;
wp_reset_postdata();


$comp = $obj->create( 'global/picture.html.twig' ,
    $values
);