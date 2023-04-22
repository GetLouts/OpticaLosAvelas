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
                print "Variedad de<span>Cristales</span>";
                ?>
            </h2>       

        </div>        
    </section>
    
    <main class="contenedor sombra">
        <h2>
            <?php
            print "Cristales";
            ?>
        </h2>    

        <div class="curso">
            <div class="curso__imagen">
                <img src="img/plastico.jpg" alt="Imagen de cristal de plastico">
            </div>

            <div class="curso__informacion">
                <h4 class="no-margin">Cristal de Plastico</h4>
                <p class="curso__label">Tipo: 
                    <span class="curso__info">Basico</span>
                </p>
                <p class="curso__label">En Tienda: 
                    <span class="curso__info">20</span>
                </p>
                <p class="curso__descripcion">
                Las lentes de plástico, también conocidas como lentes orgánicas, se utilizan en la actualidad para todo tipo de gafas, y son especialmente adecuadas para los niños y los deportistas.
                <p/>
                <p class="curso__descripcion">
                Son muy ligeras y cómodas de llevar.
                </p>
                <p class="curso__descripcion">
                También son especialmente resistentes a los golpes. En este sentido, son hasta 100 veces mejores que las lentes de cristal, dependiendo del tipo de plástico utilizado.
                </p>
                <p class="curso__descripcion">
                Además, proporcionan una mejor protección contra las chispas (de los fuegos artificiales, las hogueras o los trabajos de soldadura o esmerilado, por ejemplo) y no se astillan. Esto supone una importante ventaja para la seguridad en muchas situaciones diarias
                La desventaja: en comparación con las lentes de vidrio natural, las lentes de plástico no ofrecen una gran resistencia a los arañazos. Por este motivo, son más sensibles y requieren mantenimiento adicional. Para contrarrestar esto, es posible aplicar un tratamiento especial que repela la suciedad o endurezca el material 
                </p>
            </div> <!--.curso-informacion-->
        </div> <!--.curso-->

        <div class="curso">
            <div class="curso__imagen">
                <img src="img/poli.jpg" alt="Imagen del curso">
            </div>

            <div class="curso__informacion">
                <h4 class="no-margin">Cristal de Policarbonato</h4>
                <p class="curso__label">Tipo: 
                    <span class="curso__info">Medio</span>
                </p>
                <p class="curso__label">En Tienda: 
                    <span class="curso__info">87</span>
                </p>
                <p class="curso__descripcion">
                    El policarbonato es un material orgánico (plástico) que se desarrolló en la década de 1970 para aplicaciones aeroespaciales y que comenzó a ser utilizado para el visor de los cascos de los astronautas y los parabrisas de las naves espaciales, pero rápidamente surgieron otros usos, tales como componentes electrónicos, materiales de construcción, y la corrección de la visión. 
                </p>
                <p class="curso__descripcion">
                Desde hace unos años hay además Policarbonato de índice 1.6 (algo reducido) que permite mejores resultados estéticos en miopías o hipermetropías medias (sigue siendo una reducción pequeña).
                </p>
                <p class="curso__descripcion">
                Debido a que su resistencia a roturas es mucho mayor que en los materiales orgánicos convencionales, son también muy recomendables para las gafas al aire o sin montura, ya que en este tipo de gafas es necesario realizar unos taladros (agujeros) para montar los sistemas de sujección y reduciéndose muchísimo el riesgo de grietas o roturas si se usan lentes de policarbonato.
                </p>
            </div> <!--.curso-informacion-->
        </div> <!--.curso-->

        <div class="curso">
            <div class="curso__imagen">
                <img src="img/alto.jpg" alt="Imagen del curso">
            </div>

            <div class="curso__informacion">
                <h4 class="no-margin">Cristal de Alto Índice</h4>
                <p class="curso__label">Tipo: 
                    <span class="curso__info">Alto</span>
                </p>
                <p class="curso__label">En Tienda: 
                    <span class="curso__info">39</span>
                </p>
                <p class="curso__descripcion">
                Los lentes para gafas de alto índice son la mejor elección si desea lentes más delgados y ligeros, así como unas gafas tan bonitas y cómodas como sea posible.
                </p>
                <p>
                Los lentes de alto índice más delgados y ligeros se recomiendan especialmente en caso de que le prescriban gafas de graduación elevada para la miopía, la hipermetropía o el astigmatismo. Sin embargo, los lentes de alto índice pueden hacer que sus gafas sean significativamente más delgadas, más ligeras y más bonitas, independientemente de lo elevada que sea su graduación. 
                </p>
                <p>
                La mayoría de los usuarios de gafas son miopes, que necesitan lentes correctivos delgados en el centro, pero más gruesos en los bordes. Cuanto más alta sea la graduación, más gruesos serán los bordes.
                </p>
                <p>
                La mayoría de las monturas modernas están hechas de plástico o de metal con marcos más delgados que el propio lente.  
                </p>
            </div> <!--.curso-informacion-->
        </div> <!--.curso-->
        <a href="index.php" class="boton boton__todos boton--primario">Regresar</a>
               
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