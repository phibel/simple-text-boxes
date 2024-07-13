<?php
/*
Plugin Name: Simple Text Boxes
Description: A simple plugin to display text boxes with custom styles.
Version: 1.0
Author: phibel
*/

function simple_text_boxes_enqueue_styles() {
    wp_register_style( 'simple-text-boxes-style', plugins_url( 'css/style.css', __FILE__ ) );
    wp_enqueue_style( 'simple-text-boxes-style' );
}

add_action( 'wp_enqueue_scripts', 'simple_text_boxes_enqueue_styles' );

function simple_text_boxes_shortcode( $atts, $content = null ) {
    return '<div class="text_boxes">' . do_shortcode( $content ) . '</div>';
}

function simple_text_box_shortcode( $atts, $content = null ) {
    return '<div class="text_box">' . do_shortcode( $content ) . '</div>';
}

// Register shortcodes with WordPress
add_shortcode( 'text_boxes', 'simple_text_boxes_shortcode' );
add_shortcode( 'text_box', 'simple_text_box_shortcode' );