<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h3>Opdracht 1</h3>

    <?php

    function is_prime($number){

        $x = sqrt($number);
        $x = floor($x);
        for ($i = 2; $i < 100; $i++) {
            if ($number % $i == 0) {
                $x++;
            }
        }

        if ($x == 2) {
            echo "'$number' is a prime nr";
        } else {
            echo "'$number' is not a prime nr";
        }
    }
    is_prime('1');
    is_prime('2');
    is_prime('5');
    is_prime('10');

    ?>


<h3>Opdracht 2</h3>

<?php

function reverseString($string){
    $n = strlen($string);
    for ($i = $n; $i> -1; $i-- ){
        echo ($string [$i]);
    }
}

reverseString("This is a string");

?>

<h3>Opdracht 3</h3>

<?php

function checkLowerCase($string){
    if (ctype_lower($string)) {
        echo "'$string' consists of all lowercase letters.", '<br>' ;
    } else {
        echo "'$string' does not consist of all lowercase letters.", '<br>';
    }
}
      
checkLowerCase('uw warmtewisselaar lekt aan de bovenkant');
checkLowerCase('U Kunt Bij Ons Een Offerte Voor Een Niewe Ketel Aanvragen');

?>

<h3>Opdracht 4</h3>

<?php

$person = [
    'name' => 'Marije',
    'age'=> 31,
    'hair' => 'brown',
    'career' => 'biologist'
];

function sortArray($array){
    ksort($array);
    foreach ($array as $key => $value){
        echo "$key = $value<br>";
    }
}

sortArray($person);

?>

<h3>Opdracht 5</h3>

<?php

function kiesGerecht ($name, $age){
if ($age <18){
    echo  "'$name', je bent niet oud genoeg om te stemmen.<br>";
} else {
    echo "'$name', je mag stemmen. <br>";
}
}

kiesGerecht('Anne', 16);
kiesGerecht('Rik', 24);

?>


</body>

</html>