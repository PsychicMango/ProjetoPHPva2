<?php
include "banco.php";

remover_cadastro($conexao, $_GET['CPF']);

header('Location: Inicio.php');
?>