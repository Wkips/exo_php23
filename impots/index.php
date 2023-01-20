<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul impôt</title>

    <style>
        fieldset { width:30%;
        background-color: #eee;
    border-radius: 12px;
    margin-left: auto;
    margin-right: auto;}

    input { margin-bottom: 10px; }
    p { text-align: center;}
    </style>
</head>
<body>
<?php

require("./models/comptable.php");

if (!empty($_GET["txtnom"]) && !empty($_GET["txtrevenu"])) 
{

    $monObj = new Comptable($_GET["txtnom"], $_GET["txtrevenu"]);
//
    $impot = round($monObj->calculImpot(), 2);
    echo "<p>MR(e) " . strtoupper($_GET["txtnom"]) . " Votre impot sur le revenu est de :" . $impot . " € </p>";

} 






?>


<form method="GET" action="index.php">
    <fieldset> 
        <legend> Renseignez votre nom et vos revenu:</legend>

        <input type="text" placeholder="saisir nom" name="txtnom" id="nom" value="<?= $_GET['txtnom'] ?? ''; ?>">
    <br>
    <input type="number" placeholder="saisir revenu" name="txtrevenu" id="revenu" 
    value="<?php echo !empty($_GET["txtrevenu"]) ? $_GET["txtrevenu"]: "0";  ?>" step="0.01">
    <br>
    <input type="submit" value="envoyer" id="btnenvoyer">
    </fieldset>
</form>

  </body>
</html>
