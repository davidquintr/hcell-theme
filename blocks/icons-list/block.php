<?php 
    $list_elements = get_field('list_elements');
    $is_two_cols_list = get_field("is_two_cols_list");
    $gap = get_field("gap");
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
                <a class="tecnoblock-icons-list-item-link" target="_blank" <?php echo $enable_url ? 'href="' . $url . '"' : "" ?>>
                    <i class="<?php echo $icon ?>"></i>
                    <span><?php echo $text ?></span>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
<?php endif ?>