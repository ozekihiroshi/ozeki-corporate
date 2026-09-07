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

function ozeki_corporate_register_pattern_categories(): void {
	register_block_pattern_category('ozeki-corporate-pages', [
		'label' => __('Ozeki Corporate pages', 'ozeki-corporate'),
	]);
}
add_action('init', 'ozeki_corporate_register_pattern_categories');

if (is_admin()) {
	require_once get_parent_theme_file_path('inc/getting-started.php');
}

/** Supply page links for classic nextpage markers not handled by core's block check. */
function ozeki_corporate_classic_page_links(string $content, array $parsed_block, WP_Block $block): string {
	$post_id = (int) ($block->context['postId'] ?? 0);
	if (! is_singular() || $post_id !== get_queried_object_id() || $post_id !== get_the_ID()
		|| post_password_required($post_id) || has_block('core/nextpage', $post_id)) {
		return $content;
	}
	return $content . wp_link_pages(['echo' => false]);
}
add_filter('render_block_core/post-content', 'ozeki_corporate_classic_page_links', 10, 3);
