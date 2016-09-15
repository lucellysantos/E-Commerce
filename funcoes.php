<?php
				
	define('DATE', date('d/m/Y'));

	$link = array
	  (
	  array("http://www.bradesco.com","Bradesco"),
	  array("http://www.itau.com.br","Itaú"),
	  array("http://www.facebook.com","Facebook"),
	  array("http://www.instagram.com","Instagram")
	  );


	function iniciaPagina (){
		return '<head>
			<link rel="stylesheet" type="text/css" href="estilos.css">
			<title>GEEK STATION</title>
		</head>
		<body>';

	}

	function criaCabecalho () {
		return '
		<div class="header"><!--REGIAO 1-->
		'.DATE	
		.'</div>';
	}

	function criaMenu () {
		return 
		'<div class="nav"><!--REGIAO 2-->
		    	<ul class="lista">
		    		
		    		<li id="inicio">
		    		<a class="sub_lista" href="index.php">Pagina Inicial
		    		</a></li>
		    		
		    		<li>Usuários
			    		<ol>

			    			<li id="pesquisa_do_usuario">
			    			<a class="sub_lista" href="pesquisaUsuario.php">Pesquisa
			    			</a></li>

			    			<li id="cadastro_do_usuario">
			    			<a class="sub_lista" href="cadastroUsuario.php">Cadastro
			    			</a></li>

			    		</ol>
		    		</li>
		    		<li>Produtos
		    			<ol>

			    			<li id="pesquisa_do_produto">
			    			<a class="sub_lista" href="cadastroProduto.php">Pesquisa
			    			</a></li>

			    			<li id="cadastro_do_produto">
			    			<a class="sub_lista" href="#cadastroProduto.php">Cadastro
			    			</a></li>

			    		</ol>
		    		</li>
		    		<li id="links">
		    		<a class="sub_lista" href="links.php">Links de Interesse
		    		</a></li>
		    		<li>Informações
			    		<ol>
				    		<li id="contato"><a class="sub_lista" href="contato.php">Contato
				    		</a></li>
				    		<li id="sobre"><a class="sub_lista" href="sobre.php">Sobre
				    		</a></li>
				    	</ol>
			    	</li>
		    	</ul>
		    	</div> ';
	}

	function finalizaPagina () {
		return
		'<div class="footer">
		    	<a href = "index.php">© Copyright 2016 www.geekstation.com.br - All Rights Reserved</a>
			</div>
	</body>';
	}

?>