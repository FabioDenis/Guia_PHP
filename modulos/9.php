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

            $nombre=$_POST['nombre'];
            <br>
            $edad=$_POST['edad'];
            <br>

             if ($edad>=18)
            {
            echo "Usted es mayor de edad";
            <br>

            } else{
            echo "Usted es menor de edad";

            }
        </form>


  
        

        



    </code>

    </div>

    
    <div class="div-funcionalidad">


        <form method="post" action="modulos/procesar.9.php">
            Ingrese su nombre
            <input type="text" name ="nombre">
            <br>
            Ingrese su edad
            <input type="number" name ="edad">
            <br>
            <input type="submit" value ="enviar">
        </form>


        

        
      
    
      
    
      

    </div>


</div>
    
</body>
</html>
