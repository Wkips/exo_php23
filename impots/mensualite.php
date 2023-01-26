<!DOCTYPE html>
<html lang="fr-fr">
<head>

    <meta charset="utf-8">
    <title>mensualite</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header><!-- En tete du site(logo, menus horizontaux, banniere)--><h1>Header</h1></header>

    <?php

    require "./models/pret.php";
    if (isset($_GET["validation"])) {

        $monpret = new Pret($_GET["capital"], $_GET["taux_annuel"], $_GET["nbannees"],"Testo");

$mensualite= $monpret->calculMensualite();

        echo '<p>Votre pret personalisé Mr(e) '.$monpret->getNom().' est de :'.round ($mensualite,2).' €</p>';
    }

?>
 

    <main><!-- Contenu principal de la page  -->
      <form method="GET" action="mensualite.php" enctype="text/plain">
        <fieldset>

        <legend>Coordonnées Emprunt : </legend>
        <br>
    <label for="capital"> Capital emprunté : </label>  
    <!-- value="=(!empty($_GET["capital"]))?$_GET["capital"]:0 ?>"> memorise la valeur --> 
        <input type="number" name="capital" id="capital"  placeholder="<?=(!empty($_GET["capital"]))?$_GET["capital"]:"capital emprunté" ?>">
    <br>
    <label for="taux_annuel">Taux interet en % : </label>  
        <input type="number" name="taux_annuel" id="taux_annuel" placeholder="<?=$_GET ["taux_annuel"]??"Taux interet en %"  ?>" />
      <br>

      <label for="nbannees">Duree de remboursement en année : </label>  
        <input type="number"  name="nbannees" id="nbannees" placeholder="<?=$_GET["nbannees"]??"Durée de remboursement en annee " ?>" />
        <br>
      

        <input type="submit" value="calculer" name="validation" id="validation"><br>
        <label for="mensualite"> Votre mensualite est de :</label>

        <input type="text"  name="mensualite" id="mensualite" readonly="true" placeholder="<?=(!empty($mensualite))?round( $mensualite,2)."€":"0 €"; ?>">
        </fieldset>
      </form>
       <?php
    
       ?>
    </main>

  <!-- Tableau d'amortissement  -->

<?php
  require"./models/pret.php";
  if (isset($_GET["validation"])) ;
?>
<table> <thead>
    <tr>
    <th>"Numéros de mois </th>
     <th>Intéréts</th> 
     <th>Partie amortissement</th> 
     <th>Capital restant du</th> 
    <th>Mensualités</th>                                                                                                 

    </tr>
     </thead>
     <td> </td>
</table>

    <footer><!-- Pied de page de la page (Copyright reseaux sociaux plan du site)--></footer>
 
</body>
</html>