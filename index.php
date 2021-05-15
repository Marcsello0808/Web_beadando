<?php
include('includes/config.inc.php'); 	
$keres = current($oldalak);
if (isset($_GET['pid'])) {
	if (isset($oldalak[$_GET['pid']])) {
		$keres = $oldalak[$_GET['pid']];
	} else {
		$keres = $hiba_oldal;
		header("HTTP/1.0 404 Not Found");
	}
}
include('templates/index.tpl.php');
?>
