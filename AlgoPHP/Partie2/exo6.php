<h1>Exercice 6</h1>

<p>
Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.
Exemple :
$elements = ["Monsieur","Madame","Mademoiselle"];
alimenterListeDeroulante($elements);
</p>

<h2>Résultat</h2>

<?php

$elements = ["Monsieur", "Madame", "Mademoiselle"];

function afficherListeDeroulante(array $tableau) : string {
    
    $i=0;

    $textdisplay = "<form action=\"\">
                        <label for=\"\"></label><br>
                            <select name=\"\" id=\"\"><br>";
    
    foreach ($tableau as $form) {
        $i++;
        $textdisplay .= "<option value=\"$i\">$form</option>";
    } 
    
    $textdisplay .= "</select>
                        </form>";
    
    return $textdisplay;
}

echo afficherListeDeroulante($elements);