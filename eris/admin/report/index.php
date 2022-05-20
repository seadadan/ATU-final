<?php
require_once("../../include/initialize.php");
//checkAdmin();
  	 if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

	 
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
$header=$view;
$title="report";
switch ($view) {
	case 'make' :
		$content    = 'make.php';		
		break;

	default :
		$content    = 'make.php';		
}
require_once ("../theme/templates.php");
?>
  
