<?php
    include "auxiliares.php";
    if($_POST)
    {
        $_SESSION['banco'][]= banco($_POST['banco']);
    }
    else
    {
        header('Location:Inicio.php');
    }
?>
<!DOCTYPE html>
<html lang=""en"">
<head>
    <meta charset=""UTF-8"">
    <meta http-equiv=""X-UA-Compatible"" content=""IE=edge"">
    <meta name=""viewport"" content=""width=device-width, initial-scale=1.0"">
    <title>Acesso</title>
</head>
<body>
    <fieldset>
        <form action=""validarAcesso.php"">
            <label for=""idnome"">Nome:</label>
            <input type=""text"" name= ""nome"" id=""idnome"" placeholder=""Insira seu Nome"" maxlength=""50"" required>

            <label for=""idagencia"">Agência:</label>
            <input type=""number"" name= ""agencia"" id=""idagencia"" placeholder=""0000-0"" required>

            <label for=""idconta"">Conta:</label>
            <input type=""number"" name= ""conta"" id=""idconta"" placeholder=""000000"" required>

            <label for=""iddigito"">Digito da Conta:</label>
            <input type=""number"" name= ""digito"" id=""iddigito"" placeholder=""0"" required>

            <label for=""bandeira"">Bandeira:</label>
            <select name=""bandeira"" id=""bandeira"" required>
                <option value=""Mastercard"">Mastercard</option>
                <option value=""Visa"">Visa</option>
                <option value=""Elo"">Elo</option>
                <option value=""American"">American Express</option>
                <option value=""Hipercard"">Hipercard</option>
                <option value="Sasageyo">Tatakae</option>
            </select>

            <input type=""submit"" value=""Buscar conta"" />
        </form>
    </fieldset>
</body>
</html>
