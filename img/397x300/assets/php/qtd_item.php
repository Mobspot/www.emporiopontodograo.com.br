<?php

session_start();

echo $_SESSION['itens'][$_GET[codigo]];

?>

