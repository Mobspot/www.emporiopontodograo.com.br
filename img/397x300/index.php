<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/main-container.css" rel="stylesheet">
	<?php require_once('assets/php/head.php'); ?>
</head>

<body>
	<header>
		<?php include_once('assets/php/main-header.php'); ?>
		<div id="bottom-header">
			<div id="search" class="form-group input-group">
        <form>
				  <input name="consulta" id="txt_consulta" placeholder="Buscar por produto ou categoria" type="text" class="form-control">
				</form>
        
			</div>
		</div>
	</header>
	
	<div class="container">	
		<?php require_once("assets/php/itens_load.php"); ?>
	</div>
	
	<footer>
		<a href="lista.php">
			<button id="carrinho" class="btn"><i class="glyphicon glyphicon-shopping-cart"></i>
				0,00
			</button>
		</a>
		<button id="limpa_sess" class="btn" onclick="limpa_sessao()">
			<i class="glyphicon glyphicon-trash"></i>
		</button>
	</footer>
	
	<?php require_once('assets/php/scripts.php'); ?>
	<script src="assets/js/script.js"></script>

</body>
</html>
