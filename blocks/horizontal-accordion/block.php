<?php 
    $show_first_element_open = get_field("show_first_element_open");
    $one_element_at_time = get_field("one_element_at_time");
    $accordion_name = get_field("accordion_name");
    $accordion_elements = get_field("accordion_elements");

?>
<?php if($accordion_elements): ?>
<ul class="tecnoblock-accordion-horizontal">
    <?php for($i = 0 ; $i < sizeof($accordion_elements); $i++): ?>
        <?php
            $accordion_item = $accordion_elements[$i];
        ?>
        <li class="tecnoblock-accordion-horizontal-item">
            <div class="tecnoblock-accordion-horizontal-item-title">
                <i class="<?php echo $accordion_item["icon"] ?>"></i>
                <span><?php echo esc_html($accordion_item["title"]) ?></span>
            </sdiv>
            <div class="tecnoblock-accordion-horizontal-item-content">
                <?php echo $accordion_item["description"] ?>
            </div>
        </li>
    <?php endfor ?>
</ul>
<?php else: ?>
    <p>No hay elementos en el accordion.</p>
<?php endif; ?>
