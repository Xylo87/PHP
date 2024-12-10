 <?php
    require_once "functions.php";
    
    $title = "Magasin";

    session_start();
    ob_start();

    echo "<p class=\"basket\">",
            "<i class=\"fa-solid fa-cart-shopping\"></i>(".getTotalProducts().")",
            "<br>",
            "<a href=\"recap.php\">Mon panier</a>",
    "</p>";
    
    // if (isset($_GET["success"])) {
    //     echo $_GET["success"];
    // }
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
    
    <?php

    if (isset($_GET["success"])) {
        if ($_GET["success"] === "true") {
            echo "Article bien ajouté au panier !";
        } else {
            echo "Une erreur est survenue...";
        }
    }

    $content = ob_get_clean();

    require_once "template.php"; ?>