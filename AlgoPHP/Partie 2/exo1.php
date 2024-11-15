<h1>Exercice 1</h1>

<p>
Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.
</p>

<h2>Résultat</h2>

<style>
    .red {
        color: red;
    }
</style>

<?php

$texte = "mon texte en paramètre";

function convertirMajRouge(string $phrase) : string {
    $phraseMaj = mb_strtoupper($phrase);
    $phraseMajRouge = "<span class='red'>$phraseMaj</span>";
    return $phraseMajRouge;
}

echo convertirMajRouge($texte);