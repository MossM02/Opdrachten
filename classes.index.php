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
<!-- Write a simple PHP class which displays the following string.
'MyClass class has been initialized!' -->

<?php

use JetBrains\PhpStorm\NoReturn;

class Simple {

    public function message (){
        echo 'MyClass class has been initialized!';
    }
}

$object1= new Simple ('object1');
echo $object1 -> message ();

?>


<h3>Opdracht 2</h3>
<!-- Write a simple PHP class which displays an introductory message like
 "Hello All, I am Scott", where "Scott" is an argument value of the method within the class. -->

<?php

class Simple2 {

    public function introMessage ($name){
        echo "Hello All, I am  $name ";
    }
}

$object1= new Simple2 ('object1');
echo $object1 -> introMessage ('Scott');

?>


<h3>Opdracht 3</h3>
<!-- Write a PHP calculator class which will accept two values as arguments, 
then add them, subtract them, multiply them together, or divide them on request.

For example :
$mycalc = new MyCalculator( 12, 6);
echo $mycalc- > add(); // Displays 18
echo $mycalc- > multiply(); // Displays 72 -->


<?php

class MyCalculator {

    public $num1;
    Public $num2;
    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    } 

    public function add(){
       return  $this->num1 + $this->num2;
    }

    public function subtract(){
        return  $this->num1 - $this->num2;
    }

    public function multiply (){
        return  $this->num1 * $this->num2;
    }

    public function divide(){
        return  $this->num1 / $this->num2;
    }
}


$mycalc = new MyCalculator( 12, 6);
echo $mycalc-> add(); // Displays 18
echo "<br>";
echo $mycalc-> multiply(); // Displays 72
echo "<br>";
?>

</body>
</html>