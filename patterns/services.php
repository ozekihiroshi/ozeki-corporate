<?php
/**
 * Title: Service overview
 * Slug: ozeki-corporate/services
 * Categories: services, columns
 */
$services = [
    [_x('Advisory', 'Service title', 'ozeki-corporate'), _x('Find a clear direction', 'Service heading', 'ozeki-corporate'), _x('We listen to your priorities, review the situation and help you choose a practical next step.', 'Service description', 'ozeki-corporate')],
    [_x('Implementation', 'Service title', 'ozeki-corporate'), _x('Turn plans into practice', 'Service heading', 'ozeki-corporate'), _x('We bring people and details together, with a clear scope and steady communication from start to finish.', 'Service description', 'ozeki-corporate')],
    [_x('Ongoing support', 'Service title', 'ozeki-corporate'), _x('Keep making progress', 'Service heading', 'ozeki-corporate'), _x('We help you review what is working, resolve everyday challenges and build on the improvements you have made.', 'Service description', 'ozeki-corporate')],
];
?>
<!-- wp:group {"align":"full","className":"oc-section oc-soft","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull oc-section oc-soft">
<!-- wp:heading {"align":"wide"} -->
<h2 class="wp-block-heading alignwide"><?php echo esc_html_x('Support from first ideas to everyday practice', 'Services heading', 'ozeki-corporate'); ?></h2><!-- /wp:heading -->
<!-- wp:columns {"align":"wide","className":"oc-card-grid"} -->
<div class="wp-block-columns alignwide oc-card-grid">
<?php foreach ($services as [$label, $title, $description]) : ?>
<!-- wp:column --><div class="wp-block-column">
<!-- wp:group {"className":"oc-card","layout":{"type":"default"}} --><div class="wp-block-group oc-card">
<!-- wp:group {"className":"oc-card-body","layout":{"type":"default"}} --><div class="wp-block-group oc-card-body">
<!-- wp:paragraph {"className":"oc-eyebrow"} --><p class="oc-eyebrow"><?php echo esc_html($label); ?></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><?php echo esc_html($title); ?></h3><!-- /wp:heading -->
<!-- wp:paragraph --><p><?php echo esc_html($description); ?></p><!-- /wp:paragraph -->
</div><!-- /wp:group --></div><!-- /wp:group --></div><!-- /wp:column -->
<?php endforeach; ?>
</div><!-- /wp:columns --></div><!-- /wp:group -->
