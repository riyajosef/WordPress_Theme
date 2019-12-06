<!DOCTYPE html>
<html>
<head>
  <?php wp_head(); ?>
  <link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet" type="text/css">
  
  <title><?php wp_title(); ?></title> 
</head>
<body class="bg">
    
	<?php wp_nav_menu(array('container_class'=>'menubar')); ?>
	