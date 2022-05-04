<?php

class Taxi {

public $taxis = [];

function __construct($taxis){
    $this -> taxis = array($taxis);
}

// Add new taxi
public function addTaxi(){
    array_push($this -> taxis);
    print_r($this -> taxis);
}

// Pick a cab
    public function assignToMessage (){
        $index = array_rand($this ->taxis);
        echo "Ride has been assigned to: ". $this -> taxis[$index];
    }


// aantal ritten per taxi


}



?>

