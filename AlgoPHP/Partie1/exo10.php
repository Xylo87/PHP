<h1>Exercice 10</h1>

<p>
A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.
</p>

<h2>Résultat</h2>

<?php

$apayer = 152;
$verse = 200;
$resteorigin = $verse - $apayer;

$reste = $verse - $apayer;

$reste10 = floor($reste / 10);
$reste = $reste - $reste10 * 10;

$reste5 = floor($reste / 5);
$reste = $reste - $reste5 * 5;

$reste2 = floor($reste / 2 );
$reste = $reste - $reste2 * 2;

$reste1 = floor($reste / 1 );
$reste = $reste - $reste1 * 1;

echo "Montant à payer : $apayer € <br>
Montant versé : $verse € <br>
Reste à payer : $resteorigin € <br>
********************************************** <br>
Rendu de monnaie :
$reste10 billets de 10 € - $reste5 billets de 5 € - $reste2 pièce de 2 € - $reste1 pièce de 1 €";