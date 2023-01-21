<?php
    include "auxiliares.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>
</head>
<body>
    <h1>Olá <?php //echo $cliente?></h1>
    <p>Nome: <?php //echo $nome; ?></p>
            <p>Número da conta: <?php //echo $Conta."-".$Digito; ?></p>
            <p>Agência: <?php //echo $Agencia; ?></p>
            <p>Bandeira: <?php //echo $bandeira; ?></p>
            <a href="remover.php?id=<?php echo $_GET['CPF'];?>">Remover cadastro</a>
    <fieldset>
        <legend>Operações na Conta</legend>
        
        <input type="submit" formaction="acao.php">
    </fieldset>
</body>
</html>