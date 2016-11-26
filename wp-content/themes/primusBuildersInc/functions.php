<?php


// Add scripts and stylesheets
function primusbuildersinc_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css', array(), '3.3.7' );
	// wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css', array(), '3.3.7' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array(), '3.1.1');
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'primusbuildersinc_scripts' );

// Add Google Fonts
function startwordpress_google_fonts() {
				wp_register_style('Gafata', 'https://fonts.googleapis.com/css?family=Gafata');
				wp_enqueue_style( 'Gafata');
		}

add_action('wp_print_styles', 'startwordpress_google_fonts');


//|Imprima
