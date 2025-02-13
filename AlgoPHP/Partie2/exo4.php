<h1>Exercice 4</h1>

<p>
A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale 
(le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme : https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = ["France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];
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

function afficherTableHTML(array $tableau) : string {
    asort($tableau);
    $result = "<table border>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>Lien wiki</th>
                    </tr>
                </thead>";
    foreach ($tableau as $pays => $ville) {
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
