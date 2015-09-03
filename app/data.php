<?php
/**********************
 *      File: app/data.php
 *      Description: Local data functions
 *      Author: Jason Nugent
 */

// Read local json data and put it into the global app opject.
function read_json($file) {
	global $app;
	$app[strtolower($file)] = array();
	if(file_exists($app['_web_root']."/data/$file.json")) {
		$app[strtolower($file)] = json_decode(file_get_contents($app['_web_root']."/data/$file.json"), true);
		if($file == "Pages") {
			page_list($app[strtolower($file)]);
		}
		return true;
	} else {
		return null;
	}
}

function write_json($file) {
	global $app;
	$json = json_encode($app[strtolower($file)]);
	file_put_contents($app['_web_root'] . "/data/$file.json", $json);
}

function page_list($pages) {
	global $app;
	foreach($pages as $key => $page) {
		if(!empty($page['pages'])) {
			page_list($page['pages']);
		} else {
			$app['page_list'][$page['url']] = $page;
		}
	}
}

?>