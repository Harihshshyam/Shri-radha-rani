<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


function wens_trails_scripts(){
   // enqueue parent style
	wp_enqueue_style('wens-trails-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'wens_trails_scripts');


function wens_trails_register_block_pattern_categories(){
    register_block_pattern_category(
        'wens-trails',
        array( 'label' => __( 'WENS Trails', 'wens-trails' ) )
    );

}
add_action('init', 'wens_trails_register_block_pattern_categories');

require get_stylesheet_directory() . '/tgm-plugin/tgm-hook.php';
