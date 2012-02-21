{include file="cabecalho.tpl"}
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
{include file="menu.tpl"}
	<form method="POST" action="firewall.php?op=file&valor=salvar">	
		<table>
			<caption>Firewall</caption>
			<tr>
				<td>
					<textarea rows="30" cols="100" id="textFirewall" name="textFirewall">{$firewall}</textarea>
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
{include file="rodape.tpl"}