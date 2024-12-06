<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Recapitulatif des produits</title>
</head>
<body>
    <p>
        <i class="fa-solid fa-shop"></i>
        <br>
        <a href="index.php">Revenir au magasin</a>
    </p>
    <?php
    if (!isset($_SESSION["products"]) || empty($_SESSION["products"])) {
        echo "<p>Aucun produit en session</p>";
    } else {
        echo "<table>",
                "<thead>",
                    "<tr>",
                        "<th>#</th>",
                        "<th>Nom</th>",
                        "<th>Prix</th>",
                        "<th>Quantité</th>",
                        "<th>Total</th>",
                    "</tr>",
                "</thead>",
                "<tbody>";
        
        $totalGeneral = 0;
        $totalProducts = 0;

        foreach ($_SESSION["products"] as $index => $product) {
            echo "<tr>",
                    "<td>".$index."</td>",
                    "<td>".$product["name"]."</td>",
                    "<td>".number_format($product["price"], 2, ",", "&nbsp;")."&nbsp;€</td>",
                    "<td>".$product["qtt"]."</td>",
                    "<td>".number_format($product["total"], 2, ",", "&nbsp;")."&nbsp;€</td>",
                    "<td><a href=\"traitement.php?action=up-qtt&id=$index\">Ajouter</a></td>",
                    "<td><a href=\"traitement.php?action=down-qtt&id=$index\">Réduire</a></td>",
                    "<td><a href=\"traitement.php?action=delete&id=$index\">Supprimer l'article</a></td>",
                "</tr>";
            $totalGeneral += $product["total"];
            $totalProducts += $product["qtt"];
        }
        echo "<tr>",
                "<td>Nombres de produits : ".$totalProducts,
                "<td colspan=3>Total général : </td>",
                "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;€</strong></td>",
            "</tr>",
            "<tr>",
                "<td><a href=\"traitement.php?action=clear\">Vider le panier</a></td>",
            "</tr>",
            "</tbody>";
    }
    ?>
</body>
</html>