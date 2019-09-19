<?php


// global styles for the meta boxes
if (is_admin()) add_action('admin_enqueue_scripts', 'metabox_style');

function metabox_style() {
	wp_enqueue_style('creatividad-metabox', get_stylesheet_directory_uri() . '/lib/metaboxes/meta.css');
}

/* eof */