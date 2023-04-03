<?php
/**
 * Displays the search icon and modal
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */

?>
<div class="search-modal cover-modal header-footer-group" data-modal-target-string=".search-modal">

	<div class="search-modal-inner modal-inner">

		<div class="section-inner">

			<?php
			get_search_form(
				array(
					'aria_label' => __( 'Search for:', 'lss' ),
				)
			);
			?>

			<button class="toggle search-untoggle close-search-toggle fill-children-current-color" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field">
				<span class="screen-reader-text"><?php _e( 'Close search', 'lss' ); ?></span>
				<?php lss_the_theme_svg( 'cross' ); ?>
			</button><!-- .search-toggle -->

		</div><!-- .section-inner -->

	</div><!-- .search-modal-inner -->

</div><!-- .menu-modal -->
