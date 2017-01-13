<?php

$i = random_int(1, 10);
$j = random_int(1, 10);
$k = random_int(1,10);

echo "i == $i\n";
echo "j == $j\n";
echo "k == $k\n";


if (($i > 5 && $j > 5)
  || $k >5 ) {
    echo "i et j sont plus grand que 5, ou k est plus grand que 5\n";
}

if ( ($i > 5 && $k > 5)
  || ($j > 5 && $k > 5)
){
  echo "(i > 5 et k > 5) ou (j > 5 et k > 5)\n";
}
