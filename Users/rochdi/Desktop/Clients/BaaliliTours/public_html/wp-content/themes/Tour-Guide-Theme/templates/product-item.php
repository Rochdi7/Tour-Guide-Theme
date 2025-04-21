<?php
global $postLine;
$thumbnail = get_the_post_thumbnail_url($postLine->ID,'product_thumb');
?>
<div class="product-item" data-aos="fade-up">
    <a class="img-hover" href="<?php echo get_post_permalink($postLine->ID); ?>"><img src="<?php echo $thumbnail; ?>" alt="" class="img-fluid"></a>
    <h3><a href="<?php echo get_post_permalink($postLine->ID); ?>"><?php echo $postLine->post_title; ?></a></h3>
    <div class="item-footer d-flex align-items-center">
        <?php
        $duration = get_field('duration',$postLine->ID);
        ?>
        <?php if ($duration): ?>
            <div class="mr-auto duration-info">
                <i class="icon-clock"></i> <span class=""><?php echo $duration; ?></span>
            </div>
            <div class="justify-content-end">
                <a href="<?php echo get_post_permalink($postLine->ID); ?>" class="">Read more</a>
            </div>
        <?php else: ?>
            <div class="d-flex justify-content-center w-100">
                <a href="<?php echo get_post_permalink($postLine->ID); ?>" class="">Read more</a>
            </div>
        <?php endif ?>

    </div>
</div>