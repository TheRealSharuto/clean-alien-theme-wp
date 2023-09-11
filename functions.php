<?php

function cleanalien_theme_support()
{

	// Adds dynamic title tag support
	add_theme_support('title-tag');
	add_theme_support('custom-logo', array(
		'height' => 480,
		'width'  => 720,
	));

	// Add dynamic logo support
	add_theme_support('custom-logo');
	// Add dynamic post thumbnails
	add_theme_support('post-thumbnails');

	add_theme_support( 'custom-background', [
		'default-color' => '#FFFFFF',
		'default-image' => '',
	]);
}

add_action('after_setup_theme', 'cleanalien_theme_support');
// Add dynamic menus
function cleanalien_menus() 
{
	$locations = array(
		'primary' => "Desktop Primary Top Bar",
		'footer' => "Footer Menu items"
	);
	register_nav_menus($locations);
}

add_action('init', 'cleanalien_menus');

// Adding my own class names to the <li> elements in the primary and secondary menus
function atg_menu_classes($classes, $item, $args)
{
	if ($args->theme_location == 'primary') {
		$classes['nav-item'] = 'list-inline-item';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

// Adding my own class names to the <a> element in the primary and secondary
function add_link_atts($atts)
{
	$atts['class'] = "nav-link";
	return $atts;
}
add_filter('nav_menu_link_attributes', 'add_link_atts');

// Adding active menu item
function special_nav_class($classes, $item)
{
	if (in_array('current-menu-item', $classes)) {
		$classes[] = 'active ';
	}
	return $classes;
}

// Connect the stylesheet to Wordpress so that it does not interfere with any other plugins or styling the user wants to implement
function cleanalien_register_styles()
{
	// 1st parameter: name of the stylesheet internally
	// 2nd parameter: function that returns the path up to your current themes directory
	// 3rd parameter: empty array
	// 4th parameter: dynamic version that is automatically pulled from stylesheet
	// 5th parameter: which stylesheet this is going to be user for. 
	$version = wp_get_theme()->get('Version');
	wp_enqueue_style('cleanalien-style', get_template_directory_uri() . "/style.css", array("cleanalien-bootstrap"), $version, 'all');
	wp_enqueue_style('cleanalien-bootstrap', get_template_directory_uri() . "/assets/src/library/css/bootstrap.css", array(),'5.0.2', 'all');
	//wp_enqueue_style('cleanalien-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", array(), '5.0.2', 'all');
	wp_enqueue_style('cleanalien-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css", array("cleanalien-style"), '6.4.2', 'all');
}
// hook function into WP system
add_action('wp_enqueue_scripts', 'cleanalien_register_styles');

function cleanalien_register_scripts()
{
	wp_enqueue_script('cleanalien-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', array(), '5.2.0', true);
	wp_enqueue_script('cleanalien-bootstrap-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3', array(), '5.2.0', true);
	wp_enqueue_script('cleanalien-main-js', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}

// hook function into WP system
add_action('wp_enqueue_scripts', 'cleanalien_register_scripts');


/**
 * cleanalien's functions and definitions
 *
 * @package cleanalien
 * @since cleanalien 1.0
 */
