<?php
session_start();
include "banco.php";
?>
<form action="Inicio.php" method="POST">
<fieldset>
        <legend>BN Midas</legend>
        <label>
        Qual banco deseja acessar?
        <input type="radio" name="banco" value="1" checked />
        Bradesco
        <input type="radio" name="banco" value="2" />
        Caixa
        <input type="radio" name="banco" value="3"/>
        ITAU
        </label>
</fieldset>
    <input type="submit" value="Acessar banco" />
</fieldset>
</form>
<?php if($_POST){
    $banco= $_POST['banco'];
    switch($banco){
        case 1 :
            header('Location:banco1.php');
        break;
        case 2 :
            header('Location:banco2.php');
        break;
        case 3 :
            header('Location:banco2.php');
        break;
    }
}
    
?>