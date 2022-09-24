<?php

/**
 * The main template file
 *
 * @package LightMint
 * @since LightMint 1.0
 */

defined('ABSPATH') || die('Cheating?');

use Timber\Timber;
use Timber\PostQuery;

// ────────────────────────────────────────────────────────────────────────────────────────────────────────────────

$context = Timber::context();

$templates = array('index.twig');

Timber::render($templates, $context);
