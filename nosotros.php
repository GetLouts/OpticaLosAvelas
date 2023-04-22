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
                    <a href="contactar.php" class="navegacion__enlace">Contactar</a>
                </nav>
            </div>
        </div>
    </header>
    
    <section class="hero">
        <div class="contenido-hero">
            <h2> 
                <?php 
                print "Nosotros Optic<span>Visión</span>";
                ?>
            </h2>       

        </div>        
    </section>
    
    <main class="contenedor sombra">
        <h2>
            <?php
            print "Sobre Nosotros";
            ?>
        </h2>    

        <div class="sobre-nosotros">
            <div class="sobre-nosotros__imagen" >
                <img class="nos" src="img/optometrista.jpg" alt="Imagen de optometrista">
            </div>

            <div class="sobre-nosotros__texto">
                <p>
                    <?php
                        echo "La optometría es la ciencia sanitaria no médica que estudia el sistema visual, sus alteraciones no patológicas y su solución, así como las normas de salud e higiene visual a cargo del optometrista." 
                    ?>
                </p>  
                <p>
                    <?php
                        echo "En nuestra Unidad de Optometría, el optometrista u óptico es la persona responsable de enseñar a nuestros pacientes cómo debe ser el uso adecuado de lentes de contacto.  Tanto para ponérselas, como en el manejo de las mismas. Un optometrista, por tanto, debe explicarle detalladamente al paciente todas y cada una de las recomendaciones básicas."
                    ?>
                </p>

            </div>
        </div>   
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