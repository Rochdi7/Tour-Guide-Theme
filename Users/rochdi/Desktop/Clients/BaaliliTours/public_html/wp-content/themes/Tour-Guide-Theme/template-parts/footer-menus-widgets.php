<?php
/**
 * Displays the menus and widgets at the end of the main element.
 * Visually, this output is presented as part of the footer element.
 *
 * @package WordPress
 * @subpackage Travel_Agency
 * @since Travel Agency 1.0
 */

$has_footer_menu = has_nav_menu( 'footer' );
$has_social_menu = has_nav_menu( 'social' );

$has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
$has_sidebar_2 = is_active_sidebar( 'sidebar-2' );
$has_sidebar_3 = is_active_sidebar( 'sidebar-3' );

// Only output the container if there are elements to display.
if ( $has_footer_menu || $has_social_menu || $has_sidebar_1 || $has_sidebar_2 ) {
	?>

	<div class="footer-nav-widgets-wrapper header-footer-group top-footer-group">

		<div class="footer-inner section-inner container">
            <div class="row">
            <div class="col-md-4">
                <?php if ( $has_sidebar_1 ) { ?>
                    <div class="footer-widgets column-one grid-item">
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-2">
                <?php if ( $has_sidebar_2 ) { ?>
                    <div class="footer-widgets column-one grid-item">
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-3">
                <?php if ( $has_sidebar_3 ) { ?>

                    <div class="footer-widgets column-one grid-item">
                        <?php dynamic_sidebar( 'sidebar-3' ); ?>
                    </div>

                <?php } ?>
            </div>
            <div class="col-md-3">
                <?php

                $footer_top_classes = '';

                $footer_top_classes .= $has_footer_menu ? ' has-footer-menu' : '';
                $footer_top_classes .= $has_social_menu ? ' has-social-menu' : '';

                if ( $has_footer_menu || $has_social_menu ) {
                    ?>
                    <div class="footer-top<?php echo $footer_top_classes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">
                        <?php if ( $has_footer_menu ) { ?>

                            <nav aria-label="<?php esc_attr_e( 'Footer', 'travelagency' ); ?>" role="navigation" class="footer-menu-wrapper">

                                <ul class="footer-menu reset-list-style">
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'container'      => '',
                                            'depth'          => 1,
                                            'items_wrap'     => '%3$s',
                                            'theme_location' => 'footer',
                                        )
                                    );
                                    ?>
                                </ul>

                            </nav><!-- .site-nav -->

                        <?php } ?>
                        <?php if ( $has_social_menu ) { ?>
                            <h2 class="widget-title"><?php esc_attr_e( 'Get in touch', 'travelagency' ); ?></h2>
                            <nav aria-label="<?php esc_attr_e( 'Social links', 'travelagency' ); ?>" class="footer-social-wrapper">

                                <ul class="social-menu footer-social reset-list-style social-icons fill-children-current-color">

                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location'  => 'social',
                                            'container'       => '',
                                            'container_class' => '',
                                            'items_wrap'      => '%3$s',
                                            'menu_id'         => '',
                                            'menu_class'      => '',
                                            'depth'           => 1,
                                            'link_before'     => '<span class="screen-reader-text">',
                                            'link_after'      => '</span>',
                                            'fallback_cb'     => '',
                                        )
                                    );
                                    ?>

                                </ul><!-- .footer-social -->

                            </nav><!-- .footer-social-wrapper -->

                        <?php } ?>
                    </div><!-- .footer-top -->

                <?php } ?>
            </div>

            </div>
		</div><!-- .footer-inner -->

	</div><!-- .footer-nav-widgets-wrapper -->

<?php } ?>
