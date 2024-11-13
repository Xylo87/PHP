<h1>Exercice 7</h1>

<p>
Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.
</p>

<h2>Résultat</h2>

<?php

// $age = 10;

// if(gettype($age) === "integer" || gettype($age) === "double") {
//     if($age < 18 && $age >= 12) {
//         $category = "Cadet";
//         echo "L'enfant qui a $age ans appartient à la catégorie \"$category\".";
//     } elseif($age <= 11 && $age >= 10) {
//         $category = "Minime";
//         echo "L'enfant qui a $age ans appartient à la catégorie \"$category\".";
//     } elseif($age <= 9 && $age >= 8) {
//         $category = "Junior";
//         echo "L'enfant qui a $age ans appartient à la catégorie \"$category\".";
//     } elseif($age <= 7 && $age >= 6) {
//         $category = "Poussin";
//         echo "L'enfant qui a $age ans appartient à la catégorie \"$category\".";
//     }
//     else {
//         echo "La catégorie n'est pas gérée.";
//     }
// } else {
//     echo "Veuillez entrer une valeur numérique.";
// }

// ===> Switch Case
if(gettype($age) === "integer" || gettype($age) === "double" ) {
    switch (true) {
        case $age < 18 && $age >= 12: echo "L'enfant qui a $age ans appartient à la catégorie \"Cadet\""; break;
        case $age <= 11 && $age >= 10: echo "L'enfant qui a $age ans appartient à la catégorie \"Minime\""; break;
        case $age <= 9 && $age >= 8: echo "L'enfant qui a $age ans appartient à la catégorie \"Junior\""; break;
        case $age <= 7 && $age >= 6: echo "L'enfant qui a $age ans appartient à la catégorie \"Poussin\""; break;
        default: echo "La catégorie n'est pas gérée.";
    }    
} else {
    echo "Veuillez saisir un âge numérique !";
}