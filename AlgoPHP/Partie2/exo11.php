<h1>Exercice 11</h1>

<p>
Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");
</p>

<h2>Résultat</h2>

<?php

function formaterDateFr(string $date) : string {
    $fmt = datefmt_create("fr_FR", IntlDateFormatter::FULL, IntlDateFormatter::NONE, "Europe/Paris", IntlDateFormatter::GREGORIAN);
    $dateFR = datefmt_format($fmt, strtotime($date));
    
    return $dateFR;
}

echo formaterDateFr("2018-02-23");