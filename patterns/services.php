<?php
/**
 * Title: Service overview
 * Slug: ozeki-corporate/services
 * Categories: services, columns
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","align":"wide"} --><h2 class="wp-block-heading alignwide has-text-align-center"><?php echo esc_html_x('Services', 'Services heading', 'ozeki-corporate'); ?></h2><!-- /wp:heading --><!-- wp:columns {"align":"wide"} --><div class="wp-block-columns alignwide"><?php foreach ([_x('Advisory', 'Service title', 'ozeki-corporate'), _x('Implementation', 'Service title', 'ozeki-corporate'), _x('Ongoing support', 'Service title', 'ozeki-corporate')] as $title) : ?><!-- wp:column {"backgroundColor":"base"} --><div class="wp-block-column has-base-background-color has-background"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php echo esc_html($title); ?></h3><!-- /wp:heading --><!-- wp:paragraph --><p><?php echo esc_html_x('Describe this service and the outcome it provides.', 'Service description', 'ozeki-corporate'); ?></p><!-- /wp:paragraph --></div><!-- /wp:column --><?php endforeach; ?></div><!-- /wp:columns --></div><!-- /wp:group -->
