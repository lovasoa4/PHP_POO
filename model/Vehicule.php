<?php

include_once('Transport.php');

class Vehicule extends Transport{

    private $nbrRoues;

    public function __construct()
    {
        $this->nbrRoues = 4;
        
    }
    public function getNbrRoues(){
        $sedeplace = Parent::deplace();
        return "Nombre de roues pour les vehicules =".$this->nbrRoues." et selon parent dia =".$sedeplace;
    }

    public function getAttributVehicule(){
        $sedeplace = Parent::deplace();
        $tabVehicle = array($this->getType(),$this->getImmatricule(),"w",$sedeplace,$this->nbrRoues);
        return $tabVehicle;
    }

    private function getImmatricule(){
       return "8697 TAB";
    }
    private function getType(){
        return "Camion";
    }




  
}

?>