<div class="tecnoblock-user-system">
    <?php 
        $current_user = wp_get_current_user();
        $user_avatar = get_avatar_url($current_user->ID);
        $user_icon = $user_avatar ? $user_avatar : get_template_directory_uri() . '/assets/images/user-placeholder.webp';
        $login_url = wc_get_page_permalink('myaccount');
        $my_account_url = wc_get_account_endpoint_url('dashboard');
        $href = is_user_logged_in() ? $my_account_url : $login_url;
    ?>
    <a class="tecnoblock-user-system-button" href="<?php echo $href; ?>">
        <img width="24" height="24" alt="user-icon" src="<?php echo $user_icon ?>" />
        <span>
        <?php 
            if (is_user_logged_in()) {
                $username = $current_user->user_login ? $current_user->user_login : $current_user->user_email;
                echo substr($username, 0, 16);
            } else {
                echo "Iniciar sesión";
            }
        ?>
        </span>

    </a>
</div>
