<?php

$administratie = new Administratie();

// voeg taxis toe aan het bedrijf
$taxis = [
  new Taxi('GR1672'),
  new Taxi('GR7531'),
  new Taxi("GR7593"),
  new Taxi("GR4125")
];

// instantieer ritjes met benodigde data
$rides = [
  new Ride("08:00", "12:15", "Monday", "150"),
  new Ride("10:00", "11:15", "Saturday", "50"),
  new Ride("20:00", "20:25", "Friday", "30"),
  new Ride("13:43", "15:12", "Tuesday", "75")
];


// voeg taxis toe aan admin
foreach ($taxis as $taxi){
  $administratie -> addTaxi();
}


// voeg ritten toe aan Taxis
foreach ($rides as $ride){
  $taxi -> assignToMessage ();
}


// voeg ritten toe aan admin
foreach ($rides as $ride) {
  $x = $ride->getDistance();

  $ride->calculatePrice();
  $y = $ride->getPrice();
  $administratie->totaleInkomsten($y);
}

//langste ritafstand
$maxDistance = $administratie->calcMaximumDistance($x);
echo $maxDistance  . "<br>";




?>


<!-- // IN A REAL APP YOU RETRIEVE DATA FROM A DATABASE.
    // IN THIS EXAMPLE YOU CAN HARD CODE THE DATA YOU NEED TO TEST.
    // WRITE YOUR LOGIC FOR YOUR APP HERE.
    // $example = new Example();
    // $example->addSomething("data!");
    // $example->doSomething();
    // $example->showSomething(); -->