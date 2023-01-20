
<?php

$motdepasse="Azertyy";


function PasswordLength(string $motdepasse):bool
{
    if (strlen($motdepasse) >= 8) {
        return true;
    }
    return false;
}


?>





