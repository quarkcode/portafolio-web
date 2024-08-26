<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Programador web freelance experto en desarrollo y programación web a medida. Especializado en HTML, CSS, JavaScript y frameworks modernos para transformar desafíos en soluciones digitales personalizadas. Contáctame para llevar tu proyecto al siguiente nivel.">
    <title>QuarkCode - Desarrollo web</title>
    <link rel="icon" href="/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" fetchpriority="high" as="image" href="/img/bg.webp" type="image/webp">

    <script src="/js/script.min.js"></script>
</head>
<body>

<?php
    $miIP = ($_SERVER['REMOTE_ADDR'] == "77.230.163.199");
    $miIP = false;
?>

    <header> 

        <div class="logo">
            <a href="#intro"><img src="img/logo.svg" alt="Desarrollo web QuarkCode" width="42" height="42"> uarkcode</a>
        </div>

        <nav class="menu">
            <ul>
                <li>
                    <a href="#me" title="Sobre mi">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-square-rounded" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z" />
                            <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                            <path d="M6 20.05v-.05a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v.05" />
                        </svg>             
                    </a>
                </li>
                <li>
                    <a href="#servicios" title="Servicios">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-assembly" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z" />
                            <path d="M15.5 9.422c.312 .18 .503 .515 .5 .876v3.277c0 .364 -.197 .7 -.515 .877l-3 1.922a1 1 0 0 1 -.97 0l-3 -1.922a1 1 0 0 1 -.515 -.876v-3.278c0 -.364 .197 -.7 .514 -.877l3 -1.79c.311 -.174 .69 -.174 1 0l3 1.79h-.014z" />
                        </svg>          
                    </a>
                </li>
                <li style="display:none">
                    <a href="#work" title="my works">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-grid" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                            <path d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                            <path d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                            <path d="M14 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                        </svg>             
                    </a>
                </li>
                <li>
                    <a href="#contact" title="Contacto">
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
   

            <section id="intro" class=" active">

                <h1>Desarrollo<span>web</span></h1>

                <p>
                    La programación es más que código; es el arte de crear soluciones web innovadoras. Como freelance, domino las tecnologías actuales para que tu sitio web destaque y funcione perfectamente.<br>
                    Me especializo en transformar desafíos en soluciones a medida.
                </p>

            </section>
               

            <section id="me" class="">
                
                <h2>Sobre mi</h2>

                <div>
                    <div class="image">
                        <div class="image-container">
                            <img src="/img/me.jpg" alt="Me" width="260" height="260">
                        </div>
                    </div>
                    <div class="description">
                        <p>Me llamo Miguel Jordan y tengo <strong>más de 15 años de experiencia</strong> en el desarrollo de aplicaciones web. Desde muy pequeño, la programación ha despertado en mí una profunda curiosidad y pasión. A los 8 años, con un MSX, comencé a escribir mis primeras líneas de código, marcando el inicio de mi viaje en este fascinante mundo.</p>
                        <p>Mi compromiso con cada proyecto en el que participo es total, siempre con el objetivo de <strong>aportar lo mejor</strong> de mí mismo. Busco constantemente soluciones innovadoras y efectivas, manteniéndome al día con las últimas tecnologías para maximizar la mejora en todos los aspectos posibles.</p>
                        <p>La filosofía de software libre de <strong>Linux ha sido un punto de inflexión en mi carrera</strong>, impulsándome a explorar distintos entornos de desarrollo para aplicaciones web y ampliar mi conocimiento sobre infraestructura y desarrollo web. Este viaje no solo ha enriquecido mi perfil profesional, sino que también ha reforzado mi aprecio por la colaboración y la apertura en la tecnología.</p>
                    </div>
                </div>

            </section>


            <section id="servicios" class="">
                
                <h2>Servicios</h2>

                <div>

                    <div id="desarrollo-web">
                        <h3>Desarrollo Web</h3>
                        <ul>
                            <li><strong>Gestión de hosting y dominios:</strong> Administración completa de servidores y dominios para asegurar un entorno web robusto y seguro.</li>
                            <li><strong>Desarrollo web avanzado:</strong> Creación de sitios web a medida y personalización utilizando cualquier CMS o desarrollando soluciones personalizadas.</li>
                            <li><strong>Accesibilidad web:</strong> Implementación de prácticas de accesibilidad para garantizar que todos los usuarios puedan interactuar con tu sitio web sin barreras.</li>
                            <li><strong>Integraciones avanzadas:</strong> Conexión de tu sitio web con APIs o servicios web de terceros para mejorar su funcionalidad.</li>
                        </ul>
                    </div>

                    <div id="ecommerce">
                        <h3>E-commerce</h3>
                        <ul>
                            <li><strong>Desarrollo de tiendas online:</strong> Creación integral de tiendas online adaptadas a tus necesidades y objetivos.</li>
                            <li><strong>Personalización y creación de plantillas:</strong> Diseño y desarrollo de plantillas únicas y a medida para tu tienda online.</li>
                            <li><strong>Desarrollo de plugins:</strong> Creación de plugins personalizados para optimizar y expandir las capacidades de tu plataforma CMS.</li>
                            <li><strong>Migraciones y transferencia de bases de datos:</strong> Migración segura y eficiente de tiendas y datos entre diferentes plataformas.</li>
                            <li><strong>Experiencia en múltiples plataformas:</strong> Especialización en Prestashop, Shopify, WooCommerce y soluciones a medida.</li>
                        </ul>
                    </div>

                    <div id="seo">
                        <h3>Posicionamiento en Buscadores (SEO)</h3>
                        <ul>
                            <li><strong>Optimización básica para motores de búsqueda:</strong> Mejora de la visibilidad de tu sitio en internet mediante técnicas SEO fundamentales.</li>
                            <li><strong>Análisis de palabras clave:</strong> Identificación de términos relevantes para posicionar tu contenido estratégicamente.</li>
                            <li><strong>Optimización estructural y de contenido:</strong> Mejora de la estructura y el contenido interno del sitio para maximizar el rendimiento en buscadores.</li>
                            <li><strong>Creación de metadatos estructurados:</strong> Implementación de datos estructurados para mejorar la comprensión de los motores de búsqueda sobre tu contenido.</li>
                            <li><strong>Informes de seguimiento:</strong> Reportes periódicos para evaluar y ajustar la estrategia de SEO según los resultados obtenidos.</li>
                        </ul>
                    </div>

                    <div id="ciberseguridad">
                        <h3>Ciberseguridad</h3>
                        <ul>
                            <li><strong>Protección antimalware y soluciones de seguridad:</strong> Implementación de medidas de seguridad para proteger tu entorno web contra amenazas.</li>
                            <li><strong>Seguridad en correos electrónicos:</strong> Configuración de firmas DKIM, SPF y otros recursos para asegurar la autenticidad de los correos electrónicos.</li>
                            <li><strong>Análisis de amenazas y vulnerabilidades:</strong> Detección y solución de problemas de seguridad en tu sitio web.</li>
                            <li><strong>Actualizaciones de seguridad:</strong> Mantenimiento y actualización constante de las plataformas y entornos web para prevenir brechas de seguridad.</li>
                        </ul>
                    </div>

                    <div id="integracion-ia">
                        <h3>Integraciones de Inteligencia Artificial</h3>
                        <ul>
                            <li><strong>Automatización de procesos:</strong> Implementación de soluciones de IA para automatizar y optimizar procesos empresariales.</li>
                            <li><strong>Integración de APIs de IA:</strong> Conexión de tu sitio web con APIs o servicios de inteligencia artificial para ampliar sus capacidades.</li>
                            <li><strong>Formación en IA generativa:</strong> Capacitación básica para gestionar y aprovechar la inteligencia artificial generativa en tus proyectos.</li>
                        </ul>
                    </div>
                
                </div>

            </section>


            <? if ($miIP) { ?>
            <section id="work" class="">

                <h2>Proyectos</h2>

                <div id="projects-list" class="my-custom-scrollbar">

                    <?php

                        $archivoCSV = 'portfolio.csv';
                        $projects = array();

                        if (($handle = fopen($archivoCSV, "r")) !== FALSE) {
                            $encabezados = fgetcsv($handle, 1000, ",");

                            while (($datos = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                $project = array_combine($encabezados, $datos);
                                if ($project['active']) 
                                    $projects[] = $project;
                            }
                            fclose($handle);
                        }

						foreach ($projects as $project) {
                            $title = $project['id'];
                            $id = preg_replace('/[^a-z0-9]/', '', strtolower($project['id']));
                            $year_start = $project['year_start'];
                            $year_end = $project['year_end'];
                            $description = $project['description'];
                            $stacks = explode(",",$project['stack']);
                            $cms = $project['cms'];
                            $link = $project['link'];
                            $code = $project['code'];
                            $active = $project['active'];
                            $img = (file_exists("./img/projects/".$id."/".$id."1.jpg")) ? "/img/projects/".$id."/".$id."1.jpg" : null;
                            
                    ?>

                    <article id="<?=$id?>">

                        <div class="image">
                            <?php if ($img) { ?>
                                <div class="image-container">
                                    <img src="<?=$img?>" alt="<?=$title?>" width="425" height="425">
                                </div>
                            <?php } else { ?>
                                <div class="no-image">

                                </div>
                            <?php } ?>
                        </div>

                        <div class="info">

                            <h3><?=$title?></h3>

                            <div class="details">

                                <ul class="languajes">
                                    <?php foreach ($stacks as $stack) { ?>
                                        <li><?=$stack?></li>
                                    <?php } ?>
                                </ul>

                                <div class="description"><?=$description?></div>

                                <footer>
                                    
                                    <?php if ($code) { ?>
                                        <a href="#" role="link" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5">
                                                </path>
                                            </svg>
                                        </a> 
                                    <?php } ?>

                                    <?php if ($link) { ?>
                                        <a href="<?=$link?>" role="link" target="_blank">
                                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                            </svg>
                                        </a> 
                                    <?php } ?>

                                </footer>

                            </div>

                        </div>

                    </article>

                    <?php } ?>

                </div>

            </section>
            <? } ?>


            <section id="contact" class="">

                <h2>Contacto</h2>

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