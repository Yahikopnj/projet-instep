<?php 


namespace App\FormateurInstep;




class Formateur{

private $lastname;
private $firstname;
private $phone_number;
private $type_contract;
private $salary;
private $costs;
private $criminal_record;

public function __construct($lastname, $firstname,$phone_number,$type_contract,$salary,$costs,$criminal_record)
{
    $this-> lastname = $lastname;
    $this-> firstname = $firstname;
    $this-> phone_number = $phone_number;
    $this-> type_contract = $type_contract;
    $this-> salary = $salary;
    $this-> costs = $costs;
    $this-> criminal_record = $criminal_record;
}

public function setLastname($last){
    $this->lastname = $last;
}

public function getLastname(){
    return $this->lastname;
}


public function setFirstname($last){
    $this->firstname = $last;
}

public function getFirstname(){
    return $this->firstname;
}

public function setPhone_number($last){
    $this->phone_number = $last;
}

public function getPhone_number(){
    return $this->phone_number;
}


public function setType_contract($last){
    $this->type_contract = $last;
}

public function getType_contract(){
    return $this->type_contract;
}


public function setSalary($last){
    $this->salary= $last;
}

public function getSalary(){
    return $this->salary;
}

public function setCosts($last){
    $this->costs = $last;
}

public function getCosts(){
    return $this->costs;
}

public function setCriminal_record($last){
    $this->criminal_record = $last;
}

public function getCriminal_record(){
    return $this->criminal_record;
}

static function says(){
    echo "ekipafond";
}

}

?>