<?php
class ConnectionDB{
   public function connectionDB(){
      return mysqli_connect('localhost','root','','automanager');
   }
}

$connectiondb = new ConnectionDB();
$db=$connectiondb->connectionDB();
?>