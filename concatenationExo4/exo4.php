<?php

$nom = "kips";
$prenom="willy";


function nomComplet(string $nom, string $prenom)

{

    return $nom . ' ' . $prenom;

}
echo "je suis " . nomComplet( $nom ,  $prenom).PHP_EOL;





function nomComplet2(string $nom, string $prenom)

{

    return strtoupper($nom) . ' ' . strtolower($prenom);
}
echo "je suis " . nomComplet2( $nom ,  $prenom);

?>