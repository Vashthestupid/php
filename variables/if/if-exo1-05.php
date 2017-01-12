<?php

$i = random_int (1, 10);

echo "i == $i\n";

if ($i == 5) {
  echo "i est égal à 5";
} elseif ($i > 5) {
  echo "i est supérieur à 5";
} else {
  echo "i est inférieur à 5";
}
