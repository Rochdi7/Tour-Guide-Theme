<?php
/**
 * Displays the search icon and modal
 *
 * @package WordPress
 * @subpackage Travel_Agency
 * @since Travel Agency 1.0
 */

?>
<div class="search-modal cover-modal header-footer-group" data-modal-target-string=".search-modal">

	<div class="search-modal-inner modal-inner">

		<div class="section-inner">

			<?php
			get_search_form(
				array(
					'label' => __( 'Search for:', 'travelagency' ),
				)
			);
			?>

			<button class="toggle search-untoggle close-search-toggle fill-children-current-color" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
				<span class="screen-reader-text"><?php _e( 'Close search', 'travelagency' ); ?></span>
				<?php travelagency_the_theme_svg( 'cross' ); ?>
			</button><!-- .search-toggle -->

		</div><!-- .section-inner -->

	</div><!-- .search-modal-inner -->

</div><!-- .menu-modal -->
