<?php
    if($_POST)
    {
        $_SESSION['banco'][]= banco($_POST['banco']);
    }
    else
    {
        header('Location:Inicio.php');
    }
?>