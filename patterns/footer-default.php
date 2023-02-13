<?php
/**
 * Title: Footer with text, links.
 * Slug: ondaatje/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"},"margin":{"top":"0px"}}},"layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-top:0px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|neutral","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|x-large"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","orientation":"horizontal"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--neutral);border-top-width:1px;margin-top:var(--wp--preset--spacing--x-large);padding-top:var(--wp--preset--spacing--x-small);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size">© <?php echo date_i18n( 'Y' ); ?> Ondaatje</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><a href="#">Facebook</a>&nbsp;·&nbsp;<a href="#">Twitter</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
