<?php 

require_once("../controller/Material.php");

require_once("../model/DAO.php");


try{
     $bdh = DAO::getDbh();
 $dbh->prepare();
}catch(PDOException $error){
echo $error->getMessage();
}



$bayblade = new Material("design", "num de série", "quantité", "prix","etat materiel");

$bayblade->setQuantity("qualité");

echo $bayblade->getQuantity();

var_dump($bayblade);

?>