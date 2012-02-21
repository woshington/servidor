<?php /* Smarty version Smarty-3.1.5, created on 2012-02-20 19:05:30
         compiled from "templates/firewall_file_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:556872564f427e04b2c645-53305013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43e09a27205c4de3a73cbe3c9fe12fd0a457a5fa' => 
    array (
      0 => 'templates/firewall_file_edit.tpl',
      1 => 1329771928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '556872564f427e04b2c645-53305013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4f427e04b8ae4',
  'variables' => 
  array (
    'firewall' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f427e04b8ae4')) {function content_4f427e04b8ae4($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("cabecalho.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<script type="text/javascript">
			$(document).ready(
				function(){
					$("#btnPadrao").click(
						function(){
							if(!confirm('Deseja voltar ao arquivo original?')){
								return false;
							}
							$(window.document.location).attr('href', "firewall.php?op=file&valor=padrao");							
						}
					);
					$("#btnSalvar").click(
						function(){
							if(!confirm('Deseja salvar as alteracoes?')){
								return false;
							}							
						}
					);
				}
			);
		</script>
<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<form method="POST" action="firewall.php?op=file&valor=salvar">	
		<table>
			<caption>Firewall</caption>
			<tr>
				<td>
					<textarea rows="30" cols="100" id="textFirewall" name="textFirewall"><?php echo $_smarty_tpl->tpl_vars['firewall']->value;?>
</textarea>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Salvar" id="btnSalvar">
					<input type="reset" value="Desfazer" id="btnDesfazer">
					<input type="button" value="Padrão" id="btnPadrao">
				</td>
			</tr>
		</table>		
</form>
<?php echo $_smarty_tpl->getSubTemplate ("rodape.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>