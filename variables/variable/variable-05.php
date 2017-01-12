<?php

$nombreEntier = 123;
$nombreVirgule = 3.14;
$texte = 'foo bar baz' ;
$texte2= 'foo bar baz ' ;
$matin = true;
$aprem = false;

$resultat = (string) $nombreEntier;
$resultat = strval ($nombreEntier);

var_dump ($resultat);

$resultat = (string) $nombreVirgule;
$resultat = strval ($nombreVirgule);

var_dump ($resultat);

$resultat = (string) $matin;
$resultat = strval ($matin);

var_dump ($resultat);

$resultat = (string) $aprem;
$resultat = strval ($aprem);

var_dump ($resultat);
