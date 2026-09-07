<?php
/**
 * Title: Ozeki Corporate — About
 * Slug: ozeki-corporate/page-about
 * Categories: ozeki-corporate-pages
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1200
 * Description: A company introduction with a photograph, approach and values.
 */
?>
<!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size"><?php echo esc_html_x('Good work begins with a conversation.', 'About page introduction', 'ozeki-corporate'); ?></p><!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide"} --><figure class="wp-block-image alignwide size-full"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/team.png')); ?>" alt="<?php echo esc_attr_x('Illustration of colleagues discussing a project around a table', 'About page image', 'ozeki-corporate'); ?>" /></figure><!-- /wp:image -->
<!-- wp:heading --><h2 class="wp-block-heading"><?php echo esc_html_x('A thoughtful approach to everyday challenges', 'About page heading', 'ozeki-corporate'); ?></h2><!-- /wp:heading -->
<!-- wp:paragraph --><p><?php echo esc_html_x('We work alongside our clients to understand what matters, make clear decisions and turn plans into useful improvements. Our approach brings together careful listening, practical experience and steady communication.', 'About page text', 'ozeki-corporate'); ?></p><!-- /wp:paragraph -->
<?php require get_parent_theme_file_path('patterns/strengths.php'); ?>
<!-- wp:paragraph {"className":"oc-demo-note"} --><p class="oc-demo-note"><?php echo esc_html_x('Fictional example content and AI-generated imagery. Replace with your own story and photograph before publishing.', 'Page starter disclosure', 'ozeki-corporate'); ?></p><!-- /wp:paragraph -->
