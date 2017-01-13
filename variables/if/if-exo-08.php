<?php

$scoreJoueur1 = random_int(0, 100);
$scoreJoueur2 = random_int(0, 100);

echo "scoreJoueur1 == $scoreJoueur1\n";
echo "scoreJoueur2 == $scoreJoueur2\n";

if ($scoreJoueur1 >=50 || $scoreJoueur2 >=50){
  echo "les joueurs peuvent passer au niveau suivant\n";
} else {
  echo "Game Over\n";
}
