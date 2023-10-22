
<div class="div-funcionalidad">
<?php

$nombre = $_POST["nombre"];



echo "Su nombre es: $nombre <br>";


 if (isset($_REQUEST["enviar"] )) {
   if($_REQUEST["radio1"]=="no tiene"){
    echo "Ustede no tiene estudios";
   }
   if($_REQUEST["radio1"]=="primarios"){
    echo "Ustede tiene estudios primarios";
   }
   if($_REQUEST["radio1"]=="secundarios"){
    echo "Ustede tiene estudios secundarios";
   }
  } 
  ?>

</div>