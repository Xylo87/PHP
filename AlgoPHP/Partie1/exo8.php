<h1>Exercice 7</h1>

<p>
Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :
...
Remarque : proposer 2 solutions avec 2 types de boucles.
</p>

<h2>Résultat</h2>

<?php

$nombre = 8;

echo "Table de $nombre (boucle FOR) :<br><br>";

for ($i = 1; $i <=10 ; $i++) { 
    echo $i." x "."$nombre = ".$i * $nombre."<br>";
}

echo "<br><br><br><br>";

echo "Table de $nombre (boucle WHILE) :<br><br>";

$j = 1;
while ($j <= 10) {
    echo $j." x "."$nombre = ".$j * $nombre."<br>";
    $j++;
}