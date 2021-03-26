<?php 
// Only when php is called can you write in php
function head() {
    switch ($_SERVER["PHP_SELF"]) {
        case "/oke-intern-training/index.php":
            $title = "home";
            break;

        default:
            echo "false";
            break;
    }
include_once("./public/sections/head.php"); // reads this file once; ignores mulitple calls
}


?>
