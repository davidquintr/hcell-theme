<?php
$taxonomy = get_field('taxonomy');
$terms = get_terms(array(
    'taxonomy' => $taxonomy,
    'hide_empty' => false,
));

if (!empty($terms) && !is_wp_error($terms)) {
    ?>
    <ul class="tecnoblock-list-taxonomy">
        <?php foreach ($terms as $term) {
            $term_link = get_term_link($term);
            $thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);
            $thumbnail = $thumbnail_id ? wp_get_attachment_image_src($thumbnail_id, [128, 128]) : null;
            $image_url = $thumbnail ? $thumbnail[0] : get_template_directory_uri() . '/assets/images/no-image.webp';
            $show_on_block = get_term_meta($term->term_id, 'show_on_block', true);
            ?>
            <?php if($show_on_block): ?>
                <li class="tecnoblock-list-taxonomy-item">
                    <a href="<?php echo esc_url($term_link); ?>">
                        <img width="128" height="128" loading="lazy" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($term->name); ?>">
                    </a>
                </li>
            <?php endif; ?>
        <?php } ?>
    </ul>
    <?php
} else {
    echo '<p>No hay categorías de productos disponibles.</p>';
}
?>
