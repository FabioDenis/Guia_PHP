<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos.css">
    <title>Document</title>
</head>
<body>

<div class="contenedor-principal-ejercicios">
    
    <div class="div-codigo">
   
        <code>
       
        $dias= array ("Lunes","Martes","Miercoles",
        "Jueves","Viernes","Sabado","Domingo");
        <br>

        echo "El primer dia de la semana es: ". $dias[0];
        <br>
        echo "El ultimo dia de la semana es: ". $dias[6] ;

      
  
        

        



    </code>

    </div>

    
    <div class="div-funcionalidad">
    <?php
    $vector = array();


        $usuarios["usuario1"] = "clave1";
        $usuarios["usuario2"] = "clave2";
        $usuarios["usuario3"] = "clave3";
        $usuarios["usuario4"] = "clave4";
        $usuarios["usuario5"] = "clave5";

        // Acceder a una componente del vector por su nombre
        echo $usuarios["usuario3"];

        
      
    
      ?>
    
      

    </div>


</div>
    
</body>
</html>