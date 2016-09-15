<?php

require_once('funcoes.php');

?>
<!DOCTYPE html>
<html>

	<?php
	echo iniciaPagina();
	echo criaCabecalho();
	echo criaMenu();

	?>
	<div class="content">
		<!--REGIÃO 3 -->
		<a href="#desenvolvedores">
			Tabela de desenvolvedores
		</a>

		<br>
		<h2 class="titulo">sOBRE A GEEK STATION.</h2>
		<p> 
			A <i>Geek Station</i> é um E-Comerce inovador, que traz o que há de melhor em artigos eletrônicos,
			contando com  um layout inovador, com um design funcional, organizado, clean e de fácil utilização,
			contém segurança avançada de dados para a maior proteção do usuário. Compra fácil, rápida e 
			rastreamento em tempo real de seus pedidos, são alguns dos diferenciais da <i>Geek Station</i>.
		</p>
		<!--texto informativo sobre o sistema
		utilizar diferentes tipos de h-->
		<br>


		<table border="2" id = "desenvolvedores">
			<tr >
				<th> Nome dos Desenvolvedores </th>
				<th> RA </th>

			</tr>
			<tr>
				<td>Lucelly Bezerra dos Santos </td>
				<td> 1600623 </td>
			</tr>
			<tr>
				<td>Mauricio de Albuquerque da Silva &nbsp; </td>
				<td>1600815 </td>
			</tr>
			<tr>
				<td>Thales Levi Canete </td>
				<td>1600428 </td>
			</tr>
			<tr>
				<td>Yago Matos Januário </td>
				<td>1600106 </td>
			</tr>
		</table>

	</div>
	<?php
	echo finalizaPagina();
	?>

</html>