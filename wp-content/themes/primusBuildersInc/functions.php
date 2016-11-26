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

// Filter email address
add_filter( 'wp_mail_from', 'my_mail_from' );
function my_mail_from( $email ) {
    return "kgnat77@gmail.com";
}

// Filter email name
add_filter( 'wp_mail_from_name', 'my_mail_from_name' );
function my_mail_from_name( $name ) {
    return "KonradGnatWP";
}





/**
 * This function will connect wp_mail to your authenticated
 * SMTP server. This improves reliability of wp_mail, and
 * avoids many potential problems.
 *
 * Author:     Chad Butler
 * Author URI: http://butlerblog.com
 *
 * For more information and instructions, see:
 * http://b.utler.co/Y3
 */
add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {

	// Define that we are sending with SMTP
	$phpmailer->isSMTP();

	// The hostname of the mail server
	$phpmailer->Host = "smtp.gmail.com";

	// Use SMTP authentication (true|false)
	$phpmailer->SMTPAuth = true;

	// SMTP port number - likely to be 25, 465 or 587
	$phpmailer->Port = "465";

	// Username to use for SMTP authentication
	$phpmailer->Username = "kgnat77@gmail.com";

	// Password to use for SMTP authentication
	$phpmailer->Password = "passsssfake";

	// Encryption system to use - ssl or tls
	$phpmailer->SMTPSecure = "ssl";

	$phpmailer->From = "kgnat77@gmail.com";
	$phpmailer->FromName = "konradWP";
}
