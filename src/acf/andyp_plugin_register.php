<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'Page Builder - YT Lite',
        'icon'      => 'youtube',
        'color'     => '#FF80AB',
        'path'      => __FILE__,
    ]);
} );