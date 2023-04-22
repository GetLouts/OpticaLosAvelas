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
                </nav>
            </div>
        </div>
    </header>
    
    <section class="hero">
        <div class="contenido-hero">
            <h2> 
                <?php 
                print "Diseño De Cristales y  <span>Monturas</span>";
                ?>
            </h2>
                        
            <div class="ubicacion">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="88" height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffec00" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="11" r="3" />
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                </svg>
                <p> 
                    <?php
                    echo "Caracas";
                    ?>
                </p>
            </div>
            
            <a class="boton boton__todos" href="contactar.php">Contactar</a>
        </div>        
    </section>
    
    <main class="contenedor sombra">
        <h2>
            <?php
            print "Mis servicios";
            ?>
        </h2>
        <div class="servicios">        
            <section class="servicio">
                <h3>
                <?php 
                    echo "Diseño De Monturas";                
                ?>
                </h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eyeglass" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M8 4h-2l-3 10" />
                        <path d="M16 4h2l3 10" />
                        <line x1="10" y1="16" x2="14" y2="16" />
                        <path d="M21 16.5a3.5 3.5 0 0 1 -7 0v-2.5h7v2.5" />
                        <path d="M10 16.5a3.5 3.5 0 0 1 -7 0v-2.5h7v2.5" />
                    </svg>
                
                </div>
                <p>
                <?php
                    echo "Para llegar a elegir las monturas correctamente, y para su eficaz montaje y adaptación, espreciso controlar 2 aspectos fundamentales 
                        :-como son y cómo se utilizan esto implica conocer sus características de forma, dimensión y materiales, los usuarios a quien van dirigidas.";
                ?>
                </p>
                <a class="boton boton__todos boton--primario" href="diseño.php">Mas Información</a>
                
            </section>
            
            <section class="servicio">
                <h3>
                    <?php
                    echo "Variedad De Cristales";
                    ?>
                </h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-zoom-cancel" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="10" cy="10" r="7" />
                        <line x1="8" y1="8" x2="12" y2="12" />
                        <line x1="12" y1="8" x2="8" y2="12" />
                        <line x1="21" y1="21" x2="15" y2="15" />
                    </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-check" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="12" cy="12" r="2" />
                            <path d="M12 19c-4 0 -7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7c-.42 .736 -.858 1.414 -1.311 2.033" />
                            <path d="M15 19l2 2l4 -4" />
                        </svg>
                </div>
                <p>
                    <?php
                    echo "Se conoce como vidrio óptico a una serie de materiales vítreos que por sus especiales características relativas a su índice de refracción y a su número de Abbe, reúnen las propiedades necesarias para ser utilizados en la fabricación de 
                        dispositivos ópticos, tales como lentes, espejos, y prismas,"
                    ?> 
                </p>
                <a href="variedad.php" class="boton boton__todos boton--primario">Mas Información</a>
            </section>

            <section class="servicio">
                <h3>
                    <?php
                    echo "Examen De La Vista"
                    ?>    
                </h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-medical" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                        <rect x="9" y="3" width="6" height="4" rx="2" />
                        <line x1="10" y1="14" x2="14" y2="14" />
                        <line x1="12" y1="12" x2="12" y2="16" />
                    </svg>
                </div>
                <p>
                    <?php
                    echo "Para un mismo paciente, puede existir una diferencia entre la distancia al vértice de la montura y la del anteojo de prueba utilizado durante la refracción, lo que significa que la potencia de la lente compensatoria en 
                        ambas situaciones debe ser diferente."
                    ?>    
                </p>
                <a class="boton boton__todos boton--primario" href="examen.php">Mas Información</a>
            </section>
        </div> <!----. servicios-->    
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
