<?php

include_once("../model/Vehicule.php");

class VehiculeController{
    public function allVehicule($db){
        $allVehicule = Vehicule::selectAllVehicule($db);
        $tabVehicle=array();
        while($vehicule=mysqli_fetch_assoc($allVehicule)){
            $v =new Vehicule($vehicule['type'],$vehicule['model'],$vehicule['marque'],$vehicule['immatriculation'],$vehicule['nbrRoues']);
            array_push($tabVehicle, $v);
        }
        return $tabVehicle;
    }

}
$vehiculeControler = new VehiculeController();

?>