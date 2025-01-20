<?php

namespace Stronghold\Model;

use Stronghold\Framework\Core\Module;
use Stronghold\Integration\Timber;

/**
 * class PostModel
 * @package Stronghold\Model
 */
class PostModel extends Module
{
    public const DEPENDENCIES = [
        Timber::class
    ];
}