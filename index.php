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

<?php
    $miIP = ($_SERVER['REMOTE_ADDR'] == "37.223.121.218");
?>

    <header> 

        <div class="logo">
            <a href="#intro"><img src="img/logo.svg" alt="Desarrollo web QuarkCode"> uarkcode</a>
        </div>

        <nav class="menu">
            <ul>
                <li>
                    <a href="#me">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-square-rounded" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z" />
                            <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                            <path d="M6 20.05v-.05a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v.05" />
                        </svg>             
                    </a>
                </li>
                <? if($miIP) { ?>
                <li>
                    <a href="#work">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-grid" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                            <path d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                            <path d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                            <path d="M14 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                        </svg>             
                    </a>
                </li>
                <? } ?>
                <li>
                    <a href="#contact">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                            <path d="M3 7l9 6l9 -6" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>

    </header>


    <div class="container">

        <div class="container-wrapper">
   

            <section id="intro" class="active">

                <h1>Desarrollo<span>web</span></h1>

                <p>
                    La programación es más que código; es el arte de crear soluciones web innovadoras. Como freelance, domino las tecnologías actuales para que tu sitio web destaque y funcione perfectamente.<br>
                    Me especializo en transformar desafíos en soluciones a medida.
                </p>

            </section>
               

            <section id="me">
                
                <h1>Sobre mi</h1>

                <div>
                    <div class="image">
                        <div class="image-container">
                            <img src="/img/me.jpg" alt="Me">
                        </div>
                    </div>
                    <div class="description">
                        <p>Me llamo Miguel Jordan y tengo <strong>más de 15 años de experiencia</strong> en el desarrollo de aplicaciones web. Desde muy pequeño, la programación ha despertado en mí una profunda curiosidad y pasión. A los 8 años, con un MSX, comencé a escribir mis primeras líneas de código, marcando el inicio de mi viaje en este fascinante mundo.</p>
                        <p>Mi compromiso con cada proyecto en el que participo es total, siempre con el objetivo de <strong>aportar lo mejor</strong> de mí mismo. Busco constantemente soluciones innovadoras y efectivas, manteniéndome al día con las últimas tecnologías para maximizar la mejora en todos los aspectos posibles.</p>
                        <p>La filosofía de software libre de <strong>Linux ha sido un punto de inflexión en mi carrera</strong>, impulsándome a explorar distintos entornos de desarrollo para aplicaciones web y ampliar mi conocimiento sobre infraestructura y desarrollo web. Este viaje no solo ha enriquecido mi perfil profesional, sino que también ha reforzado mi aprecio por la colaboración y la apertura en la tecnología.</p>
                    </div>
                </div>

            </section>


            <section id="work">

                <h1>Proyectos</h1>

                <div id="projects-list" class="my-custom-scrollbar">

                    <? for($i=0; $i<12; $i++) { ?>

                    <article id="artcreatiu">

                        <div class="image">
                            <div class="image-container"><img src="/img/projects/artcreatiu/artcreatiu1.jpg" alt="Artcreatiu e-commerce"></div>
                        </div>

                        <div class="info">

                            <h3>Artcreatiu</h3>

                            <div class="details">

                                <ul class="languajes">
                                    <li>PHP</li>
                                    <li>Javascript</li>
                                    <li>SCSS</li>
                                </ul>

                                <div class="description">
                                    Desarrollo web tienda online. Mailing, estadisticas de facturacion, stock, pedidos, etc.
                                </div>

                                <footer> 
                                    
                                    <a href="#" role="link" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5">
                                            </path>
                                        </svg>
                                        Code
                                    </a> 

                                    <a href="https://artcreatiu.com/" role="link" target="_blank">
                                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                        </svg>
                                        Ver
                                    </a> 

                                </footer>

                            </div>

                        </div>

                    </article>

                    <? } ?>

                </div>

            </section>


            <section id="contact">

                <h1>Contacto</h1>

                <form action="" method="post">
                    
                    <p id='msgThanks'>Gracias por tu mensaje.<br>Nos pondremos en contacto contigo pronto.</p>

                    <div id="form-content">
                        <p>Rellena este formulario con tus datos y te contactaré pronto.</p>

                        <div id="msgError"></div>

                        <p><input type="text" name="nombre" placeholder="Nombre" required></p>
                        
                        <p><input type="email" name="email" placeholder="Email" required></p>
                        
                        <p><textarea name="mensaje" placeholder="Mensaje" required></textarea></p>
                        
                        <button type="submit">Enviar</button>
                    </div>

                </form>
                
            </section>
            
        </div>

    </div>


    <div class="contenedor-video">
        <video autoplay loop muted id="video-fondo" playsinline>
            <source src="img/v<?=random_int(1,2)?>.mp4" type="video/mp4">
        </video>
    </div>


    <div class="pre-loading"></div>
    
</body>
</html>