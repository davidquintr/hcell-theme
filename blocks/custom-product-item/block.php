<?php
    global $product;
    $taxonomy    = 'product_brand';
    $brand_names = wp_get_post_terms( $product->get_id(), $taxonomy, array( 'fields' => 'names' ) );
?>

<li class="tecnoblock-custom-product-item">
    <a href="<?php echo get_permalink($product->get_id()); ?>" class="tecnoblock-custom-product-item-anchor">
        <div class="tecnoblock-custom-product-item-anchor-meta">
            <span class="brand">
                <?php 
                if ( ! empty( $brand_names ) && ! is_wp_error( $brand_names ) ) {
                    echo implode( ', ', array_map( 'esc_html', $brand_names ) );
                }
                ?>
            </span>
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="tecnoblock-custom-product-item-anchor-featured-image">
            <picture class="tecnoblock-custom-product-item-anchor-featured-image-protector">
            <?php if (has_post_thumbnail($product->get_id())) : ?>
                <?php 
                $thumbnail_id = get_post_thumbnail_id($product->get_id());
                $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'medium'); 
                ?>
                <img loading="lazy" src="<?php echo esc_url($thumbnail[0]); ?>" alt="<?php echo esc_attr(get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true)); ?>" title="<?php echo esc_attr(get_the_title($thumbnail_id)); ?>" width="256" height="256" />
            <?php endif; ?>
            </picture>
        </div>
    </a>
    <div class="tecnoblock-custom-product-item-buy">
        <div class="tecnoblock-custom-product-item-buy-meta">
            <span class="category"><?php echo strip_tags(wc_get_product_category_list($product->get_id())); ?></span>
            <span class="price"><?php echo $product->get_price_html(); ?></span>
        </div>
        <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="button">
            <span><?php _e("Agregar al Carrito", "tecnotool"); ?></span>
        </a>
    </div>
</li>
