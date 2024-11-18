<h1>Exercice 9</h1>

<p>
Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre 
("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);
</p>

<h2>Résultat</h2>

<?php

$nomsRadio = [
    "Masculin" => "Monsieur",
    "Féminin" => "Madame",
    "Autre" => "Mademoiselle"
];

function afficherRadio(array $tableau) : string {

    $textdisplay = "<fieldset>";
    
    foreach ($tableau as $sexe => $valeur) {
        if ($sexe === "Autre") {
            $textdisplay .= "<input type=\"radio\" name=\"groupe\" checked>
                                <label for=\"\">$sexe</label><br>";
        } else $textdisplay .= "<input type=\"radio\" name=\"groupe\">
                                    <label for=\"\">$sexe</label><br>";           
    }
    
    $textdisplay .= "</fieldset>";
    
    return $textdisplay;
}

echo afficherRadio($nomsRadio);