<?php

session_start();



if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add": 
        
            if(isset($_POST["submit"])) {

                $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);
            
                if($name && $price && $qtt) {
            
                    $product = [
                        "name" => $name,
                        "price" => $price,
                        "qtt" => $qtt,
                        "total" => $price*$qtt
                    ];
                    $_SESSION["products"][] = $product;
                    header("Location:index.php?success=true"); exit;
                } else {
                    header("Location:index.php?success=false"); exit;
                }
            }
        
        break;

        case "delete": if (isset($_GET["id"]) && isset($_SESSION["products"][$_GET["id"]])) {
            unset($_SESSION["products"][$_GET["id"]]);
            header("Location:recap.php?success=true"); exit;
                }
        break;
        
        case "clear": unset($_SESSION["products"]);
        header("Location: recap.php"); exit;
        break;
        
        case "down-qtt": if (isset($_GET["id"]) && isset($_SESSION["products"][$_GET["id"]])) {
            if ($_SESSION["products"][$_GET["id"]]["qtt"] < 2)  {
                unset($_SESSION["products"][$_GET["id"]]);
                header("Location: recap.php"); exit;
                break;
            } else {
                $_SESSION["products"][$_GET["id"]]["qtt"]--;
                $_SESSION["products"][$_GET["id"]]["total"] = $_SESSION["products"][$_GET["id"]]["qtt"] * $_SESSION["products"][$_GET["id"]]["price"];
                header("Location: recap.php"); exit;
                break;
            }
        }
        
        case "up-qtt": if (isset($_GET["id"]) && isset($_SESSION["products"][$_GET["id"]])) {
            $_SESSION["products"][$_GET["id"]]["qtt"]++;
            $_SESSION["products"][$_GET["id"]]["total"] = $_SESSION["products"][$_GET["id"]]["qtt"] * $_SESSION["products"][$_GET["id"]]["price"];
        header("Location: recap.php"); exit;
        break;
        }
    }
}  



header("Location:index.php");