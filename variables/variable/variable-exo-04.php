<?php

$v = '';

var_dump (boolval($v)); //false

$v = 1.0;

var_dump (boolval($v)); //true

$v = '    ';

var_dump(boolval($v));//true

$v = 0.123;

var_dump(boolval($v));//true

$v = 0.00001;

var_dump(boolval($v));//true

$v = 'foo bar baz'; $v= 0;

var_dump(boolval($v));//false
