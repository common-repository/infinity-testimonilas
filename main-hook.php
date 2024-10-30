<?php 
/*
Plugin Name: Infinity Testimonilas
Plugin URI: http://infinityflamesoft.com/blog/testi
Description: This plugin will enable FAQ Option with Custom Post
Author:Abdullah Nahian
Version: 1.1
Author URI: http://infinityflamesoft.com/portfolio
*/




// Enable shortcodes in widgets
add_filter('widget_text', 'do_shortcode');



/**
 * Enqueue scripts and styles.
 */
function ifs_testi_css_js() {
	
	wp_enqueue_style('testimonial-styles', plugin_dir_url( __FILE__ ) . 'css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'ifs_testi_css_js' );



function ifs_testi1( $atts, $content = null ){
   extract(shortcode_atts(array(
      'text' => 'left',
      'order' => 'DESC',
      'posts' => -1,
   ), $atts));

   $return_string = '<div id="testimonial-area">';
   query_posts(array('post_type'=>'ifs-testimonial', 'order' => 'DESC' , 'showposts' => -1));
   if (have_posts()) :
      while (have_posts()) : the_post();
	  $testititle= get_the_title(); 
		$testicontent= get_the_content(); 
		$testiimg= get_the_post_thumbnail(); 
         $return_string .= '<div class="single-testi text-'.$text.'">'.$testiimg.'<p>'.$testicontent.'</p><h4>- '.$testititle.'</h4></div>';
      endwhile;
   endif;
   $return_string .= '</div>';

   wp_reset_query();
   return $return_string;
}
add_shortcode('ifs_style1', 'ifs_testi1');

function ifs_testi2( $atts, $content = null ){
   extract(shortcode_atts(array(
      'text' => 'left',
      'order' => 'DESC',
      'posts' => -1,
   ), $atts));

   $return_string = '<div id="testimonial-area">';
   query_posts(array('post_type'=>'ifs-testimonial', 'order' => 'DESC' , 'showposts' => -1));
   if (have_posts()) :
      while (have_posts()) : the_post();
	  $testititle= get_the_title(); 
		$testicontent= get_the_content(); 
		$testiimg= get_the_post_thumbnail(); 
         $return_string .= '<div class="single-testi text-'.$text.'"><p>'.$testicontent.'</p>'.$testiimg.'<h4>- '.$testititle.'</h4></div>';
      endwhile;
   endif;
   $return_string .= '</div>';

   wp_reset_query();
   return $return_string;
}
add_shortcode('ifs_style2', 'ifs_testi2');

function ifs_testi3( $atts, $content = null ){
   extract(shortcode_atts(array(
      'text' => 'left',
      'order' => 'DESC',
      'posts' => -1,
   ), $atts));

   $return_string = '<div id="testimonial-area">';
   query_posts(array('post_type'=>'ifs-testimonial', 'order' => 'DESC' , 'showposts' => -1));
   if (have_posts()) :
      while (have_posts()) : the_post();
	  $testititle= get_the_title(); 
		$testicontent= get_the_content(); 
		$testiimg= get_the_post_thumbnail(); 
         $return_string .= '<div class="single-testi style-3 text-'.$text.'">'.$testiimg.'<p>'.$testicontent.'</p><h4>- '.$testititle.'</h4></div>';
      endwhile;
   endif;
   $return_string .= '</div>';

   wp_reset_query();
   return $return_string;
}
add_shortcode('ifs_style3', 'ifs_testi3');

function ifs_testi4( $atts, $content = null ){
   extract(shortcode_atts(array(
      'text' => 'left',
      'order' => 'DESC',
      'posts' => -1,
   ), $atts));

   $return_string = '<div id="testimonial-area">';
   query_posts(array('post_type'=>'ifs-testimonial', 'order' => 'DESC' , 'showposts' => -1));
   if (have_posts()) :
      while (have_posts()) : the_post();
	  $testititle= get_the_title(); 
		$testicontent= get_the_content(); 
		$testiimg= get_the_post_thumbnail(); 
         $return_string .= '<div class="single-testi style-4 text-'.$text.'">'.$testiimg.'<p>'.$testicontent.'</p><h4>- '.$testititle.'</h4></div>';
      endwhile;
   endif;
   $return_string .= '</div>';

   wp_reset_query();
   return $return_string;
}
add_shortcode('ifs_style4', 'ifs_testi4');

/*Files to Include*/
require_once('ifs-testi-type.php');


