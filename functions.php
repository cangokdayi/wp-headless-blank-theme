<?php
if(! defined('ABSPATH')) exit;

// you can set the render type as 'HTML' if that's how you wanna use it but I wouldn't recommend it due to performance
define('responseType', 'JSON');

/**
 * You can use this class to hook your static assets or register REST routes etc.
 */
class ThemeFunctions {

    function __construct() {
        add_action('wp_enqueue_scripts', [$this, 'registerAssets']);
    }

    // hook static assets
    public function registerAssets() {
        $THEME_PATH = __DIR__;
        $THEME_URL = get_template_directory_uri();

        wp_register_style('normalize', 'https://cdn.jsdelivr.net/npm/normalize.css/', [], false);
        wp_register_style('main', $THEME_URL . '/assets/app.css', [], filemtime($THEME_PATH . '/assets/app.min.css'));
        wp_register_script('main', $THEME_URL . '/assets/app.js', [], filemtime($THEME_PATH . '/assets/app.js'), true);

        wp_enqueue_style('normalize'); 
        wp_enqueue_style('main'); 
        wp_enqueue_script('main');
    } 
}

if(responseType == 'HTML') new ThemeFunctions();