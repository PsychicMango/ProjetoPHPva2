<?php
session_start();
include "banco.php";
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
<form method="POST" action="Acesso.php" >
<fieldset>
        <legend>BN Midas</legend>
        <label>
        Qual banco deseja acessar?
        <input type="radio" name="banco" value="1" checked />
        Bradesco
        <input type="radio" name="banco" value="2" />
        Caixa
        <input type="radio" name="banco" value="3" />
        ITAU
        </label>
        
</fieldset>
    <input type="submit" value= "Acessar conta " name="Acessar conta">
    <input type="submit" value= "Criar uma conta " name="Criar uma conta" formaction="Cadastro.php">
</form>
       
        </body>
</html>

