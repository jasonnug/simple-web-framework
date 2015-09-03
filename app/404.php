<?php
/*
  File: 404.php
  Description: script for when the user is requesting a missing page. searches within pages database for possible relevent pages.
  Author: Jason Nugent
  Date: 9/2/2015
*/

$curPage = "404";

$original_request = $_SERVER["REQUEST_URI"];

function cmp($a, $b) {
    return $a['page_rel'] >= $b['page_rel'] ? 1 : -1;
}

$sorted_pages = array();
foreach($app['page_list'] as $key => $page) {
    $page_rel = similar_text($page['url'], $original_request);
    // krumo($page_rel);
    if($page['title'] != "404") {
        $sorted_pages[$page['url']] = $page;
        $sorted_pages[$page['url']]['page_rel'] = $page_rel;
    }
}

uasort($sorted_pages, 'cmp');

$five_relevant = array_slice($sorted_pages, -5);
$five_relevant = array_reverse($five_relevant);
$smarty->assign('five_relevant', $five_relevant);

$smarty->assign('original_request', $original_request);
