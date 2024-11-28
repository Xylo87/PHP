<h1>POO Entreprises</h1>

<?php

spl_autoload_register(function ($class_name) {
    require "classes/". $class_name . ".php";
});

$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", "14, rue du Rhône", "67100", "STRASBOURG");

var_dump($elanFormation);

echo $elanFormation;
// ---> fonctionne grâce à toString

echo "<br>";
echo "<br>";
echo "<br>";

echo $elanFormation->getInfos();
// ---> retourne l'objet grâce à toString + le contenu de la fonction getInfos


$isimorn = new Employe("CRINON", "François", "isimorn@gmail.com");

echo "<br>";
echo "<br>";
echo "<br>";

echo $isimorn;


?>