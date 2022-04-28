<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Oefen Eindopdracht</title>

    <!-- STYLES ARE INCLUDED HERE -->
    <link rel="stylesheet" href="styles.css">

</head>

<body>

    <div class="flex wrapper">
        <!-- COPY THE ASSIGNMENT YOU CHOOSE TO PRACTICE HERE. -->
        <div class="container">
            <h2 class="text heading">Eindopdrachten - Opdracht 1 </h2>
            <p class="text paragraph">
                Er dient een programma te worden ontwikkeld waarmee voor iedere taxirit de begin-en eindtijd (formaat hhmm), evenals de weekdag en de afstand kunnen worden ingevoerd.
                Voor elke rit moet het verschuldigde bedrag worden berekend en getoond.
            </p>
            <p class="text paragraph">
                Een taxibedrijf heeft een aantal taxi‟s. De volgende tarieven worden gehanteerd:<br>
                Per gereden km € 0,50.
                Daarboven per gereden minuut € 0,17.
                Van vrijdagavond 22.00 uur tot maandagochtend 7.00 uur geldt een toeslag van 15% (het begintijdstip is hiervoor bepalend).
            </p>
            <p class="text paragraph">
                Verder moeten getoond kunnen worden:<br>
                cumulatief de totale inkomsten van het taxibedrijf.<br>
                De gemiddelde afstanden over alle gereden ritten.<br>
                De langste ritafstand.<br>
            </p>
        </div>
        <!-- YOUR APP GOES HERE -->
        <div class="container">
            <p class="text heading">App Output Here:</p>
            <p class="text paragraph">
                <?php
                // ALL THE CLASSES WITH THEIR BEHAVIOR GO IN HERE.
                require 'taxi.php';
                require 'ride.php';
                require 'administratie.php';
                // YOUR APP IS RUN FROM A MAIN FILE.
                require 'controller.php'
                ?>
            </p>
        </div>
    </div>

    <!-- SCRIPTS ARE INCLUDED HERE. -->
    <!-- <script type="text/javascript" src="path/filename.js"></script> -->
</body>