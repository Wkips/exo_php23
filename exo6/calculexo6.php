<!-- Dans un fichier « 06-calculs.php », créer une fonction « somme() ». Elle prendra deux arguments de type int. Elle devra retourner la somme des deux valeurs  -->
<?php

function somme($nombre1 , $nombre2)
{
    $resultat = $nombre1 + $nombre2;
    return $resultat;
}

echo (somme(2, 5));


function produit($nombre1 , $nombre2)
{
    $resultat = $nombre1 * $nombre2;
    return $resultat;
}

echo (produit(8, 7));



function division($nombre1 , $nombre2)
{
    $resultat = $nombre1 / $nombre2;
    return $resultat;
}

echo (division(5, 2));