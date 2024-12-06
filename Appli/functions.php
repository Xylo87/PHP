<?php

function getQuantity()  {
    $quantity = 0;
    if (isset($_SESSION["products"])) {
        foreach ($$_SESSION["products"] as $product) {
            $quantity += $product["qtt"];
        }
    }
    return $quantity;
}

echo getQuantity();