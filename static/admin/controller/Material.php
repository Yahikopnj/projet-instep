<?php 

class Material{
private $designation;
private $num_serie;
private $quantity;
private $price;
private $etat_material;

public function __construct($designation, $num_serie, $quantity, $price, $etat_material)
{
    $this->designation = $designation;
    $this->num_serie = $num_serie;
    $this->quantity = $quantity;
    $this->price = $price;
    $this->etat_material = $etat_material;
}

public function setDesignation($ok){
    $this->designation = $ok;
} 

public function getDesignation(){
    return $this->designation;
}

public function setNumSerie($ok){
    $this->num_serie = $ok;
} 

public function getNumSerie(){
    return $this->num_serie;
}


public function setQuantity($ok){
    $this->quantity = $ok;
} 

public function getQuantity(){
    return $this->quantity;
}

public function setPrice($ok){
    $this->price = $ok;
} 

public function getPrice(){
    return $this->price;
}

public function setEtatMaterial($ok){
    $this->etat_material = $ok;
} 

public function getEtatMaterial(){
    return $this->etat_material;
}


}



?>