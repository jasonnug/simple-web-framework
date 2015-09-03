<?php
/*
  File: end_page.php
  Description: Ends the DOM.
  Author: Jason Nugent
  Date: 11/28/2012
*/

$smarty->display('footer.tpl');
$smarty->display('DOM_end.tpl');

global $start;
global $global_debug;
if($global_debug) {
	$total_seconds = microtime(1) - $start;
	echo "Page time: " . $total_seconds . "<br><br>";
	echo "GLOBAL APP";
	krumo($app);
	echo "SESSION:";
	krumo($_SESSION);
	echo "POST:";
	krumo($_POST);
	echo "COOKIE";
	krumo($_COOKIE);
}

?>