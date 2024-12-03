<h1>Test</h1>

<?php

// $phrase = "Théo";
// $nbCaracteres = strlen($phrase);
// $anagramme = "J'aime vraiment beaucoup les gâteaux à la banane";

// echo "Le mot contient $nbCaracteres lettres<br>";
// echo $phrase."<br>";
// echo $phrase."<br>";

// $phraseMaj = strtoupper($phrase);
// echo $phraseMaj."<br>";
// echo strtoupper($phrase)."<br>";
// echo mb_strtoupper($phrase)."<br>";

// echo str_shuffle($anagramme);





// POO


// Class Ordinateur{
//     private $_marque;
//     private $_model;
//     private $_ecran;
//     private $_statut=0;
//     // ---> attributs de la classe

//     public function allumer(){
//         $this->_statut=1;
//     }
// }



// MODELISATION BdD 


// Façon dont les entités communiquent entre elles :

// - MCD > modèle conceptuel de données 

// - Modèle logique de données 
// >Clé primaire (clé unique pour une entité)
// >Clé étrangère (possibilité d'avoir plusieurs clés étrangères dans une seule entité)



// CLASS


// Un fichier par classe

// Classe s'écrit avec une majuscule
// Pascal case

// Nom du fichier .php correspond au nom de la classe

// Définir des variables à la volée = déconseillé

// Contruct permet de faire des opérations initiales et de sauvegarder des opérations au niveau de l'instance

// $this-> fait référence à l'objet créé dans l'instance > uniquement visible dans la classe

// private = accessible qu'au sein du fichier de la classe > par défautl, variables sont en privé
// > pour qu'attribut soit accessible > l'insérer dans une fonction publique (appelée "Getter")
// > possible de déclarer une fonction en privé si on l'appelle dans une fonction en public par ex. > n'a d'utilité que dans la classe

// Construct = obligatoire
// Attributs = variables / Construct = valeurs

// associer un objet entier en tant qu'attribut de classe (ex. exo Livre, auteur = objet entier)
// clé étrangère correspond à une imbrication d'un objet en tant qu'attribut de classe

// singulier/pluriel

// entité de type table associative > possibilité loger des éléments dans l'association elle-même 
// (ex. nb de commandes/panier (parmi id produits et id commandes), élément variable) 

?>