<?php

$age = random_int (12, 25);
$abonne = random_int (0, 1);

echo "age == $age\n";
echo "abonne == $abonne\n";

if ($age <16){
  echo "non \n";
} elseif ($age >=16 && $abonne ==0){
  echo "non \n";
} elseif ($age >=16 && $abonne ==1){
  echo "oui \n";
}
