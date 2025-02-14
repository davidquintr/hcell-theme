<div class="tecnoblock-search-bar">
    <form role="search" class="tecnoblock-search-bar-form" action="<?php echo home_url('/'); ?>">
        <input required type="text" class="tecnoblock-search-bar-form-input" placeholder="<?php _e("Busque productos aquí", "tecnotool") ?>" name="s" />
        <button class="tecnoblock-search-bar-submit" type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
            <span>
                <?php _e('Buscar', 'tecnotool') ?>
            </span>
        </button>
    </form>
    <button aria-label="search" class="tecnoblock-search-bar-button on-actions" type="button">
        <i class="fa-solid fa-xmark"></i>
        <i class="fa-solid fa-magnifying-glass"></i>
    </button>
</div>
