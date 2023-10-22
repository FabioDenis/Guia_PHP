<?php
include('includes/conexion.php');
conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia-PHP</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/estilos.css?v=1">
</head>
<body>


    <header>
            <h1 class="Titulo-Guia-PHP">Guia-PHP</h1>
            
           

    </header>

    <main>
        <div id="contenedor-nav-aside">
            <nav class="nav">
                <div class="div-nav">

                    <ul class="ul-nav">
                       <li >
                        <a class="hipervinculo" href="index.php">Inicio</a>
                        </li> 
                        <?php
                        $sql = "SELECT *FROM menu ";
                        $sql =mysqli_query($con,$sql);
                        if(mysqli_num_rows($sql) !=0){
                            while($r= mysqli_fetch_array($sql))

                            {
                                ?>
                                 <li>
                                <a class="hipervinculo" href="index.php?pagina=<?php echo $r['archivo_item'];?>" ><?php echo $r['nombre_item'];?></a>
                                </li>
                                <?php


                            }
                        }
                        ?>
                       
                       <!--
                        <li>
                            <a class="hipervinculo" href="">Ejercicio 2</a>
                        </li>
                        <li>
                            <a class="hipervinculo" href="">Ejercicio 3</a>
                        </li>
                        <li>
                            <a class="hipervinculo" href="">Ejercicio 4</a>
                        </li>
                        <li>
                            <a class="hipervinculo" href="index.php?pagina=5">Ejercicio 5</a>
                        </li>
                        <li>
                            <a class="hipervinculo" href="index.php?pagina=6">Ejercicio 6</a>
                        </li>
                        <li>
                            <a class="hipervinculo" href="index.php?pagina=7">Ejercicio 7</a>
                        </li>
                        <li>
                            <a class="hipervinculo" href="index.php?pagina=8">Ejercicio 8</a>
                        </li>   
                        <li>
                            <a class="hipervinculo" href="index.php?pagina=8.1">Ejercicio 8.1(while)</a>
                        </li>   <li>
                            <a class="hipervinculo" href="index.php?pagina=8.2">Ejercicio 8.2(do/while)</a>
                        </li>
                    </ul>
                    -->
                    
                    

                  

                
    
    
                </div>

    
    
            </nav>
    
            <aside id="aside">
                <div class="div-aside">
                <?php
                    if(!empty($_GET['pagina']))
                    {
                        include('modulos/'.$_GET['pagina'].".php");
                    }
                    ?>
    
                </div>
    
            </aside>

        </div>

       
        
    </main>
    
</body>
</html>