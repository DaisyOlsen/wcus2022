<?php
/**
 * Title: Default Footer
 * Slug: wcus/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"50px","bottom":"50px","left":"50px"}}},"textColor":"contrast","gradient":"primary-gradient","layout":{"inherit":false}} -->
<div class="wp-block-group has-contrast-color has-primary-gradient-gradient-background has-text-color has-background" style="padding-top:20px;padding-right:50px;padding-bottom:50px;padding-left:50px">
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">
<?php
printf(
	/* Translators: WordPress link. */
	esc_html__( 'Proudly powered by %s', 'wcus' ),
	'<a href="' . esc_url( __( 'https://wordpress.org', 'wcus' ) ) . '" rel="nofollow">WordPress</a> © ' . date('Y')
)
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->