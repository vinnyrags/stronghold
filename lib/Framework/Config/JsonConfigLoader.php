<?php

namespace Stronghold\Framework\Config;

/**
 * class JsonConfigLoader
 * @package Stronghold\Framework\Config
 */
abstract class JsonConfigLoader extends ConfigLoader
{
    protected function loadFile(string $file): array
    {
        return json_decode(file_get_contents($file), true);
    }
}