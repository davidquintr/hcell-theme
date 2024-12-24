<?php 
    $list_elements = get_field('list_elements');
    $is_two_cols_list = get_field("is_two_cols_list");
    $gap = get_field("gap");

    $font_size = get_field("font_size");
    $icon_size = get_field("icon_size");
?>

<?php if($list_elements): ?>
    <ul class="tecnoblock-icons-list <?php echo $is_two_cols_list ? "two-cols-ver" : "" ?>" style="--gap: <?php echo $gap ?>px">
        <?php foreach($list_elements as $element): 
            $icon = $element["icon"];
            $text = $element["text"];
            $enable_url = $element["enable_url"];
            $url = $element["url"];
        ?>
            <li class="tecnoblock-icons-list-item">
                <?php if($enable_url): ?>
                    <a class="tecnoblock-icons-list-item-link" target="_blank" <?php echo $enable_url ? 'href="' . $url . '"' : "" ?>>
                <?php else: ?>
                    <div class="tecnoblock-icons-list-item-link">
                <?php endif; ?>
                        <i style="--size: <?php echo $icon_size ?>px" class="<?php echo $icon ?>"></i>
                        <span style="--size: <?php echo $font_size ?>px"><?php echo $text ?></span>
                <?php if($enable_url): ?>
                    </a>
                <?php else: ?>
                    </div>
                <?php endif; ?>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif ?>