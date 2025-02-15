<h1>Exercice 11</h1>

<p>
Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). 
Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
</p>

<h2>Résultat</h2>

<?php

$brands = ["Peugeot","Renault", "BMW", "Mercedes"];

echo "Il y a ".count($brands)." marques de voitures dans le tableau :<ul>";

foreach ($brands as $brand) {
    echo "<li>".$brand."<br></li>";
}

echo "</ul>";