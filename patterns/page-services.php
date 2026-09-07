<?php
/**
 * Title: Ozeki Corporate — Services
 * Slug: ozeki-corporate/page-services
 * Categories: ozeki-corporate-pages
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1200
 * Description: Service cards and a practical three-step working process.
 */
?>
<!-- wp:paragraph {"fontSize":"large"} --><p class="has-large-font-size"><?php echo esc_html_x('The right support, at the right stage.', 'Services page introduction', 'ozeki-corporate'); ?></p><!-- /wp:paragraph -->
<?php require get_parent_theme_file_path('patterns/services.php'); ?>
<!-- wp:heading --><h2 class="wp-block-heading"><?php echo esc_html_x('How we work together', 'Services page process heading', 'ozeki-corporate'); ?></h2><!-- /wp:heading -->
<!-- wp:columns {"align":"wide","className":"oc-steps"} --><div class="wp-block-columns alignwide oc-steps">
<!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php echo esc_html_x('1. Understand', 'Services page step', 'ozeki-corporate'); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php echo esc_html_x('We listen to your priorities and agree on the outcome you want to achieve.', 'Services page step description', 'ozeki-corporate'); ?></p><!-- /wp:paragraph --></div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php echo esc_html_x('2. Plan and deliver', 'Services page step', 'ozeki-corporate'); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php echo esc_html_x('We define a manageable scope and keep you informed as the work progresses.', 'Services page step description', 'ozeki-corporate'); ?></p><!-- /wp:paragraph --></div><!-- /wp:column -->
<!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php echo esc_html_x('3. Review and improve', 'Services page step', 'ozeki-corporate'); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php echo esc_html_x('We review the results together and identify useful next steps.', 'Services page step description', 'ozeki-corporate'); ?></p><!-- /wp:paragraph --></div><!-- /wp:column -->
</div><!-- /wp:columns -->
<!-- wp:paragraph {"className":"oc-demo-note"} --><p class="oc-demo-note"><?php echo esc_html_x('Example services and process. Replace with the work your business actually offers.', 'Services page disclosure', 'ozeki-corporate'); ?></p><!-- /wp:paragraph -->
