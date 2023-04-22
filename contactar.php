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
                print "Formulario De <span>Contacto</span>";
                ?>
            </h2>
        </div>        
    </section>
    
    <main class="contenedor sombra">    

        <section>
            <h2>
                <?php
                echo "Llene El Formulario De Contacto"
                ?>    
            </h2>

            <form class="formulario">
                <fieldset>
                    <legend>Contactanos llenando todos los campos</legend>
                    
                    <label for="nombre">Nombre</label>
                    <input type="text" placeholder="Tu Nombre" id="nombre">

                    <label for="email">E-mail</label>
                    <input type="email" placeholder="Tu Email" id="email">

                    <label for="telefono">Telefono</label>
                    <input type="number" placeholder="Tu Telefono" id="telefono">

                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje"></textarea>
                </fieldset>

                <fieldset>
                    
                    <legend>Información sobre la propiedad</legend>

                    <label for="opciones">Vende o Compra</label>
                    <select id="opciones">
                            <option value="" disabled selected>-- Seleccione --</option>
                            <option value="Compra">Compra</option>
                            <option value="Vende">Vende</option>
                    </select>

                    <label for="presupuesto">Precio o Presupuesto</label>
                    <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto">

                </fieldset>

                <fieldset>

                    <legend>Información sobre la propiedad</legend>

                    <p>Como desea ser contactado</p>

                    <div class="forma-contacto">
                        <label for="contactar-telefono">Telefono</label>
                        <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                        <label for="contactar-email">E-mail</label>
                        <input name="contacto" type="radio" value="email" id="contactar-email">
                    </div>

                    <p>Si Eligió telefono, elija la fecha y la hora</p>

                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha">

                    <label for="hora">Hora:</label>
                    <input type="time" id="hora" min="09:00" max="18:00">

                </fieldset>

                    <div class="">
                        <input class="boton w-sm-100" type="submit" value="Enviar" >
                    </div>

            </form>
        </section>
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
