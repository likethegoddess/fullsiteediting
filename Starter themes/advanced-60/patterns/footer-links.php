<?php
/**
 * Title: Footer links
 * Slug: full-site-editing/footer-links
 * Categories: text
 * Inserter: no
 *
 * @package full-site-editing
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} --><div class="wp-block-group">
<!-- wp:paragraph {"fontSize":"extra-small"} --><p class="has-extra-small-font-size">
<?php echo esc_html__( 'Copyright', 'full-site-editing' ) . ' ' . date_i18n( _x( 'Y', 'copyright date format', 'full-site-editing' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:site-title {"level":0, "fontSize":"extra-small"} /-->
<?php echo full_site_editing_privacy(); ?>
</div><!-- /wp:group -->
<!-- wp:social-links {"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links is-style-logos-only"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
<!-- /wp:social-links -->
</div><!-- /wp:group -->
