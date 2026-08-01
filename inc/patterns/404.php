<?php
/**
 * 404 Not Found
 */
$image_url = get_template_directory_uri() . '/assets/images/404.jpg';

return array(
    'title'      => esc_html__( '404 Not Found ', 'bizline-blog' ),
	'categories' => array( 'bizline-blog', '404' ),
    'content'    => '<!-- wp:group {"tagName":"main","metadata":{"categories":["bizline-blog","404"],"patternName":"bizline-blog/404","name":"404 Not Found "},"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center">Page Not Found</h1>
<!-- /wp:heading -->

 <!-- wp:paragraph -->
    <p>We\'re sorry, but the page you were looking for doesn\'t exist.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":2523,"width":"800px","sizeSlug":"full","linkDestination":"none","className":"is-style-default","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<figure class="wp-block-image size-full is-resized is-style-default"><img src="' . esc_url( $image_url ) . '" alt="404" class="wp-image-2523" style="width:800px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->',
);

