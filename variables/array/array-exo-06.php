<?php

$tableau = [];

$tableau[] = 123;
$tableau[] = 3.14;
$tableau[] = 'foo bar baz';
$tableau[] = true;

$elements = count($tableau);

 echo $tableau[$elements -1] . "\n";
