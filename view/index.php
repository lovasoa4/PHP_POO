<?php
//include('../model/Transport.php');
include('../controller/VehiculeController.php');
// include('../model/Vehicule.php');
include('../db/ConnectionDB.php');




$tabVehicule = $vehiculeControler->allVehicule($db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/bootstrap/css/bootstrap.min.css">
    <script src="/view/bootstrap/js/bootstrap.bundle.js"></script>
    <title>Document</title>
</head>
<body>
  <?php
  include('./navBar.php')
  ?>
  <h1 class="text-center">vehicule</h1>

    
<table class="table text-center">
  <thead>
    <tr>
      <th scope="col" class="table-info">Type</th>
      <th scope="col" class="table-info">Model</th>
      <th scope="col" class="table-info">marque</th>
      <th scope="col" class="table-info">nbr roues</th>
      <th scope="col" class="table-info">immatricule</th>
      <th scope="col" class="table-info">suprimer</th>
    </tr>
  </thead>
  
  <tbody>
    <?php
    if(!empty($tabVehicule)){
      foreach($tabVehicule as $vehicule){
          echo "<tr>
                    <th scope='row'>".$vehicule->getType()."</th>
                   
                    <td>".$vehicule->getModel()."</td>
                    <td>".$vehicule->getMarque()."</td>
                    <td>".$vehicule->getNbrRoues()."</td>
                    <td>".$vehicule->getImmatricule()."</td>
                    <td><form action='../service/VehiculeService.php' method='post'>
                            <input type='hidden' name='immatricule' value='".$vehicule->getImmatricule()."'>
                            <button type='submit' class='btn btn-danger'>suprimer</button>
                        </form>
                    </td>
                </tr>";
      }
  }else{
      echo "<p>pas de vehicule</p>";
  }
    
    
    
    ?>
  
 


  </tbody>
</table>
</body>
</html>