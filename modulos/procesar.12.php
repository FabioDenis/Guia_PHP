<div class="div-funcionalidad">
<?php



if (isset($_POST["enviar"])) {
    $nombre = $_POST["nombre"];
    $ingresoSemanal = $_POST["select12"];
    
    echo "Su nombre es: $nombre <br>";

    if ($ingresoSemanal == "1") {
        echo "Su ingreso semanal es entre 1 y 1000";
        
    }
    if ($ingresoSemanal == "2") {
        echo "Su ingreso semanal es entre 1001 y 3000";
        
    }
    
    if ($ingresoSemanal == "3") {
        echo "Debido a que su ingreso semanal es mayor a 3000 debe pagar impuestos";
        
    }
   


}
   



?>
</div