<?php
	define("DIR_SMARTY", "../Smarty-3.1.5/libs/");
	require DIR_SMARTY."Smarty.class.php";
	
	$smarty = new Smarty();
	
	$smarty->compile_check = true;
	$smarty->debugging = false;
	
	$smarty->template_dir = "templates/";
	$smarty->compile_dir = "templates_c/";
	$smarty->config_dir = "configs/";
	$smarty->cache_dir = "cache/";
