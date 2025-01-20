<?php

namespace Stronghold\Framework\Config;

/**
 * class PhpConfigLoader
 * @package Stronghold\Framework\Config
 */
abstract class PhpConfigLoader extends ConfigLoader
{
    protected function loadFile(string $file): array
    {
        return include($file);
    }
}