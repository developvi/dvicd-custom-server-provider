<?php

/**
 * Plugin Name: DVICD Custom Server Provider
 * Plugin URI: https://developvi.com
 * Description: This plugin allows you to set a custom server provider for your WordPress website.
 * Version: 1.0.0
 * Author: Developvi
 * Author URI: https://developvi.com
 * License: GPLv2 or later
 * Requires at least: 5.0
 * Requires PHP: 8.1
 *
 */
require_once __DIR__ . '/vendor/autoload.php';

use DVICD\CustomServerProvider\DVICDINIT;
// Initialize the plugin
DVICDINIT::init();
