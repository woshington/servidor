<?php /* Smarty version Smarty-3.1.5, created on 2012-02-21 15:08:45
         compiled from "templates/firewall_service_reiniciar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7707531344f42be7b92fcc2-06732443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce18c3579af8e7651c31715951637217e5f6cc75' => 
    array (
      0 => 'templates/firewall_service_reiniciar.tpl',
      1 => 1329843741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7707531344f42be7b92fcc2-06732443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4f42be7ba4d08',
  'variables' => 
  array (
    'iniciou' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f42be7ba4d08')) {function content_4f42be7ba4d08($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("cabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<script type="text/javascript">
			$(document).ready(
				function(){
					if($("#iniciou").val()==0){
						$("#loading").remove();
					}
				}
			);
		</script>
<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<center>
	<input type="hidden" id="iniciou" value="<?php echo $_smarty_tpl->tpl_vars['iniciou']->value;?>
" />
	<div id="loading">
		<img alt="" src="images/loading.gif">
	</div>
</center>
<?php echo $_smarty_tpl->getSubTemplate ("rodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>