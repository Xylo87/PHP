<?php
    $title = "Mon panier";

    session_start();
    ob_start();
?>
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
                        "<th>Actions</th>",
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
                    "<td><a href=\"traitement.php?action=down-qtt&id=$index\"><i class=\"fa-solid fa-square-minus\"></i></a>".$product["qtt"]
                    ."<a href=\"traitement.php?action=up-qtt&id=$index\"><i class=\"fa-solid fa-square-plus\"></i></a></td>",
                    "<td>".number_format($product["total"], 2, ",", "&nbsp;")."&nbsp;€</td>",
                    "<td><a href=\"traitement.php?action=delete&id=$index\"><i class=\"fa-solid fa-trash-can\"></i></a></td>",
                "</tr>";
            $totalGeneral += $product["total"];
            $totalProducts += $product["qtt"];
        }
        echo "<tr>",
                "<td>Nombre de produits : ".$totalProducts,
                "<td colspan=3>Total général : </td>",
                "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;€</strong></td>",
            "</tr>",
            "<tr>",
                "<td class=\"buttonLine\"><a href=\"traitement.php?action=clear\"><button class=\"emptyButton\">Vider le panier</button></a></td>",
            "</tr>",
        "</tbody>",
    "</table>";    
    }

    if (isset($_GET["success"])) {
        if ($_GET["success"] === "true") {
            echo "L'article a bien été supprimé !";
        }
    }

    $content = ob_get_clean();

    require_once "template.php"; ?>