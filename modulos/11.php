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
        echo "Su nombre es: $nombre <br>";
        echo "Usted practica: <br>";

        if (isset($_REQUEST["enviar"])) {
        <br>    
        if (isset($_REQUEST["check1"]) && $_REQUEST["check1"] == "futbol") {
        echo "Futbol";
        }
        <br>
        if (isset($_REQUEST["check2"]) && $_REQUEST["check2"] == "voley") {
        echo " Voley";
        }
        <br>
        if (isset($_REQUEST["check3"]) && $_REQUEST["check3"] == "basket") {
        echo " Basket ";
        }
        <br>
        if (isset($_REQUEST["check4"]) && $_REQUEST["check4"] == "tenis") {
        echo "Tenis ";
        }
}
      

    


        </code>

    </div>

    
    <div class="div-funcionalidad">

    <form action="modulos/procesar.11.php" method ="post">

        Ingrese su nombre
        <input type="text" name ="nombre">
        <br>
        Seleccione una opcion:
        <br>
        <input type="checkbox" name="check1" value="futbol" >Futbol
        <br>
        <input type="checkbox" name="check2" value="voley" >Voley
        <br>
        <input type="checkbox" name="check3" value="basket" >Baket
        <br>
        <input type="checkbox" name="check4" value="tenis" >Tenis
        <br>

        <input type="submit" name= "enviar" value="enviar">

        </form>
        



       

       

        
      
    
      
    
      

    </div>


</div>
    
</body>
</html>