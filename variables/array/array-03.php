<?php

//affectation d'un tableau vide
$tab = [];

var_dump($tab);

// ajout de données dans le tableau
$tab[] = 123;
$tab[] = 3.14;
$tab[] = 'foo bar baz';
$tab[] = true;

var_dump($tab);

// affectation 'un tableau avec des données'
$tab2 = [123, 3.14];

var_dump($tab2);

//ajout de données dans le tableau2
$tab2[] = 'foo bar baz';
$tab2[] = 'lorem ipsum';

var_dump($tab2);
