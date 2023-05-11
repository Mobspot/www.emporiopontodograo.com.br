<?php
include '../delivery-admin/commons/db_connect.php';

$conn = new mysqli($host, $user, $pass, $banco);

$sql = "SELECT * FROM produto";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
    
    if(array_key_exists($row[codigo], $_SESSION['itens'])){
      $qtd = $_SESSION['itens'][$row[codigo]];

      echo "<div class='div-block'>
              <div class='box'>
                <div class='box-left'>
                  <img src='../delivery-admin/prod_images/$row[nome].jpg'/>
                </div>
                <div class=box-right'>
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
                    <div class='form-group input-group' id='controle$row[codigo]' style='width:130px; margin:0px;'>
                      <span class='input-group-addon' onclick='remove($row[codigo])' >
                        <i class='glyphicon glyphicon-minus'></i>
                      </span>
                      <div class='form-control' id='qtd$row[codigo]' style='margin:0; background-color:white;' >$qtd</div>
                      <span class='input-group-addon' onclick='add($row[codigo])'>
                        <i class='glyphicon glyphicon-plus'></i>
                      </span>
                    </div>
                  </div>
                  
                </div>
                <a onclick='removeItem($row[codigo])' class='trash'><i class='glyphicon glyphicon-trash'></i></a>
              </div>
            </div>";
    }
	}

} else {echo 0;}	

$conn->close();	

function moeda($str_num){
  $resultado = str_replace('.', '', $str_num);
  $resultado = str_replace(',', '.', $resultado);
  return floatval($resultado);
}

?>

