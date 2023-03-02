<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Gestion Listing Voilier</title>
     
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
    session_start();
    require("./connection.php");
    $myPDO = Connection::getInstance();
    if (isset($_POST["btnEnvoyer"])) {

        if (!empty($_POST["email"]) && !empty($_POST["password"])) {

            $sql = "SELECT * FROM utilisateurs WHERE mail_user =:email";
            $mystatement = $myPDO->prepare($sql);

            $mystatement->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
            $mystatement->execute();
            $nbligne = $mystatement->rowCount();

            if ($nbligne == 1) {
                $ligne = $mystatement->fetch();
                if (password_verify($_POST["password"], $ligne["pass_user"]) == true) {

                    $_SESSION["login"] = $ligne["lastname_user"];
                    $_SESSION["level"] = $ligne["level"];
                    header('Location:liste.php');

                } else {
                    echo "Identifiant ou mot de passe erronee";
                }


            } else {

                echo "Identifiant ou mot de passe erronee";

            }


        } else {


            echo "<P>Veuillez remplir tous les champs</p>";

        }


    }

?>
    <fieldset> <legend>Connexion</legend>
    <h3> ACCES MEMBRES</h3>
    <form  method="post" action="index.php">
    <label for="email">email</label>
    <input type="text" name="email" id="email" placeholder="email" >


    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password" placeholder="Entrez mot de passe" >

        <input type="submit" name="btnEnvoyer" id="btnEnvoyer">
</form>

    </fieldset>


    </body>