<?php
/**
 * Title: Footer
 * Slug: wordpress-theme/hidden-footer
 * Inserter: no
 *
 * @package wordpress-theme
 * @since 1.0.0
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"primary","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><?php echo esc_html__( 'Copyright', 'wordpress-theme' ) . ' ' . date_i18n( _x( 'Y', 'copyright date format', 'wordpress-theme' ) ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:site-title {"level":0,"isLink":false,"fontSize":"small"} /-->
	<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"var(--wp--preset--color--contrast)","className":"has-icon-color is-style-logos-only"} -->
	<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links -->
</div>
<!-- /wp:group -->

