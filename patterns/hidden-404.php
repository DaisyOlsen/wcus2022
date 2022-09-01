<?php
/**
 * Title: Hidden 404
 * Slug: wcus/hidden-404
 * Inserter: no
 */
?>

<!-- wp:heading {"className":"has-text-align-center","fontSize":"x-large"} -->
<h2 class="has-text-align-center has-x-large-font-size"><?php echo esc_html_x( '404', 'Error code for a webpage that is not found.', 'wcus' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'This page could not be found.', 'Message to convey that a webpage could not be found', 'wcus' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'wcus' ); ?>","placeholder":"<?php echo esc_html_x( 'Search...', 'placeholder for search field', 'wcus' ); ?>","showLabel":false,"width":70,"widthUnit":"%","buttonText":"<?php esc_html_e( 'Search', 'wcus' ); ?>","buttonUseIcon":true,"align":"center"} /-->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->