<?php

$taxi= new Taxi();
echo $taxi -> addTaxi('GR1672');
echo "<br>";
echo $taxi -> assignToMessage ();
echo "<br>";


$ride = new Ride (15, 20);
echo $ride -> startTime();
echo "<br>";
echo $ride -> calcuatePrice();
echo "<br>";

$administratie= new Administratie(2, 50);
echo $administratie->totaleInkomsten();
echo "<br>";
echo $administratie->totaleAfstanden();
echo "<br>";

?>

<?php
    // IN A REAL APP YOU RETRIEVE DATA FROM A DATABASE.
    // IN THIS EXAMPLE YOU CAN HARD CODE THE DATA YOU NEED TO TEST.
    // WRITE YOUR LOGIC FOR YOUR APP HERE.
    // $example = new Example();
    // $example->addSomething("data!");
    // $example->doSomething();
    // $example->showSomething();

?>