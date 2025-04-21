<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Travel_Agency
 * @since Travel Agency 1.0
 */

get_header();
while ( have_posts() ) : the_post();
endwhile;
?>

<main id="site-content" role="main">
    <div class="container program-main-container">
        <div class="row">
            <div class="col-sm-9">
                <div class="title-container">
                    <h1><?php the_title()?></h1>
                    <a href="#book-now" class="btn-more">Book Now</a>
                </div>
                <div class="tours-properties">

                    <?php if (get_field('duration')): ?>
                    <div class="property">
                        <i class="fa fa-clock-o"></i>
                        <span>Duration</span>
                        <b><?php echo get_field('duration'); ?></b>
                    </div>
                    <?php endif ?>
                    <?php if (get_field('city')): ?>
                    <div class="property">
                        <i class="fa fa-map-marker"></i>
                        <span>City</span>
                        <b><?php echo get_field('city'); ?></b>
                    </div>
                    <?php endif ?>
                    <?php if (get_field('type')): ?>
                    <div class="property">
                        <i class="fa fa-lock"></i>
                        <span>Type</span>
                        <b><?php echo get_field('type'); ?></b>
                    </div>
                    <?php endif ?>


                </div>
                <?php if( have_rows('page_slider') ): ?>
                    <div class="tours-slider-container">
                        <div>
                            <div class="main-slider" data-aos="fade">
                                <div id="main-home-slider">
                                    <?php

                                    // check if the repeater field has rows of data
                                    if( have_rows('page_slider') ):
                                        // loop through the rows of data
                                        while ( have_rows('page_slider') ) : the_row();
                                            ?>
                                            <div class="home-slide">
                                                <img src="<?php echo (get_sub_field('image'))['sizes']['slide']; ?>" alt="">
                                            </div>
                                        <?php
                                        endwhile;
                                    endif;
                                    ?>

                                </div>
                                <a href="#" class="slider-arrow arrow-prev" onclick="return false;" id="arrow_left"><i class="icon-arrow_back_ios"></i></a>
                                <a href="#" class="slider-arrow arrow-next" onclick="return false;" id="arrow_right"><i class="icon-arrow_forward_ios"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                <div class="tours-content">
                    <div class="content-section">
                        <h2>Overview</h2>
                        <div class="content-section-content">
                            <?php the_content() ?>
                        </div>
                    </div>
                    <?php if( have_rows('itinerary') ): ?>
                    <div class="content-section">
                        <h2>Itinerary</h2>
                        <div class="content-section-content">
                        <?php
                        // check if the repeater field has rows of data
                        if( have_rows('itinerary') ):
                            // loop through the rows of data
                            while ( have_rows('itinerary') ) : the_row();
                                ?>
                                <div class="day-line">
                                    <div class="day-header">
                                        <div class="img" style="background-image: url('<?php echo (get_sub_field('image'))['sizes']['large']; ?>')"></div>
                                        <h3><?php echo get_sub_field('name'); ?></h3>
                                        <h2><?php echo get_sub_field('title'); ?></h2>
                                    </div>
                                    <div class="day-description">
                                        <?php echo get_sub_field('description'); ?>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        ?>
                        </div>
                    </div>
                    <?php endif ?>

                    <?php if (get_field('included')): ?>
                        <div class="content-section">
                            <h2>Inclusions</h2>
                            <div class="content-section-content">
                                <?php echo get_field('included'); ?>
                            </div>
                        </div>
                    <?php endif ?>
                    <?php if (get_field('not_included')): ?>
                        <div class="content-section">
                            <h2>Exclusions</h2>
                            <div class="content-section-content">
                                <?php echo get_field('not_included'); ?>
                            </div>
                        </div>
                    <?php endif ?>
                    <?php if (get_field('highlights')): ?>
                        <div class="content-section">
                            <h2>Highlights</h2>
                            <div class="content-section-content">
                                <?php echo get_field('highlights'); ?>
                            </div>
                        </div>
                    <?php endif ?>


                </div>
            </div>
            <div class="col-sm-3">
                <div class="book-now-form" id="book-now">
                    <h2>Book Now</h2>
                    <?php echo do_shortcode('[contact-form-7 id="243" title="Book Now"]')?>
                </div>
            </div>
        </div>
        <hr>
        <h2 class="text-center pb-3 mb-3 pt-2">Other Tours You Might Like</h2>
        <div class="slick-others">
            <?php
            global $post;
            $args = array('post__in' => array(89,92,96,97,279,287),"orderby"=>"id","order"=>"ASC",'posts_per_page' => -1);
            $myPosts = get_posts($args);
            foreach ($myPosts as $postItem) : setup_postdata($postItem);
                global $postLine;
                $postLine = $postItem;
            ?>
            <?php include "templates/product-item.php" ?>
            <?php endforeach; ?>
        </div>
    </div>


</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
