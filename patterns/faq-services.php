<?php
/**
 * Title: FAQ Services
 * Slug: faq-services
 */
?>
<?php 
    $section = get_field("faqs_section");
    $enable = $section["enable_faqs"];
    $faqs = $section["faqs"];

    if ($enable && $faqs) {
        $items = array();
        foreach($faqs as $index => $faq) {  
            $items["row-" . $index] = array(
                "field_675d348ab33d8" => $faq["title"],
                "field_675d3496b33d9" => $faq["description"]
            );
        }
        $data = json_encode(array(
            "field_675d3502f3289" => "1",
            "field_675d352df328a" => "1",
            "field_675d355ff328b" => "faqs",
            "field_675d363835624" => "{\"family\":\"classic\",\"style\":\"solid\",\"id\":\"minus\",\"label\":\"Minus\",\"unicode\":\"f068\"}",
            "field_675d367735625" => "{\"family\":\"classic\",\"style\":\"solid\",\"id\":\"plus\",\"label\":\"Plus\",\"unicode\":\"2b\"}",
            "field_675d346eb33d7" => $items,
            "align" => "wide",
            "mode" => "preview"
        ));
    }
?>

<?php if ($enable && $faqs): ?>
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide animated fadeIn delay-100ms" style="padding-top:64px;padding-bottom:64px">
    <!-- wp:pattern {"slug":"we-solve-services"} /-->
    <!-- wp:tecnotool/accordion {"name":"tecnotool/accordion","data":<?php echo $data; ?>} /-->
</div>
<!-- /wp:group -->
<?php endif; ?>
