<?php
    session_start();
    var_dump($_SESSION["products"][0]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ajout produit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    echo "<p class=\"basket\">",
            "<i class=\"fa-solid fa-cart-shopping\"></i>",
            "<br>",
            "<a href=\"recap.php\">Mon panier</a>",
    "</p>";
    ?>
    <h1>Ajouter un produit</h1>
    <form action="traitement.php?action=add" method="post">
        <p>
            <label>
                Nom du produit :
                <input type="text" name="name">
            </label>
        </p>
        <p>
            <label>
                Prix du produit : 
                <input type="number" step="any" name="price">
            </label>
        </p>
        <p>
            <label>
                Quantité désirée :
                <input type="number" name="qtt" value="1">
            </label>
        </p>
        <p>
            <input class="fillButton" type="submit" name="submit" value="Ajouter le produit">
        </p>
    </form>
</body>
</html>