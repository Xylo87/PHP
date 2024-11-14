<h1>Exercice 12</h1>

<p>
A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.

Exemple : tableau ➔ Mickaël => FRA, Virgile => ESP, Marie-Claire => ENG

Variante : trier d’abord le tableau par ordre alphabétique du prénom
</p>

<h2>Résultat</h2>

<?php

$personnes = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

ksort($personnes);

function salutations(array $tableau) : string {
    $ret = "";
    foreach ($tableau as $prenom => $langue) {
        switch ($langue) {
            case "FRA": $ret .= "Bonjour $prenom <br>" ; break;
            case "ESP": $ret .= "Hola $prenom <br>" ; break;
            case "ENG": $ret .= "Hello $prenom <br>" ; break;
        }
    }
    return $ret;
}

echo salutations($personnes);


