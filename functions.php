<?php
declare(strict_types=1);

if (! defined('ABSPATH')) { exit; }

function ozeki_corporate_setup(): void {
	add_theme_support('editor-styles');
	add_editor_style('style.css');
}
add_action('after_setup_theme', 'ozeki_corporate_setup');

function ozeki_corporate_enqueue_styles(): void {
	wp_enqueue_style('ozeki-corporate-style', get_stylesheet_uri(), [], (string) wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'ozeki_corporate_enqueue_styles');
