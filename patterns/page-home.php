<?php
/**
 * Title: Sample home page.
 * Slug: ondaatje/page-home
 * Categories: featured
 * Viewport Width: 1280
 *
 * @package ondaatje
 */

?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium"}}},"className":"wp-block-heading","fontSize":"max-48"} -->
<h2 class="wp-block-heading has-max-48-font-size" style="padding-top:var(--wp--preset--spacing--medium)">Uncovering the Magic of Michael Ondaatje's Writing</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|small"}}}} -->
<p style="padding-top:0;padding-bottom:var(--wp--preset--spacing--small)">Michael Ondaatje is a Sri Lankan-Canadian writer best known for his lyrical and evocative prose. He is a master of blending fact and fiction to create rich, multi-layered narratives that delve into the complexities of identity, memory, and love.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:heading {"style":{"typography":{"letterSpacing":"2px"}},"className":"wp-block-heading","fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size" style="letter-spacing:2px">Latest Posts</h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"neutral","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-neutral-color has-alpha-channel-opacity has-neutral-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"latest-posts"} -->
<div class="wp-block-query latest-posts"><!-- wp:post-template -->
<!-- wp:columns {"className":"is-style-default"} -->
<div class="wp-block-columns is-style-default"><!-- wp:column {"width":"70%","layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"}},"fontSize":"medium"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:post-date {"textAlign":"right","fontSize":"x-small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
