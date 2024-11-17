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

<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "Usa" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
];

function afficherTableHTML(array $capitales) : string {
    asort($capitales);
    $result = "<table border>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>Lien wiki</th>
                    </tr>
                </thead>";
    foreach ($capitales as $pays => $ville) {
    $result .= "<tbody>
                    <tr>
                        <td>".strtoupper($pays)."</td>
                        <td>$ville</td>
                        <td><a href=\"https://fr.wikipedia.org/wiki/$ville\" target=\"_blank\">Lien</td>
                    </tr>";
    } $result .= "</tbody>
    </table>";
    return $result;
}

echo afficherTableHTML($capitales);
