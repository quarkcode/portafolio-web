<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuarkCode - Desarrollo web</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>

    <div class="logo">
        <img src="img/logo.svg" alt="QuarkCode"> uarkcode
    </div>  

    <div class="container">

        <div class="container-wrapper">

            <header>    
                <h1>Desarrollo<span>web</span></h1>
            </header>

            <section id="intro" class="active">
                <p>
                    La programación es más que código; es el arte de crear soluciones web innovadoras. Como freelance, domino las tecnologías actuales para que tu sitio web destaque y funcione perfectamente.<br>
                    Me especializo en transformar desafíos en soluciones a medida.
                </p>
                <button class="contact"><img src="img/mail.svg" alt="contacto"></button>
            </section>
            
        </div>

    </div>

    <div class="contenedor-video">
        <video autoplay loop muted id="video-fondo" playsinline>
            <source src="img/v<?=random_int(1,2)?>.mp4" type="video/mp4">
            Tu navegador no soporta el tag de video.
        </video>
    </div>

    <div class="pre-loading"></div>
    
</body>
</html>

test12