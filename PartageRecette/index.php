<?php
	date_default_timezone_set('Europe/Paris');
	include 'application/libraries/smarty-3.1.24/libs/Smarty.class.php';
	include 'config.inc.php';
	$smarty = new Smarty();
	//$smarty->caching = true;
	//$smarty->cache_lifetime = 120;

	if(array_key_exists($_GET["page"], $_PAGES)){
		include 'application/modules/'.$_PAGES[$_GET["page"]].'.inc.php';
		$smarty->assign("data",$data);
	}

	$smarty->display('application/views/modules/'.$_PAGES[$_GET["page"]].'.tpl');

?>
