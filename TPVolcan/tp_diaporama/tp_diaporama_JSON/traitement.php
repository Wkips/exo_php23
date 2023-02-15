<?php

$tabjson = json_decode(file_get_contents("diapo.json",true));
//var_export($tabjson);

$min=0;
if (!empty($_GET["txtmin"]))
 {
$min=$_GET["txtmin"]-1;    
}

$max=count($tabjson);
if (!empty($_GET["txtmax"]))
{
    $max=$_GET["txtmax"];
}

$longueur = $max-$min;
$soustabjson = array_slice($tabjson,$min,$longueur);
echo (json_encode($soustabjson));
