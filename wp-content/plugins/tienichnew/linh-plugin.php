<?php
/*
Plugin Name: Random Post
Plugin URI: https://linkerpt.com
Description: Plugin lấy ngẫu nhiên liên kết các bài viết và hiển thị lên một bài viết cụ thể
Version: 1.0
Author: Linkerpt
Author URI: https://linkerpt.com
License: GPLv2
Text Domain: akismet
*/
function linh_rand_posts() {
$args = array(
 'post_type' => 'post',
 'orderby' => 'rand',
 'posts_per_page' => 5,
 );
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
  $string .= '<ul>';
   while ( $the_query->have_posts() ) {
          $the_query->the_post();
          $string .= '<li><a href="'. get_permalink() .'">'. get_the_title() .'</a></li>';
   }
   $string .= '</ul>';
   wp_reset_postdata();
} else {
   $string .= 'no posts found';
}
   return $string;
}
add_shortcode('linh-rand-posts','linh_rand_posts');