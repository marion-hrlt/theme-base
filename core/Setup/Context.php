<?php

/**
 * Setup::Context
 *
 * @package ThemeBasis Theme
 */

namespace App\Setup;

use Timber\Timber;
use Timber\Menu;

/**
 * Context
 */
class Context
{

    /**
     * Init / Run
     */
    public function run()
    {
        add_filter('timber_context', [$this, 'add_nav_menus']);
    }

    /**
     * Add nav menu
     *
     * @param array $context Timber context.
     * @return array
     */
    public function add_nav_menus($context)
    {
        if (has_nav_menu('primary')) {
            $context['menus']['main'] = new Menu('primary');
        }

        return $context;
    }
}
