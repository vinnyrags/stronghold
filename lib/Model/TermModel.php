<?php

namespace Stronghold\Model;

use Stronghold\Framework\Core\Module;
use Stronghold\Integration\Timber;

/**
 * class TermModel
 * @package Stronghold\Model
 */
class TermModel extends Module
{
    public const DEPENDENCIES = [
        Timber::class
    ];
}