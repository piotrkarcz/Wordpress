<?php

function wp_restrict_admin() {
    if ( is_admin() && ! current_user_can( 'administrator' ) && ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
        wp_die( __('Only for admin') );
    }
}
add_action( 'admin_init', 'wp_restrict_admin', 1 );

?>
