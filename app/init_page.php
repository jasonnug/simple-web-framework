<?php
/**********************
 *      File: app/init_page.php
 *      Description: Initialize smarty, data and session.
 *      Author: Jason Nugent
 */

// set up environment variables.
require_once('environ_config.php');

// Keep-alive command for server connections.
header("Connection: keep-alive");

// Timer to track the page load times.
global $start;
$start = microtime(1);

// Check to see that the working directory is a directory.
if (!is_dir($app['_web_root'])) {
	print '<b>Error!</b> working directory not present.<br />';
	print '<b>Fix:</b> Site should be in: ' . $app['_web_root'];
	exit;
}

// Krumo debugging include
require($app['_web_root'] . '/app/krumo/class.krumo.php');

// Global functions
// Borrowed from : https://github.com/igorw/get-in
// Discussion    : http://nikic.github.io/2014/01/10/The-case-against-the-ifsetor-function.html
function get_in(array $array, array $keys, $default = null) {
    if (!$keys) {
        return $array;
    }

    // This is a micro-optimization, it is fast for non-nested keys, but fails for null values
    if (count($keys) === 1 && isset($array[$keys[0]])) {
        return $array[$keys[0]];
    }
    $current = $array;
    foreach ($keys as $key) {
        if (!array_key_exists($key, $current)) {
            return $default;
        }
        $current = $current[$key];
    }

    return $current;
}

// Global debug setup allows for debug querying.
$global_debug;
if(get_in($_GET, ['debug']) == 1 || !empty($global_debug)) {
	$global_debug = true;
} else {
	$global_debug = false;
}

// put full path to Smarty.class.php
require($app['_web_root'] . '/app/smarty/Smarty.class.php');
$smarty = new Smarty();

// Set up Smarty directories
$smarty->setTemplateDir($app['_web_root'] . '/app/smarty/templates');
$smarty->setCompileDir($app['_web_root'] . '/app/smarty/templates_c');
$smarty->setCacheDir($app['_web_root'] . '/app/smarty/cache');
$smarty->setConfigDir($app['_web_root'] . '/app/smarty/configs');
$smarty->error_reporting = E_ALL ^ E_NOTICE;

// Check that the smarty directories are writeable
if (!is_writeable($smarty->compile_dir)) {
	print '<b>Error!</b> compile directory needs to be writeable. <br />';
	print '<b>Fix:</b> chmod a+w ' . $smarty->compile_dir;
	exit;
}

// Start Session
session_start();

// Application functions
include($app['_web_root'] . '/app/include.php');

// Load application data
include($app['_web_root'] . '/app/data.php');
read_json('Pages');

// Get current page name
$app['_curPath'] = "";
if(!empty($directory)) {
    $app['_curPath'] = $directory . "/" . basename(getUrl());
} else {
    $app['_curPath'] = basename(getUrl());
}

