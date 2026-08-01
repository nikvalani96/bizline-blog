<?php
/**
 * Related Post Section 
 */

return array(
    'title'      => esc_html__( 'Related Post Section ', 'bizline-blog' ),
	'categories' => array( 'bizline-blog', 'featured' ),
    'content'    => '<!-- wp:group {"className":"business-section ","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#f7f8f9"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group business-section has-background" style="background-color:#f7f8f9;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%","className":"business-left-cols"} -->
<div class="wp-block-column business-left-cols" style="flex-basis:100%"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontFamily":"be-vietnam-pro"} -->
<h3 class="wp-block-heading has-be-vietnam-pro-font-family" style="text-transform:uppercase">Agriculture</h3>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","className":"is-style-fill","style":{"typography":{"fontSize":"14px"},"color":{"background":"#e61f57"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"width":"0px","style":"none","radius":"0px"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:0px;background-color:#e61f57;font-size:14px">View All</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":34,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"business-grid-rows","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-terms {"term":"category","className":"cat-label-badge","style":{"color":{"background":"#e61f57"},"spacing":{"padding":{"top":"7px","bottom":"7px","left":"14px","right":"14px"}},"border":{"radius":"5px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"10px","fontStyle":"normal","fontWeight":"700","textDecoration":"none","textTransform":"uppercase","lineHeight":"1"}},"textColor":"white","fontFamily":"roboto"} /-->

<!-- wp:post-featured-image {"isLink":true,"sizeSlug":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50","top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"#1e1e1e"}}},"color":{"text":"#1e1e1e"},"typography":{"fontSize":"16px"}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"}},"typography":{"fontSize":"22px"}},"fontFamily":"roboto"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":15,"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontSize":"16px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);