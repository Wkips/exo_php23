<?php

const taux1 = 0.09;
const taux2 = 0.14;
function CalculImpot(float $revenu):float
{
    $impot = 0;


    if ($revenu<=15000) {
        $impot = $revenu * taux1;
    } else {
        $impot = 15000 * taux1 + ($revenu - 15000) * taux2;

    }
    return round($impot, 2); 
    # code...
}


echo var_export($_GET, true);


if (!empty($_GET["txtrevenu"]) && !empty($_GET["txtnom"]) ) {

    $result = CalculImpot($_GET["txtrevenu"]);
    echo "<p>Bonjour M.(e)" . $_GET["txtnom"] . " votre impots sur le revenu est de : " . $result."€</p>";
}

