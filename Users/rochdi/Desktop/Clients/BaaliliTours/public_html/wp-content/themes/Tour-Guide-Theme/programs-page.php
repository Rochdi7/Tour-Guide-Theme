<?php
/*
Template Name: Programs List Page
Template Post Type: page
*/

get_header();
while ( have_posts() ) : the_post();
endwhile; // End of the loop. ?>
<?php
$header_background_image = get_field('header_background_image');
?>
<div class="page-top-header" style=" <?php echo ($header_background_image)?"background-image:url('".$header_background_image['url']."')":'' ?>">
    <h1 class="main-title"><?php the_title(); ?></h1>
</div>
<?php if( have_rows('page_slider') ): ?>
    <div class="page-slider-container">
        <div class="container">
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

<div class="section-programmes">
    <div class="container">
        <div class="section-description"  data-aos="fade-up">
            <?php the_content(); ?>
        </div>
        <div class="row">
            <?php if (get_field('programs')): ?>
                <?php foreach (get_field('programs') as $key => $line) :
                    global $postLine;
                    $postLine = $line;
                    ?>
                    <div class="col-sm-4">
                        <?php include "templates/product-item.php" ?>
                    </div>
                <?php endforeach; ?>
            <?php endif ?>

        </div>

    </div>
</div>


<?php if (get_the_ID()===25): ?>
<div class="section-why">
    <div class="container">
        <h2 class="main-title">Why Book With Us ?</h2>
        <div class="row">
            <div class="col-sm-4">
                <div class="why-item">
                    <span>1</span>
                    <h3>Personalized Travel Services</h3>
                    <p>
                        No matter what your expectations are from the trip, at Baalili Tours, we will design an ideal itinerary for you, which will cover all your requirements.
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="why-item">
                    <span>2</span>
                    <h3>Response within 24 hours</h3>
                    <p>
                        We understand how important it is to get everything on time to plan appropriately for the trip. Therefore, we ensure to respond to your queries within 24 hours business day.
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="why-item">
                    <span>3</span>
                    <h3>Transparent Pricing</h3>
                    <p>
                        Our chief aim is to make sure that our customers trust us. That is why there will never be extra charges or hidden fees for our customers.
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="why-item">
                    <span>4</span>
                    <h3>High-Quality Service</h3>
                    <p>
                        We want clients, who use our service, come back to us again. For us, the comfort of our clients is the most important, that is why we believe in providing the best quality to our clients.
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="why-item">
                    <span>5</span>
                    <h3>Customer Service 24/7</h3>
                    <p>
                        Our customer service team is available 24/7 on the call. This ensures that we will handle any emergency, which comes up during your Morocco tour. Moreover, we do our best to respond to emails as soon as we get them.
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="why-item">
                    <span>6</span>
                    <h3>Over 21years of Travel Expertise</h3>
                    <p>
                        Our knowledge and experience in the Travel field make sure that we design the best private tours for you
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
<?php endif ?>


<!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
