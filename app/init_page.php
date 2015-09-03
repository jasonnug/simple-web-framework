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

// Krumo debugging include
require($app['_web_root'] . '/app/krumo/class.krumo.php');

// Global debug setup allows for debug querying.
$global_debug;
if($_GET['debug'] == 1 || $global_debug) {
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

// Start Session
session_start();

// Application functions
include($app['_web_root'] . '/app/include.php');

// Load application data
include($app['_web_root'] . '/app/data.php');
read_json('Pages');

// Get current page name
$app['_curPath'] = "";
if($directory) {
    $app['_curPath'] = $directory . "/" . basename(getUrl());
} else {
    $app['_curPath'] = basename(getUrl());
}

?>