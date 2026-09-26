<?php
/**
 * Title: Ozeki Corporate — About
 * Slug: ozeki-corporate/page-about
 * Categories: ozeki-corporate-pages
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1200
 * Description: Company introduction, values, representative message, company information and contact guidance.
 */
?>
<!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size"><?php echo esc_html_x('Good work begins with a conversation.', 'About page introduction', 'ozeki-corporate'); ?></p><!-- /wp:paragraph -->
<?php require get_parent_theme_file_path('patterns/introduction.php'); ?>
<?php require get_parent_theme_file_path('patterns/strengths.php'); ?>
<?php require get_parent_theme_file_path('patterns/representative-message.php'); ?>
<?php require get_parent_theme_file_path('patterns/company-information.php'); ?>
<?php require get_parent_theme_file_path('patterns/call-to-action.php'); ?>
