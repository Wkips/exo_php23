<?php

class Comptable
{
    // attributs ( description de l'objet)

    private float $revenu;
    private string $nomParticulier;

    private const taux1 = 0.09;
    private const taux2 = 0.14;


    //Construteur
    public function __construct(string $_nomPaticulier, float $_revenu)
    {
        $this->revenu = $_revenu;
        $this->nomParticulier = $_nomPaticulier;


    }


    //propriétés

    //modifieur
    public function setRevenu(float $_nouvRevenu): void
    {
        $this->revenu = $_nouvRevenu;
    }
    //accesseur
    public function getRevenu(): float
    {
        return $this->revenu;

    }

    //methodes ( fonction ou procedure : services que peut rendre l'objet)


public function CalculImpot(): float
    {
        $resimpot = 0;

        if ($this->revenu <= 15000) {
            $resimpot = $this->revenu * self::taux1;

        
        } else {
            $resimpot = 15000 * self::taux1 + ($this->revenu - 15000) * self::taux2;
        }
        return $resimpot;
        
    }

}





