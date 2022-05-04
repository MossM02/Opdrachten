<?php

class Administratie {

    //ritten properties that will hold all the rides.
    public $inkomsten = [];
    public $afstanden  = [];

    //constructor initializes an array
    public function __construct($inkomsten=0, $afstanden=0){
        $this->inkomsten = array($inkomsten);
        $this->afstanden = array($afstanden);
    }

    public function getInkomsten (){
        return $this->inkomsten;
    }

    public function getAfstanden (){
        return $this->afstanden;
    }

    // Caluclate total Profit 
    public function totaleInkomsten(){
        $sum = (array_sum( $this->inkomsten));
        echo "De totale inkomsten van het bedrijf zijn $" . round ($sum, 2) . "<br>";
    }

    // Calculate average distance
        public function calcAverageDistance () {
            $n = count($this -> afstanden);
            $sum = (array_sum( $this->afstanden));
            echo "De gemiddelde afstand over alle gereden ritten is: ". round(($sum / $n), 1). " km." . '<br>';
    
        }
        
        // Calculate maximum distance
        //     public function calcMaximumDistance(){
        // rsort($this -> afstanden);
        // $max = $this -> afstanden[0];
        // echo "De langste ritafstand is: " . $max . " km." . "<br>";
        // }
               
    public function calcMaximumDistance(){
        $maxDistance = $this->afstanden[0];
        foreach($this->afstanden as $afstand){
            if($this ->afstand> $maxDistance){
                $maxDistance = $afstand;
            }
        }
        return  $maxDistance;
    }
 
}


?>
