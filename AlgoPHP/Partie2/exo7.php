<h1>Exercice 7</h1>

<p>
Créer une fonction personnalisée permettant de générer des cases à cocher. 
On pourra préciser dans le tableau associatif si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.
</p>

<h2>Résultat</h2>

<?php

$elements = [
    "Choix 1" => false, 
    "Choix 2" => true,
    "Choix 3" => false
];

function genererCheckbox(array $tableau) : string {

    $textdisplay = "<fieldset>";
    
    foreach ($tableau as $choix => $tf) {
        if ($tf === true) {
            $textdisplay .= "<input type=\"checkbox\" name=\"$choix\" id=\"cb\" checked>
                                <label for=\"cb\">$choix</label><br>";
        } else $textdisplay .= "<input type=\"checkbox\" name=\"$choix\" id=\"cb\">
                                    <label for=\"cb\">$choix</label><br>";           
    }
    
    $textdisplay .= "</fieldset>";
    
    return $textdisplay;
}

echo genererCheckbox($elements);