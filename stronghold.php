<?php
/**
 * Plugin Name: Stronghold
 */

use Stronghold\Framework\Bootstrap;

if (!defined('ABSPATH')) {
    exit;
}

const STRONGHOLD_DIR = __DIR__;
const STRONGHOLD_CONFIG_DIR = STRONGHOLD_DIR . '/config';

add_action('plugins_loaded', static function() {
    new Bootstrap();
});