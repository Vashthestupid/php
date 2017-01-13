<?php

$t = ['foo', 'bar', 'baz', 'lorem', 'ipsum'];
$i = random_int(0, count($t) -1);
$mot = $t[$i];

echo $mot . "\n";

switch($mot){
  case 'foo':
    echo "Vous avez dit $mot \n";
    break;
  case 'bar':
    echo "Vous avez dit $mot\n";
      break;
  case 'baz':
    echo "Vous avez dit $mot \n";
    break;
  case 'lorem' :
    echo "Vous avez dit  $mot\n";
    break;
  case 'ipsum':
    echo "Vous avez dit $mot \n";
}
