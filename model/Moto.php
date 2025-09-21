<?php

include_once('Transport.php');

class Moto extends Transport{

    private $nbrRoues;

    public function __construct()
    {
        $this->nbrRoues = 2;   
    }

    public function getNbrRoues(){
        $sedeplace = Parent::deplace();
        return "Nombre de roues pour la moto est de =".$this->nbrRoues." et selon parent dia=".$sedeplace;
    }
}

?>