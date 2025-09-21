<?php

include_once("../model/Vehicule.php");

class VehiculeController{

    public function affiche(){
        $vehicule = new Vehicule();
        $tabVehicle = $vehicule->getAttributVehicule();
        return $tabVehicle;
    }

}


?>