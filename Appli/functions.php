<?php

function getTotalProducts()  {
    $totalProducts = 0;
    if (isset($_SESSION["products"])) {
        foreach ($_SESSION["products"] as $product) {
            $totalProducts += $product["qtt"];
        }
    }
    return $totalProducts;
}

?>