<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Gestion Listing Voilier</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
    <?php
    session_start()


?>
    <fieldset>
    <h3> ACCES MEMBRES</h3>
    <form>
    <label for="email">
        <p>email</p>
    <input type="text" name="email" id="email" placeholder="email" >


    <label for="password">
            <p>Mot de passe</p>
    <input type="password" name="password" id="password" placeholder="Entrez mot de passe" >
<p>
    <label for="valider">
        <input type="submit" name="= btnEnvoyer" id="btnEnvoyer">
</form>

    </fieldset>


    </body>