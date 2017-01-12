<?php

$i = random_int (0, 2);
echo "i == $i\n";

if ($i ==0) {
  echo "il n'y a personne";
} elseif ($i == 1) {
  echo "il y a une seule personne";
} else {
  echo "il y a plusieurs personnes";
}
