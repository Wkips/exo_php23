<?php

class Pret 
{
//attributs ( description de l'objet)
    private string $nom;
    private float $capital;
    private float $taux_mensuel;

    private int $nbmois;
  // voir avec Franck       
    private float $taux_annuel;


    //fin 
    
//Constructeur
public function __construct(float $_capital, float $taux_annuel,int $_nbannee,string $_lenom="inconnu") {
        $this->capital = $_capital;
        $this->taux_mensuel = $taux_annuel/1200;
        $this->nbmois = $_nbannee * 12;
        $this->nom = $_lenom;
}

//propriétés -> accesseur , modifieur


//methodes
public function calculMensualite(): float
{
        $mensualite = 0;
        $Q = (1 - pow((1 + $this->taux_mensuel), -$this->nbmois));

        $mensualite = ($this->capital * $this->taux_mensuel) / $Q;
        return $mensualite;


        

}
// voir avec franck
public function getTauxMensuel(): float
{
                return $this->taux_mensuel;

}

public function getNom():string 
{
                return $this->nom;
}


function CalculerTableauAmrst():string
{
                $chaine = "";
                return $chaine;   
}

}