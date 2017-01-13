<?php

$i = random_int (1, 50);

echo "i == $i\n";

if ($i < 10) {
  echo "i est  inférieur à 10\n";
} elseif ($i < 20) {
  echo "i est inférieur à 20\n";
} elseif ($i < 30) {
  echo "i est inférieur à 30\n";
} elseif ($i < 40) {
  echo "i est inférieur à  40\n";
} else {
  echo "i est supérieur ou égal à  40\n";
}
