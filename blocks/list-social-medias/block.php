<?php 
    $social_medias = get_field('social_medias', 'option');
    $gap = get_field("gap");
    $show_tag = get_field("show_tag");

    $icons_style = get_field("icons_style");
    $icons_size = get_field("icons_size");

    $ON_BLOCK = "block";

?>

<?php if($social_medias): ?>
    <ul class="tecnoblock-social-medias" style="--gap: <?php echo $gap ?>px">
        <?php foreach($social_medias as $media): 
            $media_info = $media["social_media"];
            $media_label = $media_info["label"];
            $media_value = $media_info["value"];

            $media_link = $media["link"];
            $show_on = $media["show_on"];
        ?>
            <?php if(in_array($ON_BLOCK, $show_on)):?>
                <li class="tecnoblock-social-medias-item style-<?php echo $icons_style ?> <?php echo $show_tag ? "with-tag" : "" ?>" style="--padding: <?php echo $icons_size ?>px">
                    <a aria-label="<?php echo $media_label ?>" target="_blank" class="tecnoblock-social-medias-item-icon" href="<?php echo $media_link ?>">
                        <i style="--size: <?php echo $icons_size ?>px" class="<?php echo $media_value ?>"></i>
                        <?php if($show_tag): ?>
                            <span style="--size: <?php echo $icons_size ?>px"><?php echo $media_label ?></span>
                        <?php endif; ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach ?>
    </ul>
<?php endif ?>