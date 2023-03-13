<?php
/**
 * Title: 404 error content.
 * Slug: ondaatje/hidden-404
 * Inserter: false
 *
 * @package ondaatje
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":1,"className":"wp-block-heading","fontSize":"max-48"} -->
<h1 class="wp-block-heading has-max-48-font-size"><?php echo esc_html__( 'Not found - Error 404', 'ondaatje' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Oops, the page you are looking for does not exist or is no longer available. Everything is still awesome. Just use the search form to find your way.', 'ondaatje' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search"} /--></div>
<!-- /wp:group -->
