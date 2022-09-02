<?php
/**
 * Title: 404 content
 * Slug: wcus/hidden-404-content
 * Inserter: no
 */
?>

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">Sorry We couldn't find anything for you, here's a cute Wapuu instead.</h2>
<!-- /wp:heading -->

<!-- wp:image {"align":"full","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignfull size-full">
    <img src="<?php echo esc_url( get_template_directory_uri()) ?>/assets/images/surferpuu.jpeg" alt="<?php echo esc_attr__( 'WCUS 2022 Wapuu.', 'wcus' ) ?>"/>
</figure>
<!-- /wp:image -->