<h1>Exercice 8</h1>

<p>
Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
Exemple :
repeterImage($url,4);
</p>

<h2>Résultat</h2>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";

function repeterImage($image, $number) {
    for ($i=0; $i < $number; $i++) { 
        echo "<img src=\"$image\"</img>";
    }  
}

echo repeterImage($url, 4);

