<?php
/**
 * Title: Info in Cols Services
 * Slug: info-in-cols-services
 */
?>
<?php 
    $info_in_cols = get_field("info_in_cols");
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0","top":"64px","bottom":"64px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:64px;padding-right:0;padding-bottom:64px;padding-left:0"><!-- wp:columns {"align":"wide","className":"animated fadeInUp","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"},"blockGap":{"top":"16px","left":"16px"},"margin":{"top":"0rem","bottom":"0rem"}},"border":{"radius":"40px"}},"backgroundColor":"contrast"} -->
<div class="wp-block-columns alignwide animated fadeInUp has-contrast-background-color has-background" style="border-radius:40px;margin-top:0rem;margin-bottom:0rem;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px">

<?php foreach($info_in_cols as $info): ?>
    <?php 
        $title = $info["title"];
        $description = $info["description"];
    ?>
    <!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"right":"32px","left":"32px","top":"32px","bottom":"132x"},"blockGap":"16px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group has-background-background-color has-background" style="border-radius:24px;min-height:100%;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"large"} -->
    <h4 class="wp-block-heading has-secondary-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:700"><?php echo $title ?></h4>
    <!-- /wp:heading -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <?php echo $description ?>
    </div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->
<?php endforeach ?>
</div>
<!-- /wp:columns --></div>
<!-- /wp:group -->