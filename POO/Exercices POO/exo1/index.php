<?php

spl_autoload_register(function ($class_name) {
    require "classes/". $class_name . ".php";
});

$stephenKing = new Auteur("King", "Stephen");

$ca = new Livre("Ça", "1986", 1138, 20, $stephenKing);
$simetierre = new Livre("Simetierre", "1983", 374, 15, $stephenKing);

// var_dump($ca);

// echo $ca->getDateParutionAnnee();


// var_dump($ca);

// echo "<br>";
// echo "<br>";
// echo "<br>";

// echo $ca;

// echo "<br>";
// echo "<br>";
// echo "<br>";

// echo $ca->getNbPages();

// echo "<br>";
// echo "<br>";
// echo "<br>";

// echo $ca->getPrix();

// echo "<br>";
// echo "<br>";
// echo "<br>";

// echo $stephenKing;

// echo "<br>";
// echo "<br>";
// echo "<br>";

// $ca->setDateParution("1984");
// echo $ca->getDateParutionAnnee();

echo $stephenKing->afficherBibliographie();

// var_dump($stephenKing);