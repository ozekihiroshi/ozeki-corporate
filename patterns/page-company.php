<?php
/**
 * Title: Ozeki Corporate — Company
 * Slug: ozeki-corporate/page-company
 * Categories: ozeki-corporate-pages
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1200
 * Description: An editable company profile and business information table.
 */
?>
<!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size"><?php echo esc_html_x('Clear information about who we are and what we do.', 'Company page introduction', 'ozeki-corporate'); ?></p><!-- /wp:paragraph -->
<?php require get_parent_theme_file_path('patterns/company-information.php'); ?>
<!-- wp:heading --><h2 class="wp-block-heading"><?php echo esc_html_x('Our approach', 'Company page heading', 'ozeki-corporate'); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph --><p><?php echo esc_html_x('We value reliable communication, practical solutions and lasting relationships. We take time to understand each project and explain the next steps clearly.', 'Company page text', 'ozeki-corporate'); ?></p><!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"oc-demo-note"} --><p class="oc-demo-note"><?php echo esc_html_x('This profile is fictional. Replace the name, location and activities with accurate business information before publishing.', 'Company page disclosure', 'ozeki-corporate'); ?></p><!-- /wp:paragraph -->
