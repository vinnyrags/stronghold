<?php

namespace Stronghold\Framework;

use DI\ContainerBuilder;
use DI\DependencyException;
use DI\NotFoundException;
use Exception;

/**
 * class Bootstrap
 * @package Stronghold\Framework
 */
class Bootstrap
{
    public function __construct()
    {
        add_action('after_theme_setup', [$this, 'initialize'], 99);
    }

    /**
     * @throws DependencyException
     * @throws NotFoundException
     * @throws Exception
     * @return void
     */
    public function initialize(): void
    {
        $Builder = new ContainerBuilder();
        $ContainerDefinitionLoader = new ContainerDefinitionLoader($Builder);
        $ContainerDefinitionLoader->load();
        $GLOBALS['StrongholdContainer'] = $container = $Builder->build();
        $container->get(ModuleConfigLoader::class)->load();
    }
}