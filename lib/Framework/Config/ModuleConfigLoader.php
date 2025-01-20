<?php

namespace Stronghold\Framework\Config;

use Stronghold\Framework\Core\Registry;

/**
 * Class JsonModuleConfigLoader
 * Loads the configuration of modules using JSON files.
 * Integrates with the Registry to manage module activation and paths.
 * @package Stronghold\Framework\Config
 */
class ModuleConfigLoader extends PhpConfigLoader
{
    protected Registry $Registry;

    /**
     * @param Registry $Registry
     */
    public function __construct(Registry $Registry)
    {
        $this->Registry = $Registry;
    }

    protected function getConfigFileName(): string
    {
        return 'modules.php';
    }

    protected function getHookName(): string
    {
        return 'modules';
    }

    protected function applyLoadedConfig(array $config): void
    {
        $this->Registry->activateModules($config);
    }
}