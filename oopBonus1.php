<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h2>Eindopdrachten</h2>
<h3>Opdracht 1</h3>
<!-- 
Een taxibedrijf heeft een aantal taxi‟s. De volgende tarieven worden gehanteerd:

Per gereden km € 0,50. 
Daarboven per gereden minuut € 0,17. 
Van vrijdagavond 22.00 uur tot maandagochtend 7.00 uur geldt een toeslag van 15% (het begintijdstip is hiervoor bepalend).

Er dient een programma te worden ontwikkeld waarmee voor iedere taxirit de begin-en eindtijd (formaat hhmm), 
evenals de weekdag en de afstand kunnen worden ingevoerd. Voor elke rit moet het verschuldigde bedrag worden berekenden getoond. 

Verder moeten getoond kunnen worden:
cumulatief de totale inkomsten van het taxibedrijf.
De gemiddelde afstanden over alle gereden ritten. 
De langste ritafstand. -->


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Weekday: <select name="weekday">
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thursday">Thursday</option>
  <option value="Friday">Friday</option>
  <option value="Saturday">Saturday</option>
  <option value="Sunday">Sunday</option>
</select><br>
  Begintijd: <input type="time" name="begintijd"> <br>
  Eindtijd: <input type="time" name="eindtijd"> <br>
  <input type="submit">
</form>

<?php

class Tarief {

    public $distance;
    Public $minutes;
    // public $toeslag;

    public function __construct($distance, $minutes)
    {
        $this-> distance = $distance;
        $this-> minutes = $minutes;
        // $this-> toeslag = $toeslag;
    } 

    public function startTime(){
        echo "hallo";
            
    }

        // Used startTime as a callback function within calculatePrice
    public function calcuatePrice(){
        $x = $this -> distance * 0.5;
        echo $x . "<br>";
        $y = $this -> minutes *0.17;
        echo $y . "<br>";
        if ("startTime" === true) {
            $z = $this -> distance * 1.15;
            echo $z . "<br>";
            return $x + $y + $z;
        } else 
        echo "The price of my ride is $" . $x + $y;
    }
}


$myRide = new Tarief(20, 15);
$myride->startTime();
var_dump($myRide);
echo "<br>";
echo $myRide-> calcuatePrice(); 
echo "<br>";



// cumulatief de totale inkomsten van het taxibedrijf.
// De gemiddelde afstanden over alle gereden ritten. 
// De langste ritafstand.

class Administratie extends Tarief { 

    public $inkomsten;
    public $afstanden;

    public function __construct($inkomsten, $afstanden)
    {
        $this-> inkomsten = $inkomsten;
        $this-> $afstanden = $afstanden;
    } 

    public function totaleInkomsten (){

    }

}



?>








</body>
</html>