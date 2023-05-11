<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<link href="assets/css/final.css" rel="stylesheet">
    <?php require_once('assets/php/head.php'); ?>
</head>

<body>
	<header>
		<?php include_once('assets/php/main-header.php'); ?>
		<div id="bottom-header">
			<button id="carrinho" class="btn"><i class="glyphicon glyphicon-shopping-cart"></i>
				0,00
			</button>
		</div>
	</header>
	
  <div class='container'>
    <div id='dados'>
      <span>DADOS DA ENTREGA</span>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" placeholder="Nome">
        </div><br>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Email">
        </div><br>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Celular</label>
          <input type="text" class="form-control" id="celular" placeholder="Celular">
        </div><br>
    </div>

    <div id='pagamento' style="border-bottom: solid 1px #F5F5DC; margin-bottom:20px;">
      <span>FORMA DE PAGAMENTO</span>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
        <label class="form-check-label" for="flexRadioDefault1">
          Dinheiro ou cartão na entrega
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
        <label class="form-check-label" for="flexRadioDefault2">
          Dinheiro ou cartão ao retirar
        </label>
      </div>
    </div>

    <div id='endereco'>
    <span>ENDEREÇO DE ENTREGA</span>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Rua</label>
        <input type="email" class="form-control" id="rua" placeholder="Rua">
      </div><br>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">CEP</label>
        <input type="email" class="form-control" id="cep" placeholder="CEP">
      </div><br>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
        <textarea class="form-control" id="observacao" rows="3"></textarea>
      </div>
    </div><br>
    <button class='btn btn-success' onclick='finalization()'>CONCLUIR</button>
  </div>
	
	<footer hidden>
		<button id="limpa_sess" class="btn" onclick="limpa_sessao()"><i class="glyphicon glyphicon-trash"></i>
		</button>
  </footer>
  
  <script src="assets/js/final.js"></script>
  <?php require_once('assets/php/scripts.php'); ?>
	
</body>
</html>
