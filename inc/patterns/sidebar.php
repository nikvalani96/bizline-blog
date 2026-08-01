<?php
/**
 * Sidebar
 */

return array(
    'title'      => esc_html__( 'Sidebar', 'bizline-blog' ),
	'categories' => array( 'bizline-blog', 'Columns' ),
    'content'    => '<!-- wp:group {"className":"sidebar-wrap","layout":{"type":"constrained"}} -->
            <div class="wp-block-group sidebar-wrap"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
            <div class="wp-block-group"><!-- wp:columns {"style":{"border":{"radius":"10px","color":"#e5e7eb","width":"1px"},"layout":{"selfStretch":"fit","flexSize":null}},"backgroundColor":"white"} -->
            <div class="wp-block-columns has-border-color has-white-background-color has-background" style="border-color:#e5e7eb;border-width:1px;border-radius:10px"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search..","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"color":{"background":"#e61f57"},"border":{"color":"#e61f57","width":"1px","radius":"5px"}},"fontSize":"small"} /--></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->

            <!-- wp:columns {"style":{"border":{"radius":"10px","color":"#e5e7eb","width":"1px"}},"backgroundColor":"white"} -->
            <div class="wp-block-columns has-border-color has-white-background-color has-background" style="border-color:#e5e7eb;border-width:1px;border-radius:10px"><!-- wp:column {"width":"100%"} -->
            <div class="wp-block-column" style="flex-basis:100%"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"24px","textTransform":"capitalize"},"border":{"bottom":{"color":"#e61f57","width":"2px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} -->
            <h4 class="wp-block-heading" style="border-bottom-color:#e61f57;border-bottom-width:2px;padding-bottom:var(--wp--preset--spacing--40);font-size:24px;text-transform:capitalize">Popular Posts</h4>
            <!-- /wp:heading -->

            <!-- wp:latest-posts {"postsToShow":4,"displayPostDate":true,"order":"asc","displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":70,"featuredImageSizeHeight":70,"addLinkToFeaturedImage":true,"align":"center"} /--></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->

            <!-- wp:columns {"style":{"border":{"color":"#e5e7eb","width":"1px","radius":"10px"}},"backgroundColor":"white"} -->
            <div class="wp-block-columns has-border-color has-white-background-color has-background" style="border-color:#e5e7eb;border-width:1px;border-radius:10px"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"24px","textTransform":"capitalize"},"border":{"bottom":{"color":"#e61f57","width":"2px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} -->
            <h4 class="wp-block-heading" style="border-bottom-color:#e61f57;border-bottom-width:2px;padding-bottom:var(--wp--preset--spacing--40);font-size:24px;text-transform:capitalize">Top Category</h4>
            <!-- /wp:heading -->

            <!-- wp:categories {"showPostCounts":true,"showOnlyTopLevel":true,"style":{"typography":{"fontSize":"18px"}}} /--></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->

            <!-- wp:columns {"style":{"border":{"radius":"10px","color":"#e5e7eb","width":"1px"}},"backgroundColor":"white"} -->
            <div class="wp-block-columns has-border-color has-white-background-color has-background" style="border-color:#e5e7eb;border-width:1px;border-radius:10px"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"24px","textTransform":"capitalize"},"border":{"bottom":{"color":"#e61f57","width":"2px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} -->
            <h4 class="wp-block-heading" style="border-bottom-color:#e61f57;border-bottom-width:2px;padding-bottom:var(--wp--preset--spacing--40);font-size:24px;text-transform:capitalize"><strong>Tags</strong></h4>
            <!-- /wp:heading -->

            <!-- wp:tag-cloud {"numberOfTags":9,"smallestFontSize":"14px","largestFontSize":"14px","className":"is-style-default","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"typography":{"textTransform":"capitalize"}}} /--></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->

            <!-- wp:columns {"style":{"border":{"color":"#e5e7eb","width":"1px","radius":"10px"}},"backgroundColor":"white"} -->
            <div class="wp-block-columns has-border-color has-white-background-color has-background" style="border-color:#e5e7eb;border-width:1px;border-radius:10px"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"24px","textTransform":"capitalize"},"border":{"bottom":{"color":"#e61f57","width":"2px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} -->
            <h4 class="wp-block-heading" style="border-bottom-color:#e61f57;border-bottom-width:2px;padding-bottom:var(--wp--preset--spacing--40);font-size:24px;text-transform:capitalize"><strong>Follow Us</strong></h4>
            <!-- /wp:heading -->

            <!-- wp:social-links {"customIconBackgroundColor":"#e61f57","iconBackgroundColorValue":"#e61f57","openInNewTab":true,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"left","orientation":"horizontal","flexWrap":"wrap"}} -->
            <ul class="wp-block-social-links has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

            <!-- wp:social-link {"url":"#","service":"instagram"} /-->

            <!-- wp:social-link {"url":"#","service":"x"} /-->

            <!-- wp:social-link {"url":"#","service":"pinterest"} /-->

            <!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
            <!-- /wp:social-links --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->',
    );

