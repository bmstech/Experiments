<?php

add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
register_nav_menu('Header Nav', 'Navigation Menu');

function create_post_type() {
	register_post_type('inteplast_employees', array(
		'labels' => array(
			'name' => __('Employees'),
			'singular_name' => __('Employee')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'employees'),
		'supports' => array(
			'title',
			'revisions',
			'thumbnail',
			'author',
			'editor',
			'comments',
			'excerpt',)
		)
	);

	register_post_type('inteplast_documents', array(
		'labels' => array(
			'name' => __('Documents'),
			'singular_name' => __('Document')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'documents'),
		'supports' => array(
			'title',
			'revisions',
			'thumbnail',
			'author',
			'editor',)
		)
	);
}

require_once ( get_template_directory() . '/autocracy/autocracy.php' );
require_once ( get_template_directory() . '/autocracy/homepage-manager.php' );
// Re-define meta box path and URL
define('RWMB_URL', trailingslashit(get_stylesheet_directory_uri() . '/autocracy/API/'));
define('RWMB_DIR', trailingslashit(get_template_directory() . '/autocracy/API/'));
// Include the meta box script
require_once RWMB_DIR . '/meta-box.php';
include get_template_directory() . '/autocracy/demo.php';

add_action('init', 'create_post_type');
?>