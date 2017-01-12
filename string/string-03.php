<?php
$texte= 'foo bar baz';
// attention : avec des simples quotes :
// - les variables ne sont pas interpollées
// - les caractères échappés (\n par exemple) ne sont pas interprétés
echo '$texte\n';
