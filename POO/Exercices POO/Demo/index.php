<h1>POO Entreprises</h1>

<?php

spl_autoload_register(function ($class_name) {
    require "classes/". $class_name . ".php";
});

$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", "14, rue du Rhône", "67100", "STRASBOURG");
$tf1 = new Entreprise("TF1", "1987-04-05", "16, rue des Puces", "75000", "PARIS");
$poleEmploi = new Entreprise("Pole Emploi", "1984-02-12", "16, rue des Merles", "14000", "Caen");

$isimorn = new Employe("CRINON", "François", "isimorn@gmail.com");
$kiouze = new Employe("BEARD", "Alan", "kiouze@gmail.com");

$c1 = new Contrat($elanFormation, $isimorn, "1988-05-25", "CDI");
$c2 = new Contrat($elanFormation, $kiouze, "1984-12-29", "CDD");
$c3 = new Contrat($tf1, $isimorn, "1998-06-14", "CUI");
$c4 = new Contrat($poleEmploi, $isimorn, "1999-06-14", "Interim");



echo $elanFormation;
// ---> fonctionne grâce à toString

echo "<br>";
echo "<br>";

echo $elanFormation->getInfos();
// ---> retourne l'objet grâce à toString + le contenu de la fonction getInfos

echo "<br>";
echo "<br>";



echo $elanFormation->afficherEmployes();
echo $tf1->afficherEmployes();

echo $isimorn->afficherEntreprises();
echo $kiouze->afficherEntreprises();

?>