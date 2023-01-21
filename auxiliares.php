<?php
function banco($banco)
{
    switch($banco)
    {
        case 1:
            return "Bradesco";
        break;
        case 2:
            return "Caixa Economica";
        break;
        case 3:
            return "Itau";
        break;
        case 4:
            return "N";
        break;
    }
}
?>