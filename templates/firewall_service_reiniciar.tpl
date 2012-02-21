{include file="cabecalho.tpl"}
		<script type="text/javascript">
			$(document).ready(
				function(){
					if($("#iniciou").val()==0){
						$("#loading").remove();
					}
				}
			);
		</script>
{include file="menu.tpl"}
<center>
	<input type="hidden" id="iniciou" value="{$iniciou}" />
	<div id="loading">
		<img alt="" src="images/loading.gif">
	</div>
</center>
{include file="rodape.tpl"}