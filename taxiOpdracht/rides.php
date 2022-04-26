
<?php

class rides {

    public $ritten = [
        'Bennett' => 15,
        'Rovelli' => 27,
        'Mendel' => 43
    ];


    public $distance = [];
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
        echo $x . "<br>";
        $y = $this -> minutes *0.17;
        echo $y . "<br>";
        if ("startTime" === true) {
            $toeslag = $this -> distance * 1.15;
            echo $toeslag . "<br>";
            return $x + $y + $toeslag;
        } else 
        echo "The price of my ride is $" . $x + $y. "<br>";
    
        // pushing a new item onto the array of ritten?
        array_push($this ->ritten, $x + $y ); 
        print_r($this ->ritten);


    }
}


$ride = new rides(20, 15);
echo $ride-> startTime(); 
echo "<br>";
echo $ride-> calcuatePrice(); 
echo "<br>";

?>



