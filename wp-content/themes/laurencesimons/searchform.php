<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$lss_unique_id = lss_unique_id( 'search-form-' );

$lss_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
// Backward compatibility, in case a child theme template uses a `label` argument.
if ( empty( $lss_aria_label ) && ! empty( $args['label'] ) ) {
    $lss_aria_label = 'aria-label="' . esc_attr( $args['label'] ) . '"';
}
?>

<form id="search_form" role="search" <?php echo $lss_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?>
      method="get" class="is-flex group-input group-input-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">

    <label for="<?php echo esc_attr( $lss_unique_id ); ?>" class="padding-right-10">
        <span class="screen-reader-text">
            <?php _e( 'Search for:', 'lss' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?>
        </span>
        <input type="search" id="<?php echo esc_attr( $lss_unique_id ); ?>"
               class="input"
               placeholder="<?php echo esc_attr_x( 'Search Laurence Simons…', 'placeholder', 'lss' ); ?>"
               value="<?php echo get_search_query(); ?>"
               name="s" />
    </label>

    <button type="submit" class="button is-secondary has-icon is-big">
        <ion-icon name="arrow-forward-outline"></ion-icon>
    </button>
</form>
