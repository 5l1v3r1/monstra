<?php

/**
 * This file is part of the Monstra.
 *
 * (c) Romanenko Sergey / Awilum <awilum@msn.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Define the path to the root directory (without trailing slash).
define('ROOT_DIR', str_replace(DIRECTORY_SEPARATOR, '/', getcwd()));

// Define the path to the storage directory (without trailing slash).
define('SITE_PATH', ROOT_DIR . '/site');

// Define the path to the storage directory (without trailing slash).
define('STORAGE_PATH', SITE_PATH . '/storage');

// Define the path to the themes directory (without trailing slash).
define('THEMES_PATH', SITE_PATH . '/themes');

// Define the path to the plugins directory (without trailing slash).
define('PLUGINS_PATH', SITE_PATH . '/plugins');

// Define the path to the config directory (without trailing slash).
define('CONFIG_PATH', SITE_PATH . '/config');

// Define the path to the cache directory (without trailing slash).
define('CACHE_PATH', SITE_PATH . '/cache');

// Define the path to the cache directory (without trailing slash).
define('ACCOUNTS_PATH', SITE_PATH . '/cache');
