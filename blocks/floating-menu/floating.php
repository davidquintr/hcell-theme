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
        ?>
            <li class="tecnoblock-floating-menu-item">
                <a class="">
                    <i class="<?php echo $media_value ?>"></i>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif ?>