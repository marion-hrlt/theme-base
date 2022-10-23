<?php

/**
 * Setup::Assets
 *
 * @package ThemeBasis Theme
 */

namespace App\Setup;

use Exception;

/**
 * Enqueues
 */
class Assets
{

    /**
     * Run.
     *
     * @access public
     */
    public function run()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
    }

    /**
     * Enqueue styles.
     *
     * @access public
     */
    public function enqueue_styles()
    {
        $version     = wp_get_theme()->get('Version');
        wp_enqueue_style('theme-basis/styles', get_template_directory_uri() . '/assets/public/styles/app.css', false, $version);
    }

    /**
     * Enqueue scripts.
     *
     * @access public
     */
    public function enqueue_scripts()
    {
        $version = wp_get_theme()->get('Version');
        wp_enqueue_script('theme-basis/scripts', get_template_directory_uri() . '/assets/public/scripts/app.js', [], $version, false);
    }
}
