<?php
include '../../../delivery-admin/commons/db_connect.php';

$produto = $_GET['pesquisa'];

$conn = new mysqli($host, $user, $pass, $banco);

$sql = "SELECT * FROM produto WHERE nome LIKE '%$produto%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {

    $_SESSION['array_preco'][$row[codigo]] = moeda($row[preco]);
    $qtd = $_SESSION['itens'][$row[codigo]];

    echo "<div class='div-block'>
				<div class='box'>
					<div class='box-top'>
						<img src='../delivery-admin/prod_images/$row[nome].jpg'/>
					</div>
					<div class=' box box-bottom'>
						<div class='desc'>
							<div class='categoria'>
								<span>$row[categoria]</span>
							</div>
							<div class='titulo'>
								<a>$row[nome]</a>
							</div>
							<div class='preco'>
								<span class='preco'>R$ $row[preco]</span>
							</div>
						</div>
            <div class='form-group input-group' id='controle$row[codigo]' style='width:130px;";
      if ($qtd > 0){ echo " ";}else{ echo "display:none;";}
      echo" margin:0px;'>
							<span class='input-group-addon' onclick='remove($row[codigo])' >
								<i class='glyphicon glyphicon-minus'></i>
							</span>
							<div class='form-control' id='qtd$row[codigo]' style='margin:0; background-color:white;' >$qtd</div>
							<span class='input-group-addon' onclick='add($row[codigo])'>
								<i class='glyphicon glyphicon-plus'></i>
							</span>
						</div>
            <div class='action' style=';";
      if ($qtd > 0){ echo "display:none;"; }else{ echo "display:block;";}
      echo "' onclick='add($row[codigo])' id='action$row[codigo]'>
							<buttom>Adicionar</buttom>
						</div>
					</div>
				</div>
			</div>";
	}

} else {echo 'Nenhum produto encontrado.';}	

$conn->close();	

function moeda($str_num){
  $resultado = str_replace('.', '', $str_num);
  $resultado = str_replace(',', '.', $resultado);
  return floatval($resultado);
}

?>

