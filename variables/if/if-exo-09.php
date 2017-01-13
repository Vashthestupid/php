<?php

$scoreJoueur1 = random_int(0, 100);
$scoreJoueur2 = random_int(0, 100);

$bonusJoueur1 = random_int(0, 1);
$bonusJoueur2 = random_int(0, 1);

echo "joueur1 : $scoreJoueur1\n";
echo "joueur2 : $scoreJoueur2\n";
echo "bonusj1 : $bonusJoueur1\n";
echo "bonusj2 : $bonusJoueur2\n";

if (($scoreJoueur1 > 50 && $scoreJoueur2 > 50)
  ||$bonusJoueur1 == 1
   || $bonusJoueur2==1){
    echo "level++\n";
  } else {
    echo "Game Over\n";
  }
