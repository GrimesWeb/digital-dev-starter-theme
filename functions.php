<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>

<?php
// Enqueue styles and scripts
function thedd_enqueue_files()
{
	// Main CSS style for appearance > editor > style.css, enqueue everything below main-css
	wp_enqueue_style('default-css', get_stylesheet_uri());
	/*
	* Get developer css stylesheet
	* Make sure to comment out filemtime version and uncomment line
	* with hardset version for caching purposes once live.
	*/
	wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css', [], filemtime(get_stylesheet_directory() . '/assets/css/main.css'), false);
	// wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css', [], '1.0', false);
}
add_action('wp_enqueue_scripts', 'thedd_enqueue_files');

/* NO SNIPPETS BELOW HERE - ONLY INCLUDES */

/* Setup Site */
require_once get_template_directory() . '/includes/theme-setup.php';

/* Additonal functions */
require_once get_template_directory() . '/includes/additional-functions.php';
