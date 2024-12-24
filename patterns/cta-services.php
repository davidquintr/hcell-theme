<?php
/**
 * Title: CTA Services
 * Slug: cta-services
 */
?>
<?php 
    $cta = get_field("cta");
    $title = $cta["title"];
    $description = $cta["description"];
?>
<!-- wp:group {"align":"wide","className":"animated fadeIn slow","style":{"spacing":{"padding":{"left":"16px","right":"16px","top":"64px","bottom":"64px"},"blockGap":"8px"},"border":{"radius":"16px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide animated fadeIn slow has-primary-background-color has-background" style="border-radius:16px;padding-top:64px;padding-right:16px;padding-bottom:64px;padding-left:16px;margin-top:64px;"><!-- wp:heading {"textAlign":"center","className":"animated fadeIn delay-200ms","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"background","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center animated fadeIn delay-200ms has-background-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:700"><?php echo $title ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"animated fadeIn delay-500ms","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated fadeIn delay-500ms has-background-color has-text-color has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0; text-align: center;">
    <?php echo $description ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->