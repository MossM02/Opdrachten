<?php

require 'rides.php';

// cumulatief de totale inkomsten van het taxibedrijf.
// De gemiddelde afstanden over alle gereden ritten. 
// De langste ritafstand.

class bedrijfsadministratie extends rides
{

    public $inkomsten;
    public $afstanden;

    public function __construct($inkomsten = 0, $afstanden = 0)
    {
        $this->inkomsten = $inkomsten;
        $this->$afstanden = $afstanden;
    }

    public function totaleInkomsten()
    {

        $n = count($this->ritten);
        for ($i = 0; $i < $n; $i++) {
            $sum = $sum + $this->ritten[$i];
        }
        echo "De totale inkomsten van het bedrijf zijn: " . $sum . "<br>";
    }


    public function totaleAfstanden()
    {
        $n = count($this -> distance);
        for ($i = 0; $i <= $n; $i++) {
            $sum = $sum + ($this -> distance[$i]);
        }

        echo "De gemiddelde afstand over alle gereden ritten is: ", round(($sum / $n), 1), '<br>';
        echo "De langste ritafstand is: " . $sum . "<br>";
    }
}


$overzicht = new bedrijfsadministratie();
echo $overzicht->totaleInkomsten();
echo "<br>";
