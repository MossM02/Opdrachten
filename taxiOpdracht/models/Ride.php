<!-- <?php

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
          echo "Name is empty";
        } else {
          echo $name;
        }
      }

      ?> -->


<?php

class Ride
{

  public $beginTime;
  public $endTime;
  public $weekDay;
  public $distance;
  public $price;

  public function __construct($beginTime, $endTime, $weekDay, $distance, $price=0)
  {
    $this->beginTime = $beginTime;
    $this->endTime = $endTime;
    $this->weekDay = $weekDay;
    $this->distance = $distance;
    $this->price = $price;

  }

  public function getDistance(): string{
    return $this->distance;
  }

  public function getPrice(): string {
    return $this->price;
  }

  public function startTime()
  {
    // $day = date('l');
    // $time = date('H');

    // echo 'The starting time of my ride is ' . date('l H:i') . '<br>';
    echo 'My ride was from ' . $this->beginTime . ' until ' . $this->endTime . ' on ' . $this->weekDay . '<br>';

    if ($this->weekDay === 'Saturday' || $this->weekDay === 'Sunday') {
      echo 'Een toeslag is van toepassing' . '<br>';
      return true;
    } elseif ($this->weekDay === 'Friday' && $this->beginTime >= "22") {
      echo 'Een toeslag is van toepassing' . '<br>';
      return true;
    } elseif ($this->weekDay === "Monday" &&  $this->beginTime <= "07") {
      echo 'Een toeslag is van toepassing' . '<br>';
      return true;
    } else {
      echo "Geen toeslag, yay!" . "<br>";
      return false;
    }
  }

  // Used startTime as a callback function within calculatePrice
  public function calculatePrice()
  {

    // echo "The distance of my ride (km) is: " . $this->distance . "<br>";
    $x = $this->distance * 0.5;

    $minutes = (strtotime($this->endTime) - strtotime($this->beginTime)) / 60;
    $y = $minutes * 0.17;

    if ("startTime" === true) {
      $toeslag = $this->distance * 1.15;
      // echo "The price of my ride is $" . $x + $y + $toeslag . "<br>";
      return $this->price = $x + $y + $toeslag;
    } else
      // echo "The price of my ride is $" . $x + $y . "<br>";
      return $this->price = $x + $y;
  }
}



?>