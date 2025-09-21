<?php
//include('../model/Transport.php');
include('../controller/VehiculeController.php');
// include('../model/Moto.php');

$vehiculeControler = new VehiculeController();
$attributs = $vehiculeControler->affiche();

foreach($attributs as $key => $value){
    echo $value."<br />";
}

// echo "<br />";

// $moto = new Moto();
// echo $moto->getNbrRoues();

?>