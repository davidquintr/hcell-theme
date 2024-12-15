<?php 
    $show_first_element_open = get_field("show_first_element_open");
    $one_element_at_time = get_field("one_element_at_time");
    $accordion_name = get_field("accordion_name");
    $open_accordion_icon = get_field("open_accordion_icon");
    $closed_accordion_icon = get_field("closed_accordion_icon");
    $accordion_elements = get_field("accordion_elements");

?>
<?php if($accordion_elements): ?>
<div class="tecnoblock-accordion">
    <?php for($i = 0 ; $i < sizeof($accordion_elements); $i++): ?>
        <?php
            $accordion_item = $accordion_elements[$i];

            $conditional_open = "";
            if($show_first_element_open && $i == 0) {
                $conditional_open = "open";
            }

            $conditional_name = "";
            if($one_element_at_time) {
                $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', iconv('UTF-8', 'ASCII//TRANSLIT', $accordion_name)), '-'));
                $conditional_name = 'name="'. $slug .'"';
            }
        ?>
        <details <?php echo $conditional_name ?> class="tecnoblock-accordion-item" <?php echo $conditional_open ?> >
            <summary class="tecnoblock-accordion-item-title">
                <span><?php echo esc_html($accordion_item["title"]) ?></span>
                <i class="<?php echo $open_accordion_icon ?> open-icon"></i>
                <i class="<?php echo $closed_accordion_icon ?> closed-icon"></i>
            </summary>
            <div class="tecnoblock-accordion-item-content">
                <?php echo $accordion_item["content"] ?>
            </div>
        </details>
    <?php endfor ?>
</div>
<?php else: ?>
    <p>No hay elementos en el accordion.</p>
<?php endif; ?>
