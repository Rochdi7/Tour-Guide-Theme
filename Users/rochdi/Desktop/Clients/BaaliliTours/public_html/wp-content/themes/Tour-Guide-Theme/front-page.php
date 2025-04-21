<?php
/**
 * Page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Travel_Agency
 * @since Travel Agency 1.0
 */

get_header();
while ( have_posts() ) : the_post();
endwhile; // End of the loop. ?>

<div class="main-slider" data-aos="fade">
    <div id="main-home-slider">
        <?php

        // check if the repeater field has rows of data
        if( have_rows('slider') ):
            // loop through the rows of data
            while ( have_rows('slider') ) : the_row();
                ?>
                <div class="home-slide">
                    <h2><?php the_sub_field('slide_title'); ?></h2>
                    <img src="<?php echo (get_sub_field('slide_image'))['sizes']['slide']; ?>" alt="">
                </div>
                <?php
            endwhile;
        endif;
        ?>

    </div>
    <a href="#" class="slider-arrow arrow-prev" onclick="return false;" id="arrow_left"><i class="icon-arrow_back_ios"></i></a>
    <a href="#" class="slider-arrow arrow-next" onclick="return false;" id="arrow_right"><i class="icon-arrow_forward_ios"></i></a>
</div>
<div class="section-programmes">
    <h2 class="main-title"><?php the_title(); ?></h2>
    <div class="container">
        <div class="section-description"  data-aos="fade-up">
            <?php the_content(); ?>
        </div>
        <div class="row">
            <?php
            foreach (get_field('morocco_tours') as $key => $line) :
                global $postLine;
                $postLine = $line;
                ?>
                <div class="col-sm-4">
                    <?php include "templates/product-item.php" ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="btn-more-container">
            <a href="<?php echo get_permalink(176); ?>" class="btn-more">View All Tours</a>
        </div>
    </div>
</div>
<div class="section-about d-flex">
    <div class="w-50 content-about" data-aos="fade-right">
        <h2>Morocco</h2>
        Morocco is situated at the intersection of Europe and Africa. The country is full of people from diverse backgrounds and cultures, like Berbers, Romans, Spanish, French, Arabs, and Portuguese. Morocco offers several wonderful historical and cultural experiences to the people visiting the country. These experiences include impressive mountain ranges, magnificent cities, widespread deserts, beautiful beaches, and much more.<br>
Among the magnificent cities Marrakech which is known as the Red City and is famous for its old medina, several souks, and ancient sites like The Saadian Tombs, El Badi Palace, etc. For more fun, you can visit Marrakesh, which is a former imperial city and a key economic center filled with gardens, mosques, and palaces. All this makes Morocco the best country to travel to and attracts tourists from all over the world.

    </div>
    <div class="img-about w-50" style="background-image: url('/wp-content/uploads/2020/06/1.jpg'); background-repeat: no-repeat; -webkit-background-size: cover;background-size: cover; background-position: center center;" data-aos="fade-left">
    </div>

</div>

    <div class="section-programmes">
        <h2 class="main-title" data-aos="fade-up">DAY TRIPS</h2>
        <div class="container">
            <div class="section-description" data-aos="fade-up">
                Baalili Tours provides well-known day trips to some of the most amazing spots in High Atlas Mountains. You get to visit the Ourika valley and Toubkal area and have a look at genuine Berber villages’ homes, meeting individuals, and finding out about their way of life and culture. You can also visit coastal city Essaouira to get away from the clamor of Marrakech or visit the serene Sahara Ouarzazate and many more such places.
            </div>
            <div class="row">
                <?php
                foreach (get_field('day_trips') as $key => $line) :
                    global $postLine;
                    $postLine = $line;
                    ?>
                    <div class="col-sm-4">
                        <?php include "templates/product-item.php" ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="btn-more-container">
                <a href="<?php echo get_permalink(180); ?>" class="btn-more">View All Day Trips</a>
            </div>
        </div>
    </div>

    <div class="section-programmes">
        <h2 class="main-title" data-aos="fade-up">ACTIVITIES</h2>
        <div class="container">
            <div class="section-description" data-aos="fade-up">
                Baalili Tours arranges certain cultural activities for travelers, like, henna ceremony, Camel Ride and Quad Ride in the Palm grove, Hammam Massage, Cooking Classes, and many more. These exercises make travelers aware of the rich traditions and customs in Morocco.
            </div>
            <div class="row">
                <?php
                foreach (get_field('activities') as $key => $line) :
                    global $postLine;
                    $postLine = $line;
                    ?>
                    <div class="col-sm-4">
                        <?php include "templates/product-item.php" ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="btn-more-container">
                <a href="<?php echo get_permalink(184); ?>" class="btn-more">View All Activities</a>
            </div>
        </div>
    </div>

    <div class="section-about-scrollable" data-aos="fade-up" style="background-image: url('/wp-content/uploads/2020/06/WhoWeAre.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <h2>Who are we?</h2>
                    <div class="content">
                        At Baalili Tours, we are prepared to take care of all your business travel requirements. No matter how many people are there in your FIT's, or groups and corporate Tours, we assure you that we will handle everything. Our dedicated team of experts is ready to serve you. We are committed to guaranteeing our customers remain our top priority by offering outstanding, reliable, and customized service. We are a well-known tour company, which believes in continuously providing the best services to retain our existing customers and gain new customers.
                    </div>
                    <div class="text-center mt-3">
                        <a href="<?php echo get_permalink(25); ?>" class="btn-more">More Information</a>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>

        </div>
    </div>

    <div class="section-programmes">
        <h2 class="main-title" data-aos="fade-up">M.I.C.E IN MOROCCO</h2>
        <div class="container">
            <div class="section-description" data-aos="fade-up">
                As an Arab country, Morocco is still known to be extremely tolerant, safe, and liberal. The country has people from all faiths living together peacefully and with mutual respect. Even though the country looks extremely small on the map, it still has a lot to offer and various diverse places to visit. The people of Morocco are known for their warm hospitality and kind nature. Therefore, many international companies choose Morocco for their MICEs, official events, and business conferences. Not only Morocco is a beautiful country with friendly people, but the country is also the best bet due to the modern outlook and professionalism of its people. <br>
Morocco has well-connected airports, a good transportation system, and numerous accommodation options, and also offers several programs and productive activities, which are the best when it comes to building team spirit between the employees. Marrakech is the top favorite when it comes to choosing a destination for holding MICE for your employees. In 2018, the city has been declared “Best International MICE Destination” (Meetings, Incentives, Conferencing, Exhibitions) at the third IBTA (Iberian Business Travel Association). This recognition reinforces Marrakech’s position as a key player when it comes to business tourism, highlighting the proficiency, and the continuous efforts of Tour companies like Baalili Tours who have a huge role when it comes to arranging the best MICEs in Marrakech. Not only MICEs in Marrakech; at Baalili Tours, we are highly experienced when it comes to handling any event across Morocco, and we assure you that you will always get the best service. All you need to do is provide us the profile of your group and your expectations, and we will design a creative program for you, which will meet your expectations and make your event a success.

            </div>
            <div class="row">
                <?php
                foreach (get_field('mice') as $key => $line) :
                    global $postLine;
                    $postLine = $line;
                    ?>
                    <div class="col-sm-4">
                        <?php include "templates/product-item.php" ?>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

<!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
