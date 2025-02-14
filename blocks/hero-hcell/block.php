<section class="tecnoblock-hero-hcell">
    <div class="tecnoblock-hero-hcell-inner">
        <span class="hero-background" style="--bg: url('<?php echo get_template_directory_uri() . '/assets/images/hero/background.webp'; ?>')"></span>
        <?php
            $product_id = get_field('promotional_product');
            $page_name = get_field("store_name");
            $cta_text = get_field("cta_text");

            if (is_array($product_id) && isset($product_id[0])) {
                $product_id = (int) $product_id[0];
            }

            if ($product_id > 0) {
                $product_title = get_the_title($product_id);
                $product_permalink = get_permalink($product_id);
                $promotional_image = get_field('promotional_image', $product_id);
            ?>

            <?php if($promotional_image): ?>
            <div class="tecnoblock-hero-hcell-inner-content">
                <h1 class="title"><?php echo esc_html( $page_name ) ?></h1>
                <div class="product-info">
                    <div class="product-info-details">
                        <h2 class="product-title"><?php echo esc_html($product_title); ?></h2>
                        <p><?php echo esc_html( $cta_text) ?> </p>
                    </div>
                    <a href="<?php echo esc_url($product_permalink); ?>" class="product-info-link">
                        <span><?php _e("Ver en la Tienda", "tecnotool") ?></span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="tecnoblock-hero-hcell-inner-promotional">
                <img src="<?php echo esc_url($promotional_image["url"]); ?>" alt="<?php echo esc_attr($product_title); ?>">
            </div>
            <?php else: ?>
                <p>Alerta: La imagen promocional no existe, de querer mostrar este producto, debe agregar la imagen promocional</p>
            <?php endif; ?>
            <?php
        }
        ?>
    </div>
</section>
