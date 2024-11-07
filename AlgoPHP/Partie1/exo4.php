<h1>Exercice 4</h1>

<p>
Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>

<h2></h2>

<?php

$phrase = "engagelejeuquejelegagne";
$phraseMinus = mb_strtolower($phrase);

if strrev($phraseMinus) === $phrase {
    echo "La phrase est un palindrome";
}
else {
    echo "La phrase n'est pas un palindrome";
}



// echo $phraseMinus."<br>";

// echo strrev($phraseMinus);
