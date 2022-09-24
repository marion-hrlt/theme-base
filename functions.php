<?php

/**
 * Theme functions
 *
 * @package ThemeBasis
 * @since ThemeBasis 1.0
 */

// Include vendors
require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/core/App.php');

use ThemeBasis\App;

$timber = new \Timber\Timber();

$app = new App();
$app->run();

// Include functions
require_once get_stylesheet_directory() . '/includes/theme-functions.php';
