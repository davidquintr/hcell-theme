<?php
/**
 * Title: Benefits Services
 * Slug: benefits-services
 */
?>

<?php 
    $section = get_field("benefits");
    $title = $section["title"];  
    $description = $section["description"];
    $list_of_benefits = $section["list_of_benefits"];
    $enabled = $section["enable_benefits"];

    if ($enabled && $list_of_benefits) {
        $items = array();
        foreach ($list_of_benefits as $index => $benefit) {
            $icon = $benefit["icon"];
            $items["row-" . $index]= array(
                "field_6761d81906be0" => json_encode(array(
                    "family" => $icon->family,
                    "style" => $icon->style,
                    "id" => $icon->id,
                    "unicode" => $icon->hex,
                )),
                "field_6761d82e06be1" => $benefit["title"],
                "field_6761d83806be2" => $benefit["description"],
            );
        }
        
        $data = json_encode(array(
            "field_67663695e54d9" => "0",
            "field_6761d6c006bdf" => $items
        ));
        
    }
?>
<?php if ($enabled && $list_of_benefits): ?>
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide animated fadeIn delay-100ms" style="padding-top:64px;padding-bottom:64px">
    <h2 class="wp-block-heading has-text-align-center animated fadeInUp has-secondary-color has-text-color has-link-color" style="font-size:48px;font-style:normal;font-weight:700"><?php echo $title; ?></h2>
    <p class="has-text-align-center animated fadeIn delay-200ms has-foreground-color has-text-color has-link-color"><?php echo $description; ?></p>
    <!-- wp:tecnotool/horizontal-accordion {"name":"tecnotool/horizontal-accordion","data":<?php echo $data; ?>} /-->

<!-- /wp:group -->
<?php endif; ?>

