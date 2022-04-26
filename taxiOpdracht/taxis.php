<?php

// Pick a driver

class driver {

public $taxis = [
    "Chang" => "GR75931",
    "Mendel" => "GR7593",
    "Bennett" => "GR4125",
    "Rovelli"=> "GR4196"
];

    public function assignToMessage (){
        $key = array_rand($this ->taxis);
        echo "Ride has been assigned to: " . $key . ", ". $this -> taxis[$key] ;
    }

}

$object1= new driver ();
echo $object1 -> assignToMessage ();

?>

