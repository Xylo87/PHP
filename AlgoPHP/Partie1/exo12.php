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

function salutations(array $personnes) {
    foreach ($personnes as $prenom => $langue) {
        switch ($langue) {
            case 'FRA': echo "Bonjour $prenom<br>"; break;
            case "ESP": echo "Hola $prenom<br>"; break;
            case "ENG": echo "Hello $prenom<br>"; break;
        }
    }
    return "Bonjour $prenom";
}

salutations ($personnes);