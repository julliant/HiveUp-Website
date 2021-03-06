<?php
/*
All the functions are in the PHP pages in the `functions/` folder.
*/

	require get_template_directory() . '/functions/cleanup.php';
	require get_template_directory() . '/functions/setup.php';
	require get_template_directory() . '/functions/enqueues.php';
	require get_template_directory() . '/functions/navbar.php';
	require get_template_directory() . '/functions/widgets.php';
	require get_template_directory() . '/functions/search-widget.php';
	require get_template_directory() . '/functions/index-pagination.php';
	require get_template_directory() . '/functions/split-post-pagination.php';
	require get_template_directory() . '/functions/feedback.php';
	require get_template_directory() . '/functions/remove-query-string.php';

	function themename_custom_logo_setup() {
	    $defaults = array(
	        'height'      => 100,
	        'width'       => 400,
	        'flex-height' => true,
	        'flex-width'  => true,
	        'header-text' => array( 'site-title', 'site-description' ),
	    );
	    add_theme_support( 'custom-logo', $defaults );
	}
	add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

	function calculator_script_enqueue() {
		wp_enqueue_script('retirement-calculator',get_template_directory() . '/js/retirement-calculator.js', array(),'1.0.0', true);
		wp_enqueue_script('nlform',get_template_directory() . '/js/nlform.js', array(),'1.0.0', true);
	}
	add_action('wp_enqueue_scripts.js','calculator_script_enqueue');
