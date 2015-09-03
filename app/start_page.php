<?php
/*
File: start_page.php
Description: Initializes DOM and Session.
Author: Jason Nugent
Date: 11/28/2012
*/

// set up environment variables
require_once('environ_config.php');

// Initialize library and system web page.
include($app['_web_root'] . '/app/init_page.php');

// Initialize library and system web page.
include($app['_web_root'] . '/app/display_begin.php');

?>