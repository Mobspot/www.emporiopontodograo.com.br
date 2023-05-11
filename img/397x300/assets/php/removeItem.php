<?php

session_start();

$_SESSION['count'] -= $_SESSION['itens'][$_GET['codigo']];
  
if($_SESSION['count'] <= 0){
   $_SESSION['pedido'] = 0.00;
}else{
  $_SESSION['pedido'] -= $_SESSION['array_preco'][$_GET['codigo']] * $_SESSION['itens'][$_GET['codigo']];
}

unset($_SESSION['itens'][$_GET['codigo']]);

echo $_SESSION['count'] . ' itens - R$ ' . $_SESSION['pedido'];

function moeda($str_num){
  $resultado = str_replace('.', '', $str_num);
  $resultado = str_replace(',', '.', $resultado);
  return floatval($resultado);
}

?>

