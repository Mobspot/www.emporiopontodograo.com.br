<?php
include '../../../delivery-admin/commons/db_connect.php';
session_start();

header('Content-Type: text/html; charset=utf-8');

$nome = $_GET['nome'];
$email = 'sidney.miranda2013@gmail.com';
$celular = $_GET['celular'];
$rua = $_GET['rua'];
$cep = $_GET['cep'];
$observacao = 'teste';

$to = "sidney.miranda2013@gmail.com";

$subject = "NOVO PEDIDO DE DELIVERY";
		
$body = "Nome: ".$nome. "\r\n".
		"Email: ".$email. "\r\n".
    "Celular: ".$celular. "\r\n".
    "Quantidade Itens: ". count($_SESSION['itens']). "\r\n".
    "Valor Pedido: R$ ".$_SESSION['pedido']. "\r\n".
    "observacao: ".$observacao;

  $conn = new mysqli($host, $user, $pass, $banco);
  $sql = "SELECT * FROM produto";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
	  while($row = $result->fetch_assoc()) {
      if(array_key_exists($row[codigo], $_SESSION['itens'])){
        $qtd = $_SESSION['itens'][$row[codigo]];

        $body .= "\r\n \r\n** " . $qtd . " " . $row['nome']. " " .$row['preco'] . " UN";

    }
	}

} else {$body += "NENHUM PRODUTO";}	

$conn->close();	

$header = "From:hello@mobspot.com.br"."\r\n".
		"Reply-To:".$email."\r\n".
		"X=Mailer:PHP/".phpversion();
				
mail($to, $subject, $body, $header);

echo 'PEDIDO ENVIADO COM SUCESSO!';
?>
















