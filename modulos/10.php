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
      

        $nombre = $_POST["nombre"];
        <br>

        echo "Su nombre es: $nombre ";
        <br>

        if (isset($_REQUEST["enviar"] )) {
        
            if($_REQUEST["radio1"]=="no tiene"){
                <br>
        echo "Ustede no tiene estudios";
        }
        if($_REQUEST["radio1"]=="primarios"){
            <br>
        echo "Ustede tiene estudios primarios";
        }
        <br>
        if($_REQUEST["radio1"]=="secundarios"){
            <br>
        echo "Ustede tiene estudios secundarios";
         }
            
        } 


    </code>

    </div>

    
    <div class="div-funcionalidad">

    <form action="modulos/procesar.10.php" method ="post">

        Ingrese su nombre
        <input type="text" name ="nombre">
        <br>
        Seleccione una opcion:
        <br>
        <input type="radio" name="radio1" value="no tiene">No tengo estudios
        <br>
        <input type="radio" name="radio1" value="primarios">Tengo estudios primarios
        <br>
        <input type="radio" name="radio1" value="secundarios">Tengo estudios secundarios
        <br>
        <input type="submit" name= "enviar" value="enviar">

        </form>
        



       

       

        
      
    
      
    
      

    </div>


</div>
    
</body>
</html>