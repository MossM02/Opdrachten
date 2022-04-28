
<?php

class Ride {

    public $distance;
    Public $minutes;

    public function __construct($distance, $minutes)
    {
        $this-> distance = $distance;
        $this-> minutes = $minutes;
    } 

    public function startTime(){
        $day = date ('l');
        $time = date ('H');

        echo 'The starting time of my ride is ' . date ('l H:i') . '<br>'; 
            if ($day === 'Saturday' || $day === 'Sunday') {
                return true;
                echo 'Een toeslag is van toepassing'. '<br>';
              } elseif ($day === 'Friday' && $time >= "22") {
                return true;
                echo 'Een toeslag is van toepassing'. '<br>';
              } elseif ($day === "Monday" &&  $time <= "7") {
                echo 'Een toeslag is van toepassing'. '<br>';
                return true;
              } else {
                echo "Geen toeslag, yay!" . "<br>";
                return false;
              }   
    }

        // Used startTime as a callback function within calculatePrice
    public function calcuatePrice(){
        $x = $this -> distance * 0.5;
        echo "The distance of my ride (km) is: " . $x *2 . "<br>";
        $y = $this -> minutes *0.17;
        // echo $y . "<br>";
        if ("startTime" === true) {
            $toeslag = $this -> distance * 1.15;
            // echo $toeslag . "<br>";
            return $x + $y + $toeslag;
        } else 
        echo "The price of my ride is $" . $x + $y. "<br>";

    }
}


?>



