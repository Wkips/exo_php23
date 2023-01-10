<?php
//EXERCICE 4.D
//Créez une fonction « capitalCity() » qui accepte un argument de type string (le pays dont on cherche la capitale).
//Elle devra retourner le nom de la capitale des pays suivants 
//France => Paris
//Allemagne => Berlin
//Italie => Rome
//Maroc => Rabat
//Espagne => Madrid
//Portugal => Lisbonne
//Angleterre => Londres
//Si le pays ne fait pas partie de la liste ci-dessus, la fonction retourne la valeur « Capitale inconnue ».
//Note : Utilisez la structure SWITCH pour faire cet exercice */

function capitalCity(string $country) : string
{
        $capitale = "";
    switch ($country)
    {
            case  'France':
                    $capitale ='Paris';
            break;

            case 'Allemagne':
                    $capitale= 'Berlin';
            break;

            case  'italie':
                    $capitale= 'rome';
            break;

            case 'Maroc':
                    $capitale= 'Rabat';
            break;

            case  'Espagne':
                    $capitale= 'Madrid';
                break;
            case 'Portugal':
                    $capitale='Lisbonne';
                break;

            case 'angleterre';
                $capitale= 'londres';
            break;
           
            default ;
        $capitale= 'ce n est pas dans la liste';
    
    
    }
        return $capitale;
}

$country = "Espagne";


echo (capitalCity($country));

?>