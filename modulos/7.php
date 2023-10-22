
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
  
        if($valor == 1) {
            <br>
        echo " uno ";
        }
        <br>
        elseif($valor == 2){
        <br>
        echo " dos ";
        }
        <br>
        else{
        <br>
        echo  " tres ";
        }

        



    </code>

    </div>

    
    <div class="div-funcionalidad">
      
    <?php
     $valor=rand(1,3);


        if($valor == 1) {
        echo " uno ";
        }
        elseif($valor == 2){
        echo " dos ";
        }
        else{
        echo  " tres ";
        }


        ?>
      

    </div>


</div>
    
</body>
</html>




