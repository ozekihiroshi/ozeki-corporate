<?php
/**
 * Title: Corporate hero
 * Slug: ozeki-corporate/hero
 * Categories: featured, banner
 */
?>
<!-- wp:group {"align":"full","className":"oc-section oc-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull oc-section oc-hero">
<!-- wp:columns {"align":"wide","className":"oc-hero-columns"} -->
<div class="wp-block-columns alignwide oc-hero-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"className":"oc-eyebrow"} -->
<p class="oc-eyebrow"><?php echo esc_html_x('Ideas into practice', 'Hero eyebrow', 'ozeki-corporate'); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html_x('Practical thinking. Lasting progress.', 'Hero heading', 'ozeki-corporate'); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"oc-lead"} -->
<p class="oc-lead"><?php echo esc_html_x('We help people turn everyday challenges into workable improvements.', 'Hero description', 'ozeki-corporate'); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x('From the first conversation to the next practical step, we bring clear advice, thoughtful delivery and ongoing support.', 'Hero supporting text', 'ozeki-corporate'); ?></p>
<!-- /wp:paragraph -->
</div><!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/team.png')); ?>" alt="<?php echo esc_attr_x('Illustration of a team discussing a project around a table', 'Starter image alternative text', 'ozeki-corporate'); ?>" /></figure>
<!-- /wp:image -->
</div><!-- /wp:column -->
</div><!-- /wp:columns -->
<!-- wp:paragraph {"align":"wide","className":"oc-demo-note"} -->
<p class="alignwide oc-demo-note"><?php echo esc_html_x('Illustrative business content and an AI-generated image. Replace them with your own story.', 'Starter example disclosure', 'ozeki-corporate'); ?></p>
<!-- /wp:paragraph -->
</div><!-- /wp:group -->
