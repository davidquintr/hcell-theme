<?php 
    $show_first_element_open = get_field("show_first_element_open");
    $one_element_at_time = get_field("one_element_at_time");
    $accordion_name = get_field("accordion_name");
    $accordion_elements = get_field("accordion_elements");
    $enable_background_image = get_field("enable_background_image");
?>

<?php if ($accordion_elements): ?>
<ul class="tecnoblock-accordion-horizontal">
    <?php for ($i = 0; $i < sizeof($accordion_elements); $i++): ?>
        <?php
            $accordion_item = $accordion_elements[$i];
            $background = $accordion_item["background"];
        ?>
        <li class="tecnoblock-accordion-horizontal-item <?php echo $i == 0 ? "active" : ""; ?>" <?php echo $enable_background_image ? 'style="--background: url(' . $background . ')"' : ''; ?>>
            <div class="tecnoblock-accordion-horizontal-item-title">
                <i class="<?php echo $accordion_item["icon"]; ?>"></i>
                <span><?php echo esc_html($accordion_item["title"]); ?></span>
            </div>
            <div class="tecnoblock-accordion-horizontal-item-content">
                <?php echo $accordion_item["description"]; ?>
            </div>
        </li>
    <?php endfor; ?>
</ul>
<?php else: ?>
    <p>No hay elementos en el accordion.</p>
<?php endif; ?>
