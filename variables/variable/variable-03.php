<?php
// conversion du type integer vers float
$nombreVirgule = (float) 42;
$nombreVirgule = floatval (42);
echo $nombreVirgule . "\n";

//converstion du type float vers integer avec la fonction floatval
$nombreEntier = (int) 3.56;
$nombreEntier = intval (3.56);
echo $nombreEntier . "\n";

//convertion du type float vers integer avec la fonction intval
$nombreEntier2 = (int) 2.9;
$nombreEntier2 = intval (2.9);
echo $nombreEntier2 . "\n";

//arrondir un float vers un integer en utilisant la fonction round
$nombreEntier3 = round (2.9);
echo $nombreEntier3 . "\n";
