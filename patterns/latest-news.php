<?php
/** Title: Latest news
 * Slug: ozeki-corporate/latest-news
 * Categories: posts
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"align":"wide"} --><h2 class="wp-block-heading alignwide"><?php echo esc_html_x('Latest news', 'News heading', 'ozeki-corporate'); ?></h2><!-- /wp:heading --><!-- wp:query {"queryId":10,"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date","inherit":false},"align":"wide"} --><div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} --><!-- wp:post-date {"fontSize":"small"} /--><!-- wp:post-title {"isLink":true,"level":3,"fontSize":"large"} /--><!-- wp:post-excerpt {"excerptLength":24} /--><!-- /wp:post-template --></div><!-- /wp:query --></div><!-- /wp:group -->
