<?php

$scoreJoueur1 = random_int(0, 100);
$scoreJoueur2 = random_int(0, 100);
$bonusJoueur1 = random_int(0,1);
$bonusJoueur2 = random_int(0,1);

echo "scoreJoueur1 : $scoreJoueur1\n";
echo "scoreJoueur2 : $scoreJoueur2\n";
echo "bonusJoueur1 : $bonusJoueur1\n";
echo "bonusJoueur2 : $bonusJoueur2\n";

switch (true) {
  case $scoreJoueur1 > 50 && $scoreJoueur2 > 50:
    echo "level ++\n";
    break;
  case $bonusJoueur1 == 1 || $bonusJoueur2 ==1:
    echo "level++\n";
    break;
  default:
    echo "Game Over\n"; 
}
