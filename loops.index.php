<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Opdracht 1</h2>
<?php

for ($i=0; $i<=9; $i++) {
    echo "$i-";
  }
echo "10"
?>

<h2>Opdracht 2</h2>
<?php


for($i=0; $i<=29; $i++) {
    $sum = $sum+ $i;
}
echo $sum;
?>


<h2>Opdracht 3</h2>
<?php

for ($i=0; $i<5; $i++) {
    for ($j=0; $j<=$i; $j++) {
        echo '*';
    }
    echo "<br>";
}
?>

<h2>Opdracht 4</h2>
<?php

for ($i=0; $i<5; $i++) {
    for ($j=0; $j<=$i; $j++) {
        echo '*';
    } 
    echo "<br>";
} 
for ($i=0; $i<=5; $i++) {
    for ($j=$i; $j<5; $j++) {
        echo '*';
    } 
    echo "<br>";
} 
?>

<h2>Opdracht 5</h2>
<table style ="border: 1px solid black; width:270px">

<?php

for ($i=0; $i<4; $i++) {
    echo '<tr>';
    for ($j=0; $j<4; $j++) {
        echo '<td style="width: 30px; height: 30px"></td>
        <td style="width: 30px; height: 30px; background-color:black"></td>';
    } 
    echo "<br>";
    echo '</tr>';

    echo '<tr>';
    for ($j=0; $j<4; $j++) {
        echo '<td style="width: 30px; height: 30px; background-color:black"></td>
        <td style="width: 30px; height: 30px"></td>';
    } 
    echo "<br>";
    echo '</tr>';
} 

?>

</table>




</body>
</html>