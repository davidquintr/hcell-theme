<?php
    global $product;
?>

<li class="tecnoblock-custom-product-item">
    <a href="<?php echo get_permalink($product->get_id()); ?>" class="tecnoblock-custom-product-item-anchor">
        <div class="tecnoblock-custom-product-item-anchor-meta">
            <span><?php echo strip_tags(wc_get_product_category_list($product->get_id())); ?></span>
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="tecnoblock-custom-product-item-anchor-featured-image">
            <picture class="tecnoblock-custom-product-item-anchor-featured-image-protector">
            <?php if (has_post_thumbnail($product->get_id())) : ?>
                <?php 
                $thumbnail_id = get_post_thumbnail_id($product->get_id());
                $thumbnail = wp_get_attachment_image_src($thumbnail_id, [256, 256]); 
                ?>
                <img loading="lazy" src="<?php echo esc_url($thumbnail[0]); ?>" alt="<?php echo esc_attr(get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true)); ?>" title="<?php echo esc_attr(get_the_title($thumbnail_id)); ?>" width="256" height="256" />
            <?php endif; ?>
            </picture>
        </div>
    </a>
    <div class="tecnoblock-custom-product-item-buy">
        <span><?php echo $product->get_price_html(); ?></span>
        <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="button">
            <span><?php _e("Agregar al Carrito", "tecnotool"); ?></span>
        </a>
    </div>
</li>
