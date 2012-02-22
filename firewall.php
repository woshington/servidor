<?php
	/*
	 * Para funcionar executar o seguinte comando como superusuario 
	 * mkdir /etc/init.d/firewall
	 * chown www-data:www-data /etc/init.d/firewall/firewall
	 * apt-get install dos2unix
	 */
	require_once 'configs/smarty.config.php';
	
	$op = @$_REQUEST["op"];
	$valor = @$_REQUEST["valor"];
	$filename = "/etc/init.d/firewall/firewall";
	if($op=="file"){
		if($valor=="editar"){
			if(file_exists($filename)){
				$firewall = file_get_contents($filename);
			}else{
				$firewall = "Arquivo ainda nao existe click em padrão para criar automaticamente!";
			}			
			$smarty->assign("firewall", $firewall);
		}elseif($valor=="salvar"){
			$txtFirewall = $_POST["textFirewall"];			
			$file = fopen($filename, "w+");
				fwrite($file, $txtFirewall);
			fclose($file);
			system("dos2unix /etc/init.d/firewall/firewall"); // Convertendo o arquivo em formato unix			
			header('Location: firewall.php?op=file&valor=editar');
		}elseif($valor=="padrao"){
			$file = fopen($filename, "w+");
					fwrite($file, file_get_contents("configs/firewall.original"));
			fclose($file);
			system("chmod a+x /etc/init.d/firewall/firewall");
			header('Location: firewall.php?op=file&valor=editar');
		}		
		$smarty->display("firewall_file_edit.tpl");
	}elseif($op=="service"){
		if($valor=="reiniciar"){
			system("/etc/init.d/firewall/firewall restart", $prop);
			$smarty->assign("iniciou", $prop);
			$smarty->display("firewall_service_reiniciar.tpl");			
		}
	}