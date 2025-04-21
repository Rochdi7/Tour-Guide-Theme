<?php
/**
 * Customizer Separator Control settings for this theme.
 *
 * @package WordPress
 * @subpackage Travel_Agency
 * @since Travel Agency 1.0
 */

if ( class_exists( 'WP_Customize_Control' ) ) {

	if ( ! class_exists( 'TravelAgency_Separator_Control' ) ) {
		/**
		 * Separator Control.
		 */
		class TravelAgency_Separator_Control extends WP_Customize_Control {
			/**
			 * Render the hr.
			 */
			public function render_content() {
				echo '<hr/>';
			}

		}
	}
}
