<?php /* Smarty version Smarty-3.1.5, created on 2012-02-20 19:47:36
         compiled from "templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16308711874f427653b53287-45530167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6da4162c469d98c5e879f8e0b21e18d44108090' => 
    array (
      0 => 'templates/menu.tpl',
      1 => 1329774450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16308711874f427653b53287-45530167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4f427653b6cb3',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f427653b6cb3')) {function content_4f427653b6cb3($_smarty_tpl) {?>	</head>
	<body>
		<nav role="navigation">
			<ul id="nav"> 
		    	<li tabindex="0"><h2><a href="index.php">Home</a></h2></li>
		    	<li tabindex="0"><h2><a href="#">Firewall</a></h2>
		    		<ul class="submenu" tabindex="0"> 
		        		<li tabindex="0"><a href="firewall.php?op=file&valor=editar">Editar</a></li>
		        		<li tabindex="0"><a href="firewall.php?op=service&valor=reiniciar">Reiniciar</a></li>
		      		</ul>
		    	</li>
		    	<li tabindex="0"><h2><a href="#">Proxy</a></h2>
		    		<ul class="submenu" tabindex="0"> 
		        		<li tabindex="0"><a href="proxy.php?op=user&valor=novo">Novo Usuario</a></li>
		        		<li tabindex="0"><a href="proxy.php?op=grupo&valor=novo">Novo grupo</a></li>
		        		<li tabindex="0"><a href="proxy.php?op=acl&valor=novo">Nova ACL</a></li>
		        		<li tabindex="0"><a href="proxy.php?op=service&valor=reiniciar">Reiniciar</a></li>
		        		<li tabindex="0"><a href="proxy.php?op=file&valor=editar">Settings</a></li>
		        		<li tabindex="0"><a href="proxy.php?op=file&valor=manual">File</a></li>
		      		</ul>
		    	</li>		    	
		</nav>	<?php }} ?>