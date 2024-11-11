<h1>Exercice 4</h1>

<p>
Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";

$phraseMinus = strtolower($phrase);
$phraseReverse = strrev($phraseMinus);
$phraseSpace = str_replace(" ", "", $phraseReverse);
$phraseMaj = ucfirst($phraseSpace);
$phraseFinal = substr($phraseMaj, 0, 6)." ".substr($phraseMaj, 6, 2)." ".substr($phraseMaj, 8, 3)." ".substr($phraseMaj, 11, 3)." ".substr($phraseMaj, 14, 2)." ".substr($phraseMaj, 16, 2)." ".substr($phraseMaj, 18, 5);

if ($phraseFinal === $phrase) {
    echo "La phrase « Engage le jeu que je le gagne » est un palindrome.";
}
else {
    echo "La phrase n'est pas un palindrome.";
}
