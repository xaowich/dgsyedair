<?php
/*
www.celalyurtcu.com
*/
?>

<?php

$sayfa = trim($_GET["sayfa"]);

switch ($sayfa){
    case "":
        include "anasayfa.php";
        break;
        case "cikis-yap":
        include "cikis.php";
        break;
    default:
        include "anasayfa.php";
        break;
}