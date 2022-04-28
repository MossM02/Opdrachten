<?php

class Taxi {

public $taxis;

function __construct($taxis=0){
    $this -> taxis = ["GR7531",    "GR7593",    "GR4125",    "GR4196"];
}

// Add new taxi
public function addTaxi($taxi){
    array_push($this -> taxis, $taxi);
    // print_r($this -> taxis);
}

// Pick a cab
    public function assignToMessage (){
        $index = array_rand($this ->taxis);
        echo "Ride has been assigned to: ". $this -> taxis[$index] ;
    }
}


?>

