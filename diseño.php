<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpticVisión</title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css" >
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/styles.css" as="style">
    <link href="css/styles.css" rel="stylesheet">
    <style type="text/css"></style>
</head>

<body>
    <header class="header">

        <div class="contenedor">
            <div class="nav-bg">
                <a class="logo" href="index.php">
                    <h1 class="logo__nombre no-margin centrar-texto">Optic<span class="logo__bold">Visión</span></h1>
                </a>

                <nav class="navegacion-principal contenedor">
                    <a href="index.php" class="navegacion__enlace">Inicio</a>
                    <a href="nosotros.php" class="navegacion__enlace">Nosotros</a>
                    <a href="contactar.php" class="navegacion__enlace">Contactar</a>
                </nav>
            </div>
        </div>
    </header>
    
    <section class="hero">
        <div class="contenido-hero">
            <h2> 
                <?php 
                print "Diseños De <span>Monturas</span>";
                ?>
            </h2>       

        </div>        
    </section>
    
    <main class="contenedor sombra">
        <h2>
            <?php
            print "Diseños";
            ?>
        </h2>    

        <h3>
        <?php 
            echo "Diseños De Monturas";                
        ?>
        </h3>
        <img class="dise" src="img/Montura2.jpg" alt="Imagen de Montura">
        <div class="textimg">
        <p>
        <?php
            echo "Para llegar a elegir las monturas correctamente, y para su eficaz montaje y adaptación, espreciso controlar 2 aspectos fundamentales." 

        ?>
        </p>
            
        <p>
        <?php
            echo "Como son y cómo se utilizan esto implica conocer sus características de forma, dimensión y materiales, los usuarios a quien van dirigidas , con sus dimensiones y forma y aquellos otros parámetros relativos a cómo serán utilizadas dichas monturas."
        ?>
        </p>

        <p>
         <?php
            echo "La metodología general del proceso de diseño sige una serie de pasos hasta llegar al resultado final. "
         ?>   
        </p>

        <p>
        <?php
            echo "Primero se pasara por todo el proceso de difinicion del objeto, desde croquis iniciales ,bocetos de artista ,ideas y su representación exacta."
        ?>
        </p>

        <p>
        <?php
            echo "             Cualquier paso debe ser previsto por el proceso de diseño ya que con la producción a esclas industrial no se pueden hacer improvisaciones y todo debe estar planeado de antemano . el diseño es un proyecto y todo el proceso necesario para llevarlo a cabo."
        ?>    
        </p>
       

        </div>
        <a href="index.php" class="boton boton__todos boton--regresar">Regresar</a>
               
    </main>

    <footer class="footer">
        <p>
            <?php 
            echo "Todos los derechos reservados. Alejandro Rangel"
            ?>    
        </p>
    </footer>
    

</body>
</html>