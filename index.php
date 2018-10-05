
<?php 
	include_once("controller/Controller.php");

	$controller = new Controller();
	$controller->dbconnect();
	$controller->header();
	$controller->invoke();
 	$controller->footer();

?>