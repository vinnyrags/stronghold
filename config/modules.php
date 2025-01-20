<?php

//use Stronghold\Integration\BackgroundEventManager;
use Stronghold\Integration\Wordpress\Cleanup;
use Stronghold\Integration\Wordpress\SearchRewrite;
use Stronghold\Model\PostModel;
use Stronghold\Model\TermModel;

return [
    Cleanup::class => true,
    SearchRewrite::class => true,
//    BackgroundEventManager::class => true,
    PostModel::class => true,
    TermModel::class => true
];