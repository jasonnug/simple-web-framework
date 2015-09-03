<?php

/*
*  Routing script runs on any page request part of the cms and not directory based. 
*/

include 'init_page.php';

$reqURI = $_SERVER["REQUEST_URI"];

$urlComponents = explode("?", $reqURI);

$curPage = $urlComponents[0];

// remove working directory from relative url
$curPage = trim($curPage, $app['_working_dir']);

if(empty($curPage)) {
	$curPage = '/';
}

$getVars = $urlComponents[1];

if(!empty($getVars)) {
	$vars = explode("&", $getVars);
	foreach($vars as $var) {
		$hash = explode("=", $var);
		$_GET[$hash[0]] = $hash[1];
	}
}

$template = str_replace("/", "__", $curPage);

if(empty($app['page_list'][$curPage]) or !$smarty->templateExists($template . ".tpl")) {
	include '404.php';
}

include 'display_begin.php';

$smarty->display('page.tpl');

include 'end_page.php';