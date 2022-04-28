<?php

class Administratie {

    //ritten properties that will hold all the rides.
    public $inkomsten;
    public $afstanden;

    //constructor initializes an array
    public function __construct($inkomsten, $afstanden){
        $this->inkomsten = [24, 53, 82, 26, 41];
        $this->afstanden = [20, 45, 67, 18, 36];
    }

    // Caluclate total Profit 
    public function totaleInkomsten(){
        $sum = (array_sum( $this->inkomsten));
        echo "De totale inkomsten van het bedrijf zijn $" . round ($sum, 2) . "<br>";
    }

    // Calculate average and maximum distance
    public function totaleAfstanden(){

        rsort($this -> afstanden);
        $max = $this -> afstanden[0];
        echo "De langste ritafstand is: " . $max . " km." . "<br>";

        $n = count($this -> afstanden);
        $sum = (array_sum( $this->inkomsten));
        echo "De gemiddelde afstand over alle gereden ritten is: ". round(($sum / $n), 1). " km." . '<br>';
    }
}

?>
