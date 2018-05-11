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

acf_add_options_page();

/* Flush rewrite rules for custom post types. */
add_action( 'after_switch_theme', 'bt_flush_rewrite_rules' );

/* Flush your rewrite rules */
function bt_flush_rewrite_rules() {
     flush_rewrite_rules();
}