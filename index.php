<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<title>Treino Jquery</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<style>
		p{
			transition: 500ms;
		}
		.zoom{
			font-size: 30px;
			cursor: pointer;
			background-color: #f8f8f8;
		}
	</style>
</head>
<body>
	<div id="greetings" class="container mt-5">
		<h1 id="title" class="display-3">Hello <span>world!</span></h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem velit ea similique sunt, provident, atque hic dignissimos impedit, tempore minus debitis repudiandae. Eveniet repellendus voluptatibus consequuntur, quaerat assumenda sint iste.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem velit ea similique sunt, provident, atque hic dignissimos impedit, tempore minus debitis repudiandae. Eveniet repellendus voluptatibus consequuntur, quaerat assumenda sint iste.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem velit ea similique sunt, provident, atque hic dignissimos impedit, tempore minus debitis repudiandae. Eveniet repellendus voluptatibus consequuntur, quaerat assumenda sint iste.</p>
		<div class="form-group col-md-6 mx-auto mt-4">
			<input class="form-control" placeholder="Digite aqui e clique no botão 6" type="text">
		</div>
	</div>

<!-- Botões 1 -->
	<div id="buttons1" class="container mt-5">
		<div class="row">
			<div class="col-md-2"><button id="botao1" class="btn btn-primary btn-block mt-3 mt-md-2">Função 1</button></div>
			<div class="col-md-2"><button id="botao2" class="btn btn-primary btn-block mt-3 mt-md-2">Função 2</button></div>
			<div class="col-md-2"><button id="botao3" class="btn btn-primary btn-block mt-3 mt-md-2">Função 3</button></div>
			<div class="col-md-2"><button id="botao4" class="btn btn-primary btn-block mt-3 mt-md-2">Função 4</button></div>
			<div class="col-md-2"><button id="botao5" class="btn btn-primary btn-block mt-3 mt-md-2">Função 5</button></div>
			<div class="col-md-2"><button id="botao6" class="btn btn-primary btn-block mt-3 mt-md-2">Função 6</button></div>
		</div>
	</div>
	<div id="buttons2" class="container mt-1">
		<div class="row">
			<div class="col-md-2"><button id="botao1" class="btn btn-warning btn-block mt-3 mt-md-2">Função 1</button></div>
			<div class="col-md-2"><button id="botao2" class="btn btn-warning btn-block mt-3 mt-md-2">Função 2</button></div>
			<div class="col-md-2"><button id="botao3" class="btn btn-warning btn-block mt-3 mt-md-2">Função 3</button></div>
			<div class="col-md-2"><button id="botao4" class="btn btn-warning btn-block mt-3 mt-md-2">Função 4</button></div>
			<div class="col-md-2"><button id="botao5" class="btn btn-warning btn-block mt-3 mt-md-2">Função 5</button></div>
			<div class="col-md-2"><button id="botao6" class="btn btn-warning btn-block mt-3 mt-md-2">Função 6</button></div>
		</div>
	</div>
		
	<?php 
		include "form.php";
		?>

	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>