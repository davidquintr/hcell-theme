<?php
/**
 * Title: Benefits Services
 * Slug: benefits-services
 */
?>

<?php 
    $section = get_field("benefits");
    $title = $section["title"];  
    $locate_title_at_the_top = $section["locate_title_at_the_top"];
    $position = $section["position"];
    $image = $section["image"];
    $benefits = $section["benefits"];


?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:64px;padding-bottom:64px">

<?php if($locate_title_at_the_top): ?>
    <!-- wp:heading {"textAlign":"center","className":"animated fadeIn delay-100ms","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.35"}},"textColor":"secondary"} -->
    <h2 class="wp-block-heading has-text-align-center animated fadeIn delay-100ms has-secondary-color has-text-color has-link-color" style="font-size:48px;font-style:normal;font-weight:800;line-height:1.35"><?php echo $title ?></h2>
    <!-- /wp:heading -->
<?php endif; ?>

<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center <?php echo $position == "right" ? "set-on-reverse" : "" ?>"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"16px"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">

<?php if(!$locate_title_at_the_top): ?>
    <!-- wp:heading {"className":"animated fadeIn delay-100ms","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.35"}},"textColor":"secondary"} -->
    <h2 class="wp-block-heading animated fadeIn delay-100ms has-secondary-color has-text-color has-link-color" style="font-size:48px;font-style:normal;font-weight:800;line-height:1.35"><?php echo $title ?></h2>
    <!-- /wp:heading -->
<?php endif; ?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeIn delay-200ms" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
    <?php 
        $items = array();
        foreach($benefits as $index => $benefit) {
            $items["6768dd5e8fa68_" . $index] = array(
                "field_67606f2e5ef0f" => "{\"family\":\"classic\",\"style\":\"solid\",\"id\":\"check\",\"label\":\"Check\",\"unicode\":\"f00c\"}",
                "field_67606f435ef10" => $benefit["elemento"],
                "field_67606f615ef11" => "0"
            );
        }
        $data = json_encode(array(
            "field_67606fb25ef13" => "0",
            "field_67606fdb2796b" => "4",
            "field_676269f974b25" => "16",
            "field_67626a1974b26" => "20",
            "field_67606f075ef0e" => $items,
            "mode" => "preview"
        ));
    ?>

    <!-- wp:tecnotool/icons-list {"name":"tecnotool/icons-list","data":<?php echo $data; ?>} /-->

</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":128,"sizeSlug":"full","linkDestination":"none","className":"animated fadeInRight","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border animated fadeIn<?php echo $position == "right" ? "Left" : "Right" ?>  "><img src="<?php echo $image["sizes"]["medium_large"] ?>" alt="" class="wp-image-128" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
 