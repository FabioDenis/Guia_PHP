<div class="div-funcionalidad">
<?php

$nombre = $_POST["nombre"];

echo "Su nombre es: $nombre <br>";
echo "Usted practica: <br>";

if (isset($_REQUEST["enviar"])) {
    if (isset($_REQUEST["check1"]) && $_REQUEST["check1"] == "futbol") {
        echo "Futbol";
    }
    if (isset($_REQUEST["check2"]) && $_REQUEST["check2"] == "voley") {
        echo " Voley";
    }
    if (isset($_REQUEST["check3"]) && $_REQUEST["check3"] == "basket") {
        echo " Basket ";
    }
    if (isset($_REQUEST["check4"]) && $_REQUEST["check4"] == "tenis") {
        echo "Tenis ";
    }
}
?>
</div
