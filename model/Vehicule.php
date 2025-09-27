<?php

include_once('Transport.php');


class Vehicule extends Transport{

    private $nbrRoues;

    public function __construct($type,$model, $marque, $immatriculation, $nbrRoues) {
        parent::__construct($type,$model, $marque, $immatriculation);
        $this->nbrRoues = $nbrRoues;
    }
    public function getNbrRoues(){
       return $this->nbrRoues;
    }
     public function insertVehicule($db){
         $sql=sprintf("DELETE FROM `transport` WHERE immatriculation='%s'");
         $statement=mysqli_query($db,$sql);
    }

    public static function selectAllVehicule($db){
        $nbrRoues=4;
        $sql=sprintf('SELECT * FROM `transport` WHERE nbrRoues=%d',$nbrRoues);
        return $statement=mysqli_query($db,$sql);
    }
    public function deleteVehicule($db){
        $immatriculation=$this->getImmatricule();
         $sql=sprintf("DELETE FROM `transport` WHERE immatriculation='%s'",$immatriculation);
         $statement=mysqli_query($db,$sql);
    }

}

?>