<!DOCTYPE html>

<html <?php language_attributes(); ?> >

<head>

	
	<meta name="viewport" content="width=device-width">

	<meta http-equiv="Content-Type" content="<?php esc_attr(bloginfo('html_type')); ?>; charset=<?php esc_attr(bloginfo('charset')); ?>" />
	
	
	<link rel="pingback" href="<?php esc_url(bloginfo('pingback_url')); ?>" />


	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

	<div id="loader-wrapper" >
    	<div id="loader"></div><!--loader ends-->
	</div><!--loader-wrapper ends-->
	