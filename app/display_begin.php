<?php
/**********************
 *      File: app/display_begin.php
 *      Description: Display the first components on the page.
 *      Date: 1/2/2013
 *      Author: Jason Nugent
 */
$smarty->assign('curPage', $curPage);

// Check for alert.
if(isset($_SESSION['_error']) and !empty($_SESSION['_error'])) {
    $app['_error'] = $_SESSION['_error'];
    unset($_SESSION['_error']);
}

if(isset($_SESSION['_warning']) and !empty($_SESSION['_warning'])) {
    $app['_warning'] = $_SESSION['_warning'];
    unset($_SESSION['_warning']);
}

if(isset($_SESSION['_success']) and !empty($_SESSION['_success'])) {
    $app['_success'] = $_SESSION['_success'];
    unset($_SESSION['_success']);
}

// Assign global app object to the template
$smarty->assign('app', $app);

// display header, main nav, page start and side nav
$smarty->display('DOM_start.tpl'); // DOM start (<html>,<head>..)
$smarty->display('page_start.tpl');   // navigation menu.


?>
