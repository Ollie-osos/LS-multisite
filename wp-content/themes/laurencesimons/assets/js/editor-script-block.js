/**
 * Remove squared button style
 *
 * @since Laurence Simons 2022 1.0
 */
/* global wp */
wp.domReady( function() {
	wp.blocks.unregisterBlockStyle( 'core/button', 'squared' );
} );
