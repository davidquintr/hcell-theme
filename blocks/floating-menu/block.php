<?php 
    $social_medias = get_field('social_medias', 'option');
    $show_floating_menu = get_field("show_floating_menu", "option");
    
    $visuals_floating_menu = get_field("visuals_floating_menu", "option");

    $show_tag_on_hover = $visuals_floating_menu["show_tag_on_hover"];
    $menu_location = $visuals_floating_menu["menu_location"];
    $ON_BLOCK = "floating";
?>

<?php if($social_medias): ?>
    <ul class="tecnoblock-floating-menu <?php echo 'location-' . $menu_location  ?>">
        <?php foreach($social_medias as $media): 
            $media_info = $media["social_media"];
            $media_label = $media_info["label"];
            $media_value = $media_info["value"];
            $media_link = $media["link"];
            $show_on = $media["show_on"];
        ?>
            <?php if(in_array($ON_BLOCK, $show_on)):?>
                <li class="tecnoblock-floating-menu-item">
                    <a aria-label="<?php echo $media_label ?>" target="_blank" class="tecnoblock-floating-menu-item-icon" href="<?php echo $media_link ?>">
                        <i class="<?php echo $media_value ?>"></i>
                    </a>
                    <?php if($show_tag_on_hover): ?>
                        <div class="label <?php echo 'location-' . $menu_location  ?>">
                            <span ><?php echo $media_label ?></span>
                        </div>
                    <?php endif; ?>
                </li>
            <?php endif; ?>
        <?php endforeach ?>
    </ul>
<?php endif ?>