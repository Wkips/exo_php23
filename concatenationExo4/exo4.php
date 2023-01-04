<?php

$nom = "willy";
$prenom="kips";


function nomComplet(string $nom, string $prenom)

{

    return $nom . ' ' . $prenom;

}
echo "je suis " . nomComplet( $nom ,  $prenom);

?>