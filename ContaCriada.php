<?php
    include "auxiliares.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
</head>
<body>
    <fieldset><legend>BN Midas</legend>
            <h2>Conta criada com sucesso</h2>
            <p>Nome: <?php //echo $nome; ?></p>
            <p>Número da conta: <?php //echo $Conta."-".$Digito; ?></p>
            <p>Agência: <?php //echo $Agencia; ?></p>
            <p>Bandeira: <?php //echo $bandeira; ?></p>
            <form method="POST">
                <input type="submit" value="Acessar conta" formaction="Conta.php"  />
                <input type="submit" value="Voltar ao inicio" formaction="Inicio.php" />
            </form>
            
</fieldset>
</body>
</html>