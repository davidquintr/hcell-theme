<?php

$current_category = get_queried_object();

if ($current_category && is_a($current_category, 'WP_Term')) {
    $featured_image = get_field('featured_image', $current_category);
    $height_block = get_field('height');

    if ($featured_image) {
        ?>
        <img class="tecnoblock-taxonomy-featured-image" style="--height: <?php echo $height_block ?>px" src="<?php echo esc_url($featured_image['url']); ?>" alt="<?php echo esc_attr($featured_image['alt']); ?>">
        <?php
    } <?php
}
?>