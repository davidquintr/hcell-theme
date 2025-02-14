<form role="search" class="tecnoblock-search-bar" action="<?php echo home_url('/'); ?>">
    <input required type="text" class="tecnoblock-search-bar-input" placeholder="<?php _e("Busque productos aquí", "tecnotool") ?>" name="s" />
    <button class="tecnoblock-search-bar-button" type="submit">
        <i class="fa-solid fa-magnifying-glass"></i>
        <span>
            <?php _e('Buscar', 'tecnotool') ?>
        </span>
    </button>
</form>