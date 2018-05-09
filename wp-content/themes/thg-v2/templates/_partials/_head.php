<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/asets/img/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/asets/img/favicon.ico" rel="apple-touch-icon-precomposed">
    <script defer src="<?php echo get_template_directory_uri(); ?>/asets/js/fontawesome-all.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <?php wp_head(); ?>
  </head>