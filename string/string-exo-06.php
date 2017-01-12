<?php

//initialisez une variable $t avec une chaîne de caractères multiligne de votre choix
//en utilisant la notattion heredoc

$t = <<< EOT
lorem ipsum
lorem ipsum
lorem ipsum

EOT;
echo $t ;

//notation nowdoc

$text2 =  <<<'EOT'
$foo
"lorem ipsum"
'foo bar baz'

EOT;

echo $t
