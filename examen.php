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
                print "Examen de la <span>Vista</span>";
                ?>
            </h2>       

        </div>        
    </section>
    
    <main class="contenedor sombra">
        <h2>
            <?php
            print "Examenes";
            ?>
        </h2>    

        <h3>
        <?php 
            echo "Diseños De Monturas";                
        ?>
        </h3>
        <img class="ex" src="img/lentex.jpg" alt="Imagen de Montura">
        <div class="textimg">

        <h2>¿Qué sucede durante un examen de la vista?</h2>
        <p>
        <?php
            echo "Durante el examen de la vista, el médico podría preguntar por tu historial médico y si has estado teniendo algún problema visual. Te harán una serie de pruebas de visión para determinar tus necesidades visuales y evaluar tu salud visual." 

        ?>
        <h3>¿Con qué frecuencia debo realizarme un examen de la vista?</h3>
        </p>
            
        <p>
        <?php
            echo "Un examen de la vista una vez al año o cada dos años ayudará a identificar problemas y a mejorar la calidad de la visión si necesitas cambiar tu receta."
        ?>
        </p>

        <p>
         <?php
            echo "Factores como la edad, la salud y un historial familiar de problemas de visión pueden determinar la frecuencia con la que necesitas un examen de la vista. Muchos planes de visión incluyen un examen de la vista anual completo. "
         ?>   
        </p>

        <p>
        <?php
            echo "Asegúrate de consultar con tu oftalmólogo con qué frecuencia deben revisar tus ojos. Si tienes presión arterial elevada o diabetes, podría recomendar exámenes frecuentes."
        ?>
        </p>

        <p>
        <?php
            echo "Si tienes menos de 40 años y no tienes problemas de visión, tal vez necesites un examen de la vista solo cada dos años. Después de los 40 años, considera ir una vez al año. Esto es especialmente importante si notas cambios en la visión o si tienes antecedentes familiares de diabetes o glaucoma."
        ?>    
        </p>
        <img class="cartel" src="img/cartel.jpg" alt="Imagen de cartel">
       

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