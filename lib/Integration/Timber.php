<?php

namespace Stronghold\Integration;

use Stronghold\Framework\Core\Module;

/**
 * class Timber
 * @package Stronghold\Integration
 */
class Timber extends Module
{
    public function __construct()
    {
        if (class_exists('Timber\Timber')) {
            \Timber\Timber::init();
        }
    }

}