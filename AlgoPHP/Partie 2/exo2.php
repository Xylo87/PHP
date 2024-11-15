<h1>Exercice 2</h1>

<p>
Soit le tableau suivant :
$capitales = [France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
</p>

<h2>Résultat</h2>

<!-- <table border>
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitale</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
        </tr>
        <tr>
            <td>France</td>
            <td>Paris</td>
        </tr>
        <tr>
            <td>Italie</td>
            <td>Rome</td>
        </tr>
        <tr>
            <td>Usa</td>
            <td>Washington</td>
        </tr>
    </tbody>
</table> -->

<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"
];

ksort($capitales);

// foreach ($capitales as $pays => $ville) {
//     echo strtoupper($pays)." pays dont la capitale est $ville<br>";
// }

function afficherTableHTML(array $tableau) {
    foreach ($tableau as $pays => $ville) {
    echo strtoupper($pays)." pays dont la capitale est $ville<br>";
    }
}

echo afficherTableHTML($capitales);