<h1>Exercice 1</h1>

<p>
Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.
</p>

<h2>Résultat</h2>

<?php

function  convertirMajRouge(string $texte) : string {
    $texteMaj = mb_strtoupper($texte);
    // $texteMajRouge = textcolorallocate($texteMaj, 255, 0, 0);
    return $texteMaj;
}

echo convertirMajRouge("Mon texte en paramètre");