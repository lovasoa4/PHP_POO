<?php
include('../controller/VehiculeController.php');
include('../db/ConnectionDB.php');


if(isset($_POST['immatricule']) && $_POST['immatricule']!=null){
     $immatriculation=$_POST['immatricule'];
     $vehicules=$vehiculeControler->allVehicule($db);
     foreach($vehicules as $vehicule){
        if($vehicule->getImmatricule()==$immatriculation){
            $vehicule->deleteVehicule($db);
            header('Location: ../view/index.php');
exit;

        }
     }
}else{
     header('Location: ../view/index.php');
exit;

}


?>