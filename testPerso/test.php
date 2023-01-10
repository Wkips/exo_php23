<form method="GET" action="index.php" enctype="text/plain">
    <label for="impots"> Renseignez votre nom et vos revenu: </label>
    <input type="text" placeholder="saisir nom" name="nom" id="nom">
    <input type="text" placeholder="sasir revenu" name="revenu" id="revenu">
    <br>
    <input type="submit" value="envoyer" id="btnenvoyer" name="btnenvoyer">
  

<?php
$revenu="revenu";
$pourcentage= ($revenu*9)/100;


function Calcul(int $revenu)
{
    if ($revenu<15000) {echo 
   "vous devez payer "
    }
    # code...
}


?>

