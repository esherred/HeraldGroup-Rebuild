<?php

require_once('asets/inc/bs4navwalker.php');

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

register_nav_menu('main', 'Main Nav');
register_nav_menu('footer', 'Footer Nav');

add_theme_support('post-thumbnails');
add_image_size('large', 700, '', true);
add_image_size('medium', 250, '', true);
add_image_size('small', 120, '', true);
add_image_size('custom-size', 700, 200, true);
add_image_size('slider', '', 400, true);
add_image_size('square', 500, 500, true);

acf_add_options_page();

add_action('wp_enqueue_scripts', 'thg_enque_files');
function thg_enque_files() {

  wp_enqueue_style('style', get_stylesheet_uri());
  
  wp_enqueue_script( 'fontawesome-js', get_template_directory_uri() . '/asets/js/fontawesome-all.js');

  wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array('jquery'), '1.11.0', true );
  wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array('jquery', 'popper-js'), '4.0.0-beta', true );
  wp_enqueue_script( 'slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );
  wp_enqueue_script( 'masonry-js', 'https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js', null, null, true );
  wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/asets/js/init.js', array('jquery', 'bootstrap-js'), '1.0.0', true );
}