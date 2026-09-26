<?php
/**
 * Title: Ozeki Corporate — Services
 * Slug: ozeki-corporate/page-services
 * Categories: ozeki-corporate-pages
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1200
 * Description: Service cards, working process, optional case study and contact guidance.
 */
?>
<!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size"><?php echo esc_html_x('The right support, at the right stage.', 'Services page introduction', 'ozeki-corporate'); ?></p><!-- /wp:paragraph -->
<?php require get_parent_theme_file_path('patterns/services.php'); ?>
<?php require get_parent_theme_file_path('patterns/process.php'); ?>
<?php require get_parent_theme_file_path('patterns/case-study.php'); ?>
<?php require get_parent_theme_file_path('patterns/call-to-action.php'); ?>
