<?php

	$post_id =isset($_GET['post'] )? $_GET['post'] : isset($_POST['post_ID']);
	$template_file = get_post_meta($post_id,'_wp_page_template',TRUE);

	// check for a template type

	

	 $nav_check_metabox = $nav_check_mb = new WPMETA_MetaBox(array
	(
			'id' => 'nav_check_meta',
			'types' => array('page'),
			'title' => esc_html__('Navgation Option', 'creatividad'),
			'template' => get_template_directory() . '/lib/metaboxes/nav-check-meta.php',
			'priority' => 'high',
	));


  	$slider_metabox = $slider_mb = new WPMETA_MetaBox(array
	(
		'id' => '_custom_meta',
		'title' => esc_html__('Slider', 'creatividad'),
		'types' => array('page'),
		'template' => get_template_directory() . '/lib/metaboxes/layerslider_meta.php',
		'priority' => 'high',
	));


	$footer_check_metabox = $footer_check_mb = new WPMETA_MetaBox(array
	(
			'id' => 'footer_check_meta',
			'types' => array('portfolio','page','post'),
			'title' => esc_html__('Footer Option', 'creatividad'),
			'template' => get_template_directory() . '/lib/metaboxes/footer-check-meta.php',
			'priority' => 'high',
	));



	  $sub_header_metabox= $sub_header_mb = new WPMETA_MetaBox(array
	(
		'id' => 'sub_custom_meta',
		'types' => array('page','portfolio','post'),
		'title' => esc_html__('Custom Header Banner', 'creatividad'),
		'template' => get_template_directory() . '/lib/metaboxes/header-check-meta.php',
	));




	$sidebar_metabox = $siderbar_mb = new WPMETA_MetaBox(array
	(
		'id' => 'sidebar_custom',
		'types' => array('post'),
		'title' => esc_html__('Custom Slide Out Siderbar', 'creatividad'),
		'template' => get_template_directory() . '/lib/metaboxes/sidebar-check-meta.php',

	));
