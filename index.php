<?php
	/*
	 * Dar permissao de execucao ao usuario www-data
	 * Adicionar a seguinte linha no arquivo /etc/sudoers
	 * www-data ALL=(ALL:ALL) ALL
	 */
	include_once 'configs/smarty.config.php';
	
	$smarty->display("index.tpl");
	
	