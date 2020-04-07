<?php

function collectiu_register_settings() {
    add_option( 'myplugin_option_name', 'This is my option value.');
    register_setting( 'myplugin_options_group', 'myplugin_option_name', 'myplugin_callback' );
}
add_action('admin_init', 'collectiu_register_settings');

function collecti_register_options_page() {
    add_menu_page('Informació de col·lectiu', 'Col·lectiu', 'manage_options', 'collectiu_info', 'collectiu_options_page', '', 61);
}
add_action('admin_menu', 'collecti_register_options_page');

function collectiu_options_page() {
    include 'collectiu-page.php';
}