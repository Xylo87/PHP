<h1>Exercice 10</h1>

<p>
En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).
</p>

<h2>Résultat</h2>

<?php


// FONCTION DONNÉES PERSONNELLES
$nomsInput = ["Nom", "Prénom", "Ville", "Adresse e-mail", "Sexe"];

function afficherInput(array $tableau) : string {
    
    $textdisplay = "";
    
    foreach ($tableau as $form) {
        $textdisplay .= "<label for=\"\">$form</label><br>
                            <textarea name=\"\" id=\"\" cols=\"25\" rows=\"1\"></textarea><br>";
    }
    return $textdisplay;
}


// FONCTION CHOIX FORMATION
$nomsRadio = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];

function afficherRadio(array $tableau) : string {

    $textdisplay = "<fieldset>";
    
    foreach ($tableau as $job) {
        $textdisplay .= "<input type=\"radio\" name=\"groupe\">
                            <label for=\"\">$job</label><br>";           
    }
    
    $textdisplay .= "</fieldset>";
    
    return $textdisplay;
}


// FORMULAIRE
echo "<form action=\"\">"
.afficherInput($nomsInput)."<br>"
.afficherRadio($nomsRadio)."<br>
<label for=\"\"></label>
    <input type=\"submit\" value=\"Submit\">
</form>";