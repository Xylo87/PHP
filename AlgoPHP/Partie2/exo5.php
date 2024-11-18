<h1>Exercice 5</h1>

<p>
Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.
Exemple :
$nomsInput = ["Nom","Prénom","Ville"];
</p>

<h2>Résultat</h2>

<?php

$nomsInput = ["Nom", "Prénom", "Ville"];

function afficherInput(array $tableau) : string {
    
    $textdisplay = "<form action=\"\">";
    
    foreach ($tableau as $form) {
        $textdisplay .= "<label for=\"text\">$form</label><br>
                            <textarea name=\"text\" id=\"text\" cols=\"25\" rows=\"1\"></textarea><br>";
    } 
    $textdisplay .= "</form>";
    return $textdisplay;
}

echo afficherInput($nomsInput);