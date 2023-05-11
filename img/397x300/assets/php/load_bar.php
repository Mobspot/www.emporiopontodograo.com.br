<?php
session_start();

if($_SESSION['count'] > 0){
  echo $_SESSION['count'] . 
     ' itens - R$ ' . $_SESSION['pedido'];
} else {
  echo 'R$ 0,00';
}

?>