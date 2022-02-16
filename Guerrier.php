<?php

class Guerrier{
    //-----variables-----//
    public $force;
    public $niveau;
    public $nom;
    public $arme;
    public $attaque;

    //------constructor------//
    public function __construct($F, $niveau, $N, $A, $X)
    {
        $this->force = 100;
        $this->niveau = 1;
        $this->nom = $N;
        $this->arme = $A;
        $this->attaque = $niveau * 1.5;
    }

    //-----------geters--------//
    public function getForce(){
        return $this->force;
    }

    public function getNiveau(){
        return $this->niveau;
    }

    
    public function getNom(){
        return $this->nom;
    }
    
    public function getArme(){
        return $this->arme;
    }

    public function getAttaque(){
        return $this->attaque;
    }


    //----------setters --------//
    public function setForce($NewForce){
        $this->force = $NewForce;
    }

    public function setNiveau($NewNiveau){
        $this->niveau = $NewNiveau;
    }

    public function setNom($NewNom){
        $this->nom = $NewNom;
    }

    public function setArme($NewArme){
        $this->arme = $NewArme;
    }

    public function setAttaque($NewAttaque){
        $this->attaque = $NewAttaque;
    }

    //------mÃ©thode------//

    public function levelUp(){
        
        return $this->niveau+1;

    }

    public function AttaqueCoupDeHache(){
        
       
        return "Attaque : " . $this->attaque.'<br>';

    }



}


?>