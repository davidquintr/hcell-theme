<?php
/**
 * Title: Hero Services
 * Slug: hero-services
 */

 $hero = get_field("hero");
 $title = $hero["title"];
 if(isset($hero["description"])) {
    $description = $hero["description"];
 }
 $image = $hero["image"];

?>


<!-- wp:group {"align":"wide","style":{"dimensions":{"minHeight":"90vh"},"spacing":{"padding":{"top":"48px","bottom":"48px","left":"0","right":"0"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","orientation":"horizontal","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="min-height:90vh;margin-top:0px;margin-bottom:0px;padding-top:48px;padding-right:0;padding-bottom:48px;padding-left:0"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"0px","left":"0px"},"blockGap":{"top":"32px","left":"32px"}}}} -->
<div class="wp-block-columns" style="padding-right:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group">

<?php if($image): ?>
    <!-- wp:image {"id":124,"width":"768px","height":"auto","sizeSlug":"large","linkDestination":"none"} -->
    <figure class="wp-block-image size-large is-resized"><img src="<?php echo $image["sizes"]["medium_large"] ?>" alt="<?php echo $image["title"] ?>" class="wp-image-124" style="width:768px;height:auto"/></figure>
    <!-- /wp:image -->
<?php endif; ?> 

</div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"64px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.35"}},"textColor":"secondary"} -->
<h1 class="wp-block-heading has-secondary-color has-text-color has-link-color" style="font-size:64px;font-style:normal;font-weight:800;line-height:1.35"><?php echo $title ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    <?php if(isset($hero["description"])): ?>
        <?php echo $description; ?>
    <?php endif; ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->