<?php

namespace Stronghold\Framework\Config;

use DI\ContainerBuilder;

/**
 * Class ContainerDefinitionConfigLoader
 * Integrates with the Registry to manage module activation and paths.
 * @package Stronghold\Framework\Config
 */
class ContainerDefinitionConfigLoader extends PhpConfigLoader
{
    protected ContainerBuilder $Builder;

    /**
     * @param ContainerBuilder $Builder
     */
    public function __construct(ContainerBuilder $Builder)
    {
        $this->Builder = $Builder;
    }

    protected function getHookName(): string
    {
        return 'container';
    }

    protected function getConfigFileName(): string
    {
        return 'container.php';
    }

    protected function applyLoadedConfig(array $config): void
    {
        $this->Builder->addDefinitions($config);
    }
}