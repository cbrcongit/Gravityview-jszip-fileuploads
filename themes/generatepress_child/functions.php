<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file. 
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

function bootstrap_register_scripts() {
	wp_register_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css' );
	wp_register_script( 'bootstrapjs', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery') );
}

add_action( 'wp_enqueue_scripts', 'bootstrap_register_scripts' );

function bootstrap_enqueue_styles() {
        wp_enqueue_style( 'bootstrap' );
        wp_enqueue_script( 'bootstrapjs' );
}

add_action( 'wp_enqueue_scripts', 'bootstrap_enqueue_styles' );

function jszip_register_scripts() {
	wp_register_script( 'jszip', get_stylesheet_directory_uri() . '/js/jszip/dist/jszip.js', array('jquery') );
	wp_register_script( 'jszip-utils', get_stylesheet_directory_uri() . '/js/jszip/vendor/jszip-utils.js', array('jszip') );
	wp_register_script( 'jszip-applet', get_stylesheet_directory_uri() . '/js/jszip/vendor/fileupload-jszip.js', array('jszip', 'jszip-utils') );
	wp_register_script( 'filesaver', get_stylesheet_directory_uri() . '/js/jszip/vendor/FileSaver.js', array('jszip', 'jszip-utils') );
}

add_action( 'wp_enqueue_scripts', 'jszip_register_scripts' );

function jszip_enqueue_styles() {
    	wp_enqueue_script( 'jszip' );
    	wp_enqueue_script( 'jszip-utils' );
		wp_enqueue_script( 'jszip-applet' );
		wp_enqueue_script( 'filesaver' );		
}

add_action( 'wp_enqueue_scripts', 'jszip_enqueue_styles' );
