<?php
session_start();

$_SESSION['count'] += 1;

$_SESSION['itens'][$_GET['codigo']] += 1;

$_SESSION['pedido'] += $_SESSION['array_preco'][$_GET['codigo']];

echo $_SESSION['count'] . ' itens - R$ ' . $_SESSION['pedido'];
?>

