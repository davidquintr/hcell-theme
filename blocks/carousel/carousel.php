<?php 
$FULL_SLUG = "full";
$elements = get_field("simple_carousel_elements");
$images_quality = get_field("images_quality");
$allow_advanced_info = get_field("allow_advanced_info");
$allow_automatic_movement = get_field("allow_automatic_movement");
$movement_ms = get_field("movement_ms");
$aspect_ratio = get_field("aspect_ratio");

if (is_array($elements)): 
?>

<div class="tecnoblock-carousel">
    <ul class="tecnoblock-carousel-slider"
        <?php if($allow_automatic_movement): ?>
            automovement="<?php echo $movement_ms ?>ms"
        <?php endif; ?>
        >
        <?php foreach($elements as $element): ?>
            <li class="tecnoblock-carousel-slider-item" style="--aspect-ratio: <?php echo $aspect_ratio ?>">
                <?php
                    $image_data = $element["image"];
                    if($allow_advanced_info) {
                        $advanced_info = $element["advanced_info"];
                    }
                    
                    if ($images_quality == $FULL_SLUG) {
                        $image_src = $image_data['url'];
                    } else {
                        $image_src = isset($image_data['sizes'][$images_quality]) ? $image_data['sizes'][$images_quality] : $image_data['url'];
                    }

                    $image_title = $image_data["title"];
                    $image_alt = $image_data["alt"];
                ?>
                <img src="<?php echo esc_url($image_src); ?>" alt="<?php echo esc_attr($image_alt); ?>" title="<?php echo esc_attr($image_title); ?>" />
                
                <?php if($allow_advanced_info):  ?>
                    <div class="inner-advanced-info">
                        <h3><?php echo $advanced_info["title"] ?></h3>
                        <div>
                            <?php echo $advanced_info["description"] ?>
                        </div>
                    </div>
                <?php endif; ?>
            </li>
        <?php endforeach ?>
    </ul>
    
    <div class="tecnoblock-carousel-counter">
    <?php for ($i = 0; $i < count($elements); $i++): ?>
        <button class="tecnoblock-carousel-counter-item"></button>
    <?php endfor; ?>
    </div>
</div>

<?php else: ?>
    <p>No hay elementos en el carrusel.</p>
<?php endif; ?>
