<h3>Opdracht 1</h3>

<?php

$color = array('white', 'green', 'red', 'blue', 'black');

echo 
"The memory of that scene for me is like a frame of film forever frozen at that moment:<br> 
the " . $color[2] . " carpet, the " . $color[1] . " lawn, the " . $color[0] . " house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

?>

<h3>Opdracht 2</h3>
<!-- Write a script which will display the following string
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
and the words 'red', 'green' and 'white' will come from $color. -->

<?php

$color = array('white', 'green', 'red');
$n = count($color);

for($i = 0; $i < $n; $i++) {
    echo "<li> $color[$i] </li>";
  }

?>

<h3>Opdracht 3</h3>
<!-- Create a PHP script which displays the capital and country name from the above array $ceu. 
Sort the list by the capital of the country. -->

<?php

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort ($ceu); 

foreach ($ceu as $country => $capital){
    echo "The capital of " . $country . " is " . $capital;
    echo "<br>";
}

?>

<h3>Opdracht 4</h3>
<!-- Write a PHP script to calculate and display average temperature, five lowest and highest temperatures -->

<?php

$recordedTemp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$n = count($recordedTemp); //30

for($i=0; $i<=$n; $i++) {
    $sum = $sum+ ($recordedTemp[$i]);
}

echo "Average Temperature is : ", round( ($sum / $n), 1) , '<br>'; // Average Temperature is : 70.6 

// List of five lowest temperatures : 60, 62, 63, 63, 64, 
sort($recordedTemp);
echo "List of five lowest temperatures: ";
    for($i = 0; $i < 4; $i++) {
    echo $recordedTemp[$i];
    echo ", ";
  }
  echo $recordedTemp[5];
 echo '<br>';

// List of five highest temperatures : 76, 78, 79, 81, 85,
rsort($recordedTemp);
echo "List of five highst temperatures: ";
for($i = 0; $i < 4; $i++) {
    echo $recordedTemp[$i];
    echo ", ";
  }
  echo $recordedTemp[5];
 echo '<br>';

?>

<h3>Opdracht 5</h3>
<!-- Write a PHP script that displays the highest temperature that day and which city this was in. -->

<?php

$weeklyTemps = [
    "Maandag" => [ 
    	"Groningen" => 25,
        "Assen" => 12,
       	"Emmen" => 19
    ],
     "Dinsdag" => [ 
    	"Groningen" => 26,
        "Assen" => 28,
        "Emmen" => 19
    ],
     "Woensdag" => [ 
    	"Groningen" => 16,
        "Assen" => 30,
        "Emmen" => 35
    ]
];

foreach($weeklyTemps as $weekDay => $cityTemp) {
        
    asort($cityTemp);

        foreach($cityTemp as $city => $temp){
        }
        $temp[0];

        echo "De hoogste temperatuur op " . $weekDay . ", was " . $temp . " in ". $city . ".";
        echo "<br>";
    }
?>