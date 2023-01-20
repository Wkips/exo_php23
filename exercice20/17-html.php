<?php

function Html_List(string $_titre,array $_tabList): string
{
    $chaine = "<h3>" . $_titre . "</h3><ul>";
    for ($i=0; $i < count($_tabList); $i++) {
        $chaine .= "<li>" . $_tabList[$i] . "</li>";

    }
    $chaine .= "</ul>";

    return $chaine;

}

$arg1 = "Liste des formateurs";
$tabformateur = ["Mike", "Francky", "Sophie"];

echo Html_List($arg1, $tabformateur);