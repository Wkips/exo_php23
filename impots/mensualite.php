<!DOCTYPE html>
<html lang="fr-fr">
<head>

    <meta charset="utf-8">
    <title>mensualite</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header><!-- En tete du site(logo, menus horizontaux, banniere)--><h1>Header</h1></header>

 

    <main><!-- Contenu principal de la page  -->
      <form method="GET" action="mensualite.php" enctype="text/plain">
        <fieldset>

        <legend>Coordonnées Emprunt : </legend>
        <br>
    <label for="capital"> Capital emprunté : </label>  
        <input type="number" placeholder="capital emprunté" name="capital" id="capital">
    <br>
    <label for="taux_annuel">Taux interet en % : </label>  
        <input type="number" placeholder="Taux interet en %" name="taux_annuel" id="taux_annuel">
      <br>

      <label for="nbannees">Duree de remboursement en année : </label>  
        <input type="number" placeholder="Durée de remboursement en annee " name="nbannees" id="nbannees">
        <br>
      

        <input type="submit" value="calculer" name="validation" id="validation"><br>
        <label for="mensualite"> Votre mensualite est de :</label>

        <input type="text"  placeholder="mensualite" name="mensualite" id="mensualite" readonly="true">
        </fieldset>
      </form>
       <?php
    
       ?>
    </main>
    

    <footer><!-- Pied de page de la page (Copyright reseaux sociaux plan du site)--></footer>
 
</body>
</html>