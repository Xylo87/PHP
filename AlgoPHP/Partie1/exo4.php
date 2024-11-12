<h1>Exercice 4</h1>

<p>
Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";

$phraseMinus = strtolower($phrase);
$phraseSpace = str_replace(" ", "", $phraseMinus);
$phraseReverse = strrev($phraseSpace);

// => Suite de l'algorithme avec la phrase de l'énoncé
// $phraseMaj = ucfirst($phraseReverse);
// $phraseFinal = substr($phraseMaj, 0, 6)." ".substr($phraseMaj, 6, 2)." ".substr($phraseMaj, 8, 3)." ".substr($phraseMaj, 11, 3)." ".substr($phraseMaj, 14, 2)." ".substr($phraseMaj, 16, 2)." ".substr($phraseMaj, 18, 5);

if ($phraseSpace === $phraseReverse) {
    echo "La phrase est un palindrome.";
}
else {
    echo "La phrase n'est pas un palindrome.";
}

// => Condition avec la phrase de l'énoncé
// if ($phraseFinal === $phrase) {
//     echo "La phrase « Engage le jeu que je le gagne » est un palindrome.";
// }
// else {
//     echo "La phrase « Engage le jeu que je le gagne » n'est pas un palindrome.";
// }
