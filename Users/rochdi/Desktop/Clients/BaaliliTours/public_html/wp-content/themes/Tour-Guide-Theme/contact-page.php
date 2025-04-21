<?php
/*
Template Name: Contact Page
Template Post Type: page
*/

get_header();
while ( have_posts() ) : the_post();
endwhile; // End of the loop. ?>
<?php
$header_background_image = get_field('header_background_image');
?>
<div class="page-top-header page-top-header-contact" style=" <?php echo ($header_background_image)?"background-image:url('".$header_background_image['url']."')":'' ?>">
    <h1 class="main-title"><?php the_title(); ?></h1>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 contact-info">
            <div class="contact-info-inner">
                <!--                <p>get in touch</p>-->
                <h2>Baalili Tours</h2>
                <p>Immeuble Yasmine Appt 9<br> Marrakech - Morocco</p>
                <p>Email : contact@baalilitours-morocco.com</p>
                <p>
                    Mobile : +212 667-913612
                </p>
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
            </div>
        </div>
        <div class="col-sm-6">
            <div class="contact-form">
                <h2>Contact Form</h2>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
