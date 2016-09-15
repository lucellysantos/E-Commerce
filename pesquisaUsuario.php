<?php

require_once('funcoes.php');

?>
<!DOCTYPE html>
<html>

	<?php
	echo iniciaPagina();
	echo criaCabecalho();
	echo criaMenu();

	/**
		  * Inclui um arquivo
		  * -- Quando o arquivo não for encontrado, include gera um erro (E_WARNING) que não para a execução do arquivo
		  *    No caso do require gera (E_FATAL) que para a execução do arquivo
		  * -- As versões que incluem '_once' no final, tem o mesmo funcionamento com a diferença que incluiram o arquivo apenas
		  *    se ele ja não tiver sido inserido anteriormente. Obs.: A versão com '_once' no final é mais lenta que as versões sem.
		  */ 
		//include('funcoes.php');
		//include_once('funcoes.php');

		//require('funcoes.php');
	?>

	<div class="content"><!--REGIAO 3-->
		<h2 class="titulo">Pesquisa de Usuários</h2>

	</div>

	<?php
	echo finalizaPagina();
	?>

</html>