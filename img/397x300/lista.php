<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link href="assets/css/lista.css" rel="stylesheet">
	<?php require_once('assets/php/head.php'); ?>
	 
</head>

<body>
	<header>
		<?php include_once('assets/php/main-header.php'); ?>
		<a href='final.php'>
			<div id="bottom-header">
				<button id="carrinho" class="btn"><i class="glyphicon glyphicon-shopping-cart"></i>
					0,00
				</button>
			</div>
		</a>
	</header>
	
	<div class="container">	
		<?php require_once("assets/php/carrinho_load.php"); ?>
	</div>
	
	<footer hidden>
		<button id="limpa_sess" class="btn" onclick="limpa_sessao()">
			<i class="glyphicon glyphicon-trash"></i>
		</button>
	</footer>
	
	<script src="assets/js/lista.js"></script>
	<?php require_once('assets/php/scripts.php'); ?>
</body>
</html>
