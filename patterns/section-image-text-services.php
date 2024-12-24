<?php
/**
 * Title: Section of Image with Text for Services
 * Slug: section-image-text-services
 */
?>

<?php 
    $image_sections_with_text = get_field("image_sections_with_text");
?>

<?php if(is_array($image_sections_with_text)): for($i = 0; $i < sizeof($image_sections_with_text); $i++): ?>
    <?php 
        $section = $image_sections_with_text[$i];
        $title = $section["title"];  
        $locate_title_at_the_top = $section["locate_title_at_the_top"];
        $position = $section["position"];
        $image = $section["image"];
        $description = $section["description"];
        ?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:64px;padding-bottom:64px"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group">

<?php if($locate_title_at_the_top): ?>
    <!-- wp:heading {"textAlign":"center","className":"animated fadeIn delay-100ms","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.35"}},"textColor":"secondary"} -->
    <h2 class="wp-block-heading has-text-align-center animated fadeIn delay-100ms has-secondary-color has-text-color has-link-color" style="font-size:48px;font-style:normal;font-weight:800;line-height:1.35"><?php echo $title ?></h2>
    <!-- /wp:heading -->
<?php endif; ?>
</div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center <?php echo $position == "right" ? "set-on-reverse" : "" ?>"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"16px"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">

<?php if(!$locate_title_at_the_top): ?>
    <!-- wp:heading {"textAlign":"left","className":"animated fadeIn delay-100ms","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.35"}},"textColor":"secondary"} -->
    <h2 class="wp-block-heading has-text-align-left animated fadeIn delay-100ms has-secondary-color has-text-color has-link-color" style="font-size:48px;font-style:normal;font-weight:800;line-height:1.35"><?php echo $title ?></h2>
    <!-- /wp:heading -->
<?php endif; ?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeIn delay-200ms" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
    <?php echo $description; ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":66,"sizeSlug":"full","linkDestination":"none","className":"animated fadeInRight","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border animated fadeIn<?php echo $position == "right" ? "Left" : "Right" ?>"><img src="<?php echo $image["sizes"]["medium_large"] ?>" alt="" class="wp-image-66" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<?php endfor; endif; ?>
