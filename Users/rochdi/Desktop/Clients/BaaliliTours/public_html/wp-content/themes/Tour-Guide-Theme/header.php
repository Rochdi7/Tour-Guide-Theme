<?php
/**
 * Header file for the Travel Agency WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Travel_Agency
 * @since Travel Agency 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
        <div class="top-bar">
            <div class="container">
                <div class="row">
                <div class="col-sm-6 d-none d-sm-block">
                    <a href=""><a href=""><i class="icon-mail_outline"></i> contact@baalilitours-morocco.com</a>
						<?php echo do_shortcode('[google-translator]'); ?>
                </div>
                <div class="col-sm-6 text-right">
                    <div class="phones">
                        <a href="tel:+212 667-913612"><i class="icon-phone"></i> +212 667-913612</a>
                    </div>
                    <?php /* ?>
                    <ul class="social-menu">
                    <?php
                    if ( has_nav_menu( 'social' ) ) {

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

                    }
                    ?>
                    </ul>
                    <?php */ ?>
                </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-md-row align-items-center p-2 px-md-4 bg-white shadow-sm">
            <div class="container d-flex flex-column flex-lg-row header-section align-items-center">
                <h5 class="my-0 mr-md-auto font-weight-normal">
                    <a href="<?php echo get_home_url() ?>" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-travel-agency.png" alt="baalilitours-morocco-travel-agency" width="160" class="img-fluid">
                    </a>
                </h5>
                <nav class="my-2 my-md-0 w-100">
                    <nav class="primary-menu-wrapper navbar navbar-expand-lg navbar-light" aria-label="<?php esc_attr_e( 'Horizontal', 'travelagency' ); ?>" role="navigation">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="primary-menu reset-list-style">

                            <?php
                            if ( has_nav_menu( 'primary' ) ) {

                                wp_nav_menu(
                                    array(
                                        'container'  => '',
                                        'items_wrap' => '%3$s',
                                        'theme_location' => 'primary',
                                    )
                                );

                            } elseif ( ! has_nav_menu( 'expanded' ) ) {

                                wp_list_pages(
                                    array(
                                        'match_menu_classes' => true,
                                        'show_sub_menu_icons' => true,
                                        'title_li' => false,
                                        'walker'   => new TravelAgency_Walker_Page(),
                                    )
                                );

                            }
                            ?>

                        </ul>
                        </div>
                    </nav>
                </nav>
            </div>
        </div>

		<?php
