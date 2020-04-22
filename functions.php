<?php

//My includes
add_action('after_setup_theme', 'setup_theme');
add_action( 'widgets_init', 'register_my_widgets' );

include(get_theme_file_path('/lib/setup.php')); // include theme_support - add menu
include(get_theme_file_path('/lib/custom-nav-walker.php'));

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

defined('THEME_TD') ? THEME_TD : define('THEME_TD', 'our-way-tours');

// Load modules

$theme_includes = [
    '/lib/enqueue-scripts.php', // Enqueue styles and scripts
];

foreach ($theme_includes as $file) {
    if (!$filepath = locate_template($file)) {
        continue;
        trigger_error(
            sprintf(__('Error locating %s for inclusion', THEME_TD), $file),
            E_USER_ERROR
        );
    }

    include_once $filepath;
}
unset($file, $filepath);


/**
 * Theme the TinyMCE editor (Copy post/page text styles in this file)
 */
add_editor_style('assets/dist/css/custom-editor-style.css');

/**
 * Custom CSS for the login page
 *
 * @return void
 */
function loginCSS() 
{
    echo '<link 
        rel="stylesheet" 
        type="text/css" 
        href="'
        . get_template_directory_uri(THEME_TD) . 'assets/dist/css/wp-login.css"/>';
}
add_action('login_head', 'loginCSS');
