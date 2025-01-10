<?php 

function mainstyle_enqueue() {
    wp_enqueue_style( 'mytheme-other-styles', get_template_directory_uri() . '/main.css' );
}
add_action( 'wp_enqueue_scripts', 'mainstyle_enqueue' );

?>