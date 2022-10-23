<?php

/**
 * Loader
 *
 * @package ThemeBasis
 */

namespace App;

/**
 * Boot
 */
class App
{

    /**
     * Theme services.
     *
     * @return array
     * @access private
     */
    private function services()
    {
        $services = array(
            Setup\Assets::class,
            Setup\Context::class
        );

        return $services;
    }

    /**
     * Instanciates and run services.
     *
     * @return void
     * @access public
     */
    public function run()
    {
        $services = $this->services();

        foreach ($services as $service) {
            $instance = new $service();

            if (method_exists($instance, 'run')) {
                $instance->run();
            }
        }
    }
}

