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
    <!-- Write a function to check whether a number is prime or not. -->

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
<!-- Write a function to reverse a string. -->

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
<!-- Write a PHP function that checks whether a string is all lowercase. -->

<?php

// function checkLowerCase($string) {
//     $array = (explode(" ", $string));
//     $n = count($array);
//     for($i = 0; $i < $n; $i++) {
//         if (ctype_lower($array[$i])) {
//             echo "Yes\n";
//         } else {
//             echo "No\n";
//         }
//     }
// }


// function checkLowerCase($string){
//     if (ctype_lower($string)) {
//         echo "'$string' consists of all lowercase letters.", '<br>' ;
//     } else {
//         echo "'$string' does not consist of all lowercase letters.", '<br>';
//     }
// }

function checkLowerCase($string){
    if ($string === strtolower($string)) {
        echo "'$string' consists of all lowercase letters.", '<br>' ;
    } else {
        echo "'$string' does not consist of all lowercase letters.", '<br>';
    }
}

checkLowerCase('uw warmtewisselaar lekt aan de bovenkant');
checkLowerCase('U Kunt Bij Ons Een Offerte Voor Een Niewe Ketel Aanvragen');

?>

<h3>Opdracht 4</h3>
<!-- Write a function to sort an array.  -->
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
<!-- Write a PHP function that checks whether a person is eligible to vote. -->
<!-- Condition
Je moet een parameter naam en leeftijd kunnen als parameter kunnen passen aan je function.
Je moet dynamisch kunnen outputten met echo of de persoon oud genoeg is om te stemmen. -->

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