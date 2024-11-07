<h1>Test</h1>

<?php

$phrase = "Théo";
$nbCaracteres = strlen($phrase);
$anagramme = "J'aime vraiment beaucoup les gâteaux à la banane";

echo "Le mot contient $nbCaracteres lettres<br>";
echo $phrase."<br>";
echo $phrase."<br>";

$phraseMaj = strtoupper($phrase);
echo $phraseMaj."<br>";
echo strtoupper($phrase)."<br>";
echo mb_strtoupper($phrase)."<br>";

echo str_shuffle($anagramme);

?>