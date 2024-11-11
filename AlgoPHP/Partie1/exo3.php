<h1>Exercice 3</h1>

<p>
A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.
</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui.<br>";
echo $phrase;

$mot_1 = "aujourd'hui";
$mot_2 = "demain";

echo str_replace($mot_1, $mot_2, $phrase);