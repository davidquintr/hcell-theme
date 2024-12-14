<?php 
    $social_medias = get_field('social_medias', 'option');
    $show_floating_menu = get_field("show_floating_menu", "option")
?>

<?php if($social_medias): ?>
    <ul class="tecnoblock-floating-menu">
        <?php foreach($social_medias as $media): 
            $media_info = $media["social_media"];
            $media_label = $media_info["label"];
            $media_value = $media_info["value"];

            $media_link = $media["link"];
        ?>
            <li class="tecnoblock-floating-menu-item">
                <a href="<?php echo $media_link ?>">
                    <i class="<?php echo $media_value ?>"></i>
                </a>
                <span><?php echo $media_label ?></span>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif ?>