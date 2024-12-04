<?php

spl_autoload_register(function ($class_name) {
    require "classes/". $class_name . ".php";
});

$kazel = new Titulaire("PAPIN", "Georges", "1999-12-17", "Volvic");
$kiouze = new Titulaire("BÉARD", "Alan", "1985-09-13", "Bourg-en-Bresse");

$societeGenerale = new Compte("Livret A", 50, "Euros", $kazel);
$hsbc = new Compte("Assurance-Vie", 335000, "Petrodollars", $kazel);
$creditLyonnais = new Compte("LDD", 7500, "Pesos", $kiouze);
$fortuneo = new Compte("LEP", 6, "Marks", $kiouze);



echo $kazel->getInfosTitulaire();

echo $kiouze->getInfosTitulaire();

echo "<br>";
echo "<br>";

echo $societeGenerale->getInfosCompte();

echo $hsbc->getInfosCompte();

echo $creditLyonnais->getInfosCompte();

echo $fortuneo->getInfosCompte();

echo "<br>";
echo "<br>";

echo $fortuneo->credit(5);

echo $fortuneo->credit(5);

echo "<br>";
echo "<br>";

echo $fortuneo->debit(1);

echo $fortuneo->debit(1);














