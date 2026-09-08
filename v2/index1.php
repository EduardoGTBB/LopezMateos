<?php
// CABECERAS DE SEGURIDAD OWASP (Previene Clickjacking y XSS)
header("X-Frame-Options: SAMEORIGIN"); 
header("X-XSS-Protection: 1; mode=block"); 
header("X-Content-Type-Options: nosniff"); 
header("Content-Security-Policy: frame-src 'self' https://www.youtube.com https://ee.kobotoolbox.org;");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Integral López Mateos - Te toca a ti</title>
    
    <!-- Bootstrap 5.3.2 con SRI (Subresource Integrity) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            /* NUEVA PALETA DEL CLIENTE */
            --naranja: #fd8107;
            --verde-claro: #94ee00; /* Verde limón */
            --verde-medio: #00943c;
            --verde-oscuro: #004b13;
            --verde-pdf: #dcefc6; /* Verde claro para fondos */
            --gris-cliente: #ede9df;
            --verde-pdf2: #a9e34b;

            /* Mapeo estricto al diseño existente para NO romper la estructura */
            --color-primario: var(--verde-medio); 
            --color-secundario: var(--verde-pdf); 
            --color-acento: var(--verde-claro);   
            --color-oscuro: var(--verde-oscuro);  
            
            --texto-principal: #333333;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--texto-principal);
            background-color: #ffffff;
            overflow-x: hidden; /* Previene scroll horizontal del SVG */
        }

        /* --- ESTILOS DE LÍNEAS CONECTORAS (CON MÁS ESPACIO) --- */
        .conector-metro {
            position: relative;
            z-index: 1; 
            display: flex;
            justify-content: center;
            align-items: center;
            /* Reducimos el margen negativo para que las secciones no se aplasten */
            margin-top: -30px; 
            margin-bottom: -30px;
            pointer-events: none; 
            width: 100%;
        }
        
        .conector-metro svg {
            width: 100%;
            max-width: 1200px;
            height: 220px; 
            overflow: visible;
        }

        .linea-via {
            fill: none;
            stroke-width: 12px;
            stroke-linecap: round;
            stroke-linejoin: round;
            vector-effect: non-scaling-stroke; /* Blindaje de proporción visual */
        }

        .estacion-nodo {
            fill: white;
            stroke-width: 4px;
            vector-effect: non-scaling-stroke;
        }

        /* BLINDAJE DE Z-INDEX Y PADDING PARA TODAS LAS SECCIONES */
        section, header, footer {
            position: relative;
            z-index: 5; /* Asegura que el contenido tape a las líneas */
        }

        /* Tipografía optimizada para lectura fácil */
        p {
            font-size: 1.15rem;
            line-height: 1.6;
        }
        
        .titulo-seccion {
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        /* Secciones de ancho completo */
        .seccion-clara { background-color: #ffffff; }
        .seccion-gris { background-color: var(--color-secundario); }
        .seccion-oscura { background-color: var(--color-primario); color: #ffffff; }
        .seccion-oscura .titulo-seccion { color: #ffffff; }

        /* Botones sin efectos que distraigan */
        .btn-solido {
            background-color: var(--color-primario);
            color: white;
            padding: 14px 32px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 4px; 
            border: none;
            text-decoration: none;
            display: inline-block;
        }
        .btn-solido:hover {
            background-color: var(--verde-oscuro);
            color: white;
        }

        .btn-acento {
            background-color: var(--color-acento);
            color: var(--verde-oscuro); 
            padding: 14px 32px;
            font-size: 1.1rem;
            font-weight: 800; 
            border-radius: 4px;
            border: none;
            text-decoration: none;
            display: inline-block;
        }
        .btn-acento:hover {
            background-color: var(--verde-pdf2);
            color: var(--verde-oscuro);
        }

        /* Elementos visuales limpios */
        .caja-dato {
            border-left: 4px solid var(--naranja); 
            padding-left: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .numero-gigante {
            font-size: 3rem;
            font-weight: 800;
            color: var(--color-primario);
            line-height: 1;
        }

        /* Ajuste del acordeón institucional */
        .accordion-item {
            border: 1px solid var(--color-primario);
            margin-bottom: 0.5rem;
            border-radius: 4px !important;
        }
        .accordion-button {
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--color-oscuro);
        }
        .accordion-button:not(.collapsed) {
            background-color: var(--color-secundario);
            color: var(--color-oscuro);
            box-shadow: none;
        }
        
        /* Contenedor de lectura angosto para mejorar la comprensión */
        .contenedor-lectura { max-width: 800px; margin: 0 auto; }
        
        /* --- ESTILOS DEL COMPARADOR INTERACTIVO --- */
        .before-after-wrapper {
            position: relative;
            overflow: hidden;
            border: 1px solid var(--color-primario);
        }
        .overlay-img {
            clip-path: polygon(0 0, 50% 0, 50% 100%, 0 100%);
        }
        .slider-input { opacity: 0; cursor: ew-resize; z-index: 5; }
        .slider-handle {
            position: absolute; top: 0; bottom: 0; left: 50%; width: 4px;
            background: var(--naranja); transform: translateX(-50%);
            pointer-events: none; z-index: 4; box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }
        .slider-button {
            position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
            width: 45px; height: 45px; background: white; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            border: 3px solid var(--naranja); box-shadow: 0 2px 6px rgba(0,0,0,0.4);
        }

        /* --- ESTILOS: GESTOR DE COOKIES SEGÚN REFERENCIA VISUAL --- */
        .cookie-banner-wrapper {
            position: fixed;
            bottom: 24px;
            right: 24px;
            width: calc(100% - 48px);
            max-width: 420px;
            z-index: 2000; /* Asegura estar sobre cualquier navbar o modal */
            display: none; /* Oculto por defecto hasta que JS verifique */
            background-color: #ffffff;
            border-radius: var(--radio-bento);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            border: 1px solid rgba(0,0,0,0.05);
        }

        .cookie-btn-dismiss {
            position: absolute;
            top: -18px;
            right: 20px;
            background: #ffffff;
            border: 1px solid #e9ecef;
            border-radius: 30px;
            padding: 6px 16px;
            font-size: 0.85rem;
            color: var(--texto-claro);
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            transition: all 0.2s ease;
            z-index: 2001;
        }

        .cookie-btn-dismiss:hover {
            background: var(--gris-cliente);
            color: var(--texto-oscuro);
        }

        .cookie-actions-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            border-top: 1px solid #e9ecef;
        }

        .btn-cookie-action {
            padding: 16px;
            font-weight: 700;
            border: none;
            background: transparent;
            transition: all 0.2s ease;
        }

        .btn-cookie-config {
            color: var(--texto-claro);
            border-right: 1px solid #e9ecef;
            border-bottom-left-radius: var(--radio-bento);
        }

        .btn-cookie-config:hover {
            background-color: #f8f9fa;
            color: var(--texto-oscuro);
        }

        .btn-cookie-accept {
            color: #ffffff;
            background-color: #009cde; /* Color exacto del botón en image_b6cbc6.png */
            border-bottom-right-radius: var(--radio-bento);
        }

        .btn-cookie-accept:hover {
            background-color: #0081b8;
        }



        .fila-comparativa { border-bottom: 1px solid #dee2e6; padding: 1rem 0; }
        .fila-comparativa:last-child { border-bottom: none; }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-principal">

    <!-- MENÚ FIJO -->
    <nav id="navbar-principal" class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: var(--color-oscuro);">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">
                <div class="d-flex flex-column justify-content-center">
                    <span class="fw-bolder fs-5 text-nowrap lh-1 mb-1" style="color: var(--verde-pdf);">LÓPEZ MATEOS,</span>
                    <span class="fw-bold fs-6 text-nowrap lh-1 opacity-75" style="color: var(--verde-claro);">TE TOCA A TI</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center gap-3">
                    <li class="nav-item"><a class="nav-link text-white" href="#conoce">Conoce el proyecto</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#socializacion">Socialización y Consulta</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#dudas">Resuelve tus dudas</a></li>
                    <li class="nav-item"><a class="btn btn-acento py-2 px-4 ms-lg-3" href="#participa">Participa</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 2.1 PORTADA -->
    <header id="conoce" class="pt-5 pb-5 mt-5">
        <div class="container pt-4">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="d-flex flex-column justify-content-center">
                        <h1 class="display-3 titulo-seccion" style="color: var(--verde-oscuro);">López Mateos,</h1>
                        <h1 class="display-3 titulo-seccion" style="color: var(--verde-medio);">te toca a ti</h1>
                    </div>
                    
                    <p class="mb-4">Conoce la propuesta del Plan Integral de López Mateos: una estrategia para atender los retos de movilidad, transporte público, drenaje, seguridad vial, conectividad y espacio público del corredor.</p>
                    
                    <div class="row mt-5">
                        <div class="col-6 mb-3">
                            <div class="caja-dato">
                                <span class="fw-bold fs-5 d-block">4 Municipios</span>
                                <span class="text-muted small">Guadalajara, Zapopan, Tlaquepaque y Tlajomulco</span>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="caja-dato">
                                <span class="fw-bold fs-5 d-block">2 Tramos</span>
                                <span class="text-muted small">Urbano y suburbano</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="caja-dato">
                                <span class="fw-bold fs-5 d-block">7 Componentes</span>
                                <span class="text-muted small">No es sólo un viaducto</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="caja-dato">
                                <span class="fw-bold fs-5 d-block">Socialización</span>
                                <span class="text-muted small">Consulta: fecha por confirmar</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-2 bg-dark rounded-4">
                        <div class="ratio ratio-16x9 h-100 rounded-3 overflow-hidden d-flex align-items-center justify-content-center">
                            <iframe 
                                src="https://www.youtube.com/embed/199djkIEflw" 
                                title="Video explicativo Plan López Mateos" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                sandbox="allow-scripts allow-same-origin allow-presentation"
                                class="border-0 w-100 h-100"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 2.2 ETAPA ACTUAL -->
    <section class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-md-6 p-4 p-lg-5" style="background-color: var(--color-primario); color: white;">
                <h3 class="fw-bold">1. Ahora · Socialización</h3>
                <p class="mb-0">Estás aquí. Conoce la propuesta, resuelve dudas y comparte tu opinión.</p>
            </div>
            <div class="col-md-6 p-4 p-lg-5" style="background-color: var(--color-oscuro); color: white;">
                <h3 class="fw-bold" style="color: var(--verde-pdf2);">2. Después · Consulta Popular</h3>
                <p class="mb-0">La ciudadanía decidirá sobre el Plan Integral. Fecha por confirmar.</p>
            </div>
        </div>
    </section>

    <!-- LÍNEA CONECTORA 1 (3 Líneas fluidas de Izquierda a Derecha) -->
    <div class="conector-metro d-none d-md-flex">
        <svg viewBox="0 0 1000 220" preserveAspectRatio="none">
            <!-- Naranja -->
            <path class="linea-via" stroke="var(--naranja)" d="M 150 0 L 150 60 Q 150 80 180 80 L 820 80 Q 850 80 850 100 L 850 220" />
            <!-- Verde Medio -->
            <path class="linea-via" stroke="var(--verde-medio)" d="M 180 0 L 180 80 Q 180 110 210 110 L 790 110 Q 820 110 820 140 L 820 220" />
            <!-- Verde Oscuro -->
            <path class="linea-via" stroke="var(--verde-oscuro)" d="M 210 0 L 210 100 Q 210 140 240 140 L 760 140 Q 790 140 790 180 L 790 220" />
            
            <circle cx="150" cy="20" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
            <circle cx="180" cy="40" r="8" class="estacion-nodo" stroke="var(--verde-medio)"/>
            <circle cx="850" cy="200" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
        </svg>
    </div>

    <!-- 2.3 EL PROBLEMA -->
    <section class="seccion-clara py-5 my-lg-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2">
                    <div class="bg-light rounded-4 h-100 min-vh-50 d-flex align-items-center justify-content-center border" style="min-height: 400px; border-color: var(--color-secundario) !important;">
                        <img src="../images/S11.jpg" alt="Tráfico corredor López Mateos" class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover" style="min-height: 400px;">
                    </div>
                </div>
                <div class="col-lg-7 order-lg-1 pe-lg-5">
                    <h2 class="display-5 titulo-seccion mb-4">López Mateos forma parte de tu día</h2>
                    <p class="mb-5">Por el corredor circulan personas que van a casa, al trabajo o a la escuela. También conviven transporte público, vehículos particulares, peatones, ciclistas y carga.</p>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="numero-gigante me-4">+160<span class="fs-4">mil</span></div>
                        <div>
                            <h4 class="fw-bold mb-1">Vehículos al día</h4>
                            <p class="text-muted small mb-0">La concentración genera problemas en la vida cotidiana.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <div class="numero-gigante me-4">&lt;10<span class="fs-4">km/h</span></div>
                        <div>
                            <h4 class="fw-bold mb-1">En hora pico</h4>
                            <p class="text-muted small mb-0">Viajes locales, de paso y transporte público comparten una misma avenida.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <div class="numero-gigante me-4">+50<span class="fs-4">años</span></div>
                        <div>
                            <h4 class="fw-bold mb-1">Antigüedad del drenaje</h4>
                            <p class="text-muted small mb-0">El drenaje actual no responde a la demanda ni a las lluvias.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LÍNEA CONECTORA 2 (2 Líneas de Derecha a Izquierda) -->
    <div class="conector-metro d-none d-md-flex">
        <svg viewBox="0 0 1000 220" preserveAspectRatio="none">
            <!-- Naranja -->
            <path class="linea-via" stroke="var(--naranja)" d="M 850 0 L 850 60 Q 850 90 820 90 L 180 90 Q 150 90 150 120 L 150 220" />
            <!-- Verde Claro -->
            <path class="linea-via" stroke="var(--verde-claro)" d="M 820 0 L 820 80 Q 820 120 790 120 L 210 120 Q 180 120 180 160 L 180 220" />
            
            <circle cx="850" cy="20" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
            <circle cx="150" cy="200" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
        </svg>
    </div>

    <!-- 2.5 LA PROPUESTA -->
    <section class="seccion-gris py-5 border-bottom border-dark-subtle">
        <div class="container py-lg-5">
            <div class="text-center mx-auto mb-5" style="max-width: 750px;">
                <h2 class="display-5 titulo-seccion mb-3">Siete componentes, no una sola obra</h2>
                <p>El Plan propone intervenciones distintas en el tramo urbano y en el suburbano, conectadas como parte de una misma estrategia.</p>
            </div>

            <div class="mx-auto" style="max-width: 1140px;">
                <div class="row justify-content-center gx-4 gy-4">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="d-flex align-items-start border-bottom border-dark-subtle pb-3 h-100">
                            <div class="me-2 fs-3 lh-1" style="color: var(--color-primario);">🚇</div>
                            <div>
                                <h5 class="fw-bold mb-1 fs-6">Viaducto subterráneo</h5>
                                <p class="text-muted mb-0" style="font-size: 0.9rem;">Tramo urbano · 6.28 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="d-flex align-items-start border-bottom border-dark-subtle pb-3 h-100">
                            <div class="me-2 fs-3 lh-1" style="color: var(--color-primario);">🚌</div>
                            <div>
                                <h5 class="fw-bold mb-1 fs-6">Transporte público</h5>
                                <p class="text-muted mb-0" style="font-size: 0.9rem;">Ambos tramos · 4.3 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="d-flex align-items-start border-bottom border-dark-subtle pb-3 h-100">
                            <div class="me-2 fs-3 lh-1" style="color: var(--color-primario);">🚲</div>
                            <div>
                                <h5 class="fw-bold mb-1 fs-6">Ciclovía</h5>
                                <p class="text-muted mb-0" style="font-size: 0.9rem;">Tramo urbano · 6.01 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="d-flex align-items-start border-bottom border-dark-subtle pb-3 h-100">
                            <div class="me-2 fs-3 lh-1" style="color: var(--color-primario);">🚶</div>
                            <div>
                                <h5 class="fw-bold mb-1 fs-6">Cruces seguros</h5>
                                <p class="text-muted mb-0" style="font-size: 0.9rem;">Tramo urbano · 9 cruces</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="d-flex align-items-start border-bottom border-dark-subtle pb-3 h-100">
                            <div class="me-2 fs-3 lh-1" style="color: var(--color-primario);">🌳</div>
                            <div>
                                <h5 class="fw-bold mb-1 fs-6">Espacios públicos</h5>
                                <p class="text-muted mb-0" style="font-size: 0.9rem;">Tramo urbano · Parques</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="d-flex align-items-start border-bottom border-dark-subtle pb-3 h-100">
                            <div class="me-2 fs-3 lh-1" style="color: var(--color-primario);">💧</div>
                            <div>
                                <h5 class="fw-bold mb-1 fs-6">Drenaje</h5>
                                <p class="text-muted mb-0" style="font-size: 0.9rem;">Tramo urbano · 4.6 km</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="d-flex align-items-start border-bottom border-dark-subtle pb-3 h-100">
                            <div class="me-2 fs-3 lh-1" style="color: var(--color-primario);">🌉</div>
                            <div>
                                <h5 class="fw-bold mb-1 fs-6">Viaducto elevado</h5>
                                <p class="text-muted mb-0" style="font-size: 0.9rem;">Tramo suburbano · 11.84 km</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LÍNEA CONECTORA 3 (1 sola Línea Izquierda a Centro) -->
    <div class="conector-metro d-none d-md-flex">
        <svg viewBox="0 0 1000 220" preserveAspectRatio="none">
            <path class="linea-via" stroke="var(--verde-oscuro)" d="M 150 0 L 150 80 Q 150 110 180 110 L 470 110 Q 500 110 500 140 L 500 220" />
            <circle cx="150" cy="20" r="8" class="estacion-nodo" stroke="var(--verde-oscuro)"/>
            <circle cx="500" cy="200" r="8" class="estacion-nodo" stroke="var(--verde-oscuro)"/>
        </svg>
    </div>

    <!-- 2.7 QUÉ CAMBIARÍA -->
    <section class="seccion-clara py-5 border-bottom border-top">
        <div class="container py-lg-4 pt-5 mt-md-4">
            <div class="contenedor-lectura text-center mb-5">
                <span class="text-uppercase fw-bold mb-2 d-inline-block px-3 py-1 rounded-pill shadow-sm" style="background-color: var(--color-secundario); color: var(--color-oscuro);">Hoy vs con el Plan</span>
                <h2 class="display-5 titulo-seccion mb-4">Así podría cambiar López Mateos</h2>
                <p>La propuesta busca transformar una avenida saturada y difícil de cruzar a un espacio mejor conectado, con transporte público más eficiente, cruces seguros, ciclovía, drenaje renovado y más áreas públicas.</p>
            </div>

            <div class="before-after-wrapper position-relative mx-auto rounded-2 mb-5" style="max-width: 1000px; height: 55vh; min-height: 400px;">
                <img src="../images/S.1.jpg" alt="López Mateos Hoy" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0">
                <img src="../images/diapositiva_29.png" alt="López Mateos con el Plan" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0 overlay-img" id="afterImage">
                
                <div class="slider-handle" id="sliderHandle">
                    <div class="slider-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="var(--naranja)" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8ZM7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2ZM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10Z"/>
                        </svg>
                    </div>
                </div>
                <input type="range" min="0" max="100" value="50" class="position-absolute top-0 start-0 w-100 h-100 slider-input" id="compareSlider" aria-label="Comparador interactivo de imágenes">
                <span class="position-absolute top-0 start-0 m-3 z-3 px-3 py-1 bg-dark text-white rounded-1 fw-bold fs-6 shadow">HOY</span>
                <span class="position-absolute top-0 end-0 m-3 z-3 px-3 py-1 rounded-1 fw-bold fs-6 shadow" style="background-color: var(--naranja); color: #fff;">CON EL PLAN</span>
            </div>

            <!-- Tabla de Comparación Limpia -->
            <div class="contenedor-lectura p-4 p-md-5 bg-light rounded-2 border">
                <div class="row gx-4 mb-2 pb-2 border-bottom border-dark">
                    <div class="col-6 fw-bold text-uppercase text-muted">❌ Hoy</div>
                    <div class="col-6 fw-bold text-uppercase" style="color: var(--color-primario);">✅ Con el Plan</div>
                </div>
                <div class="fila-comparativa row gx-4 align-items-center">
                    <div class="col-6 text-muted">Tráfico local y de paso mezclado</div>
                    <div class="col-6 fw-semibold text-dark">Separación de flujos en tramos estratégicos</div>
                </div>
                <div class="fila-comparativa row gx-4 align-items-center">
                    <div class="col-6 text-muted">Transporte público atrapado en el tráfico</div>
                    <div class="col-6 fw-semibold text-dark">Carriles exclusivos y rutas exprés</div>
                </div>
                <div class="fila-comparativa row gx-4 align-items-center">
                    <div class="col-6 text-muted">Sin ciclovías protegidas</div>
                    <div class="col-6 fw-semibold text-dark">Ciclovía confinada</div>
                </div>
                <div class="fila-comparativa row gx-4 align-items-center">
                    <div class="col-6 text-muted">Puentes peatonales poco accesibles</div>
                    <div class="col-6 fw-semibold text-dark">Cruces seguros a nivel de calle</div>
                </div>
                <div class="fila-comparativa row gx-4 align-items-center">
                    <div class="col-6 text-muted">Drenaje rebasado</div>
                    <div class="col-6 fw-semibold text-dark">Nuevos colectores sanitario y pluvial</div>
                </div>
                <div class="fila-comparativa row gx-4 align-items-center">
                    <div class="col-6 text-muted">Poco espacio público de calidad</div>
                    <div class="col-6 fw-semibold text-dark">Parques lineales, arbolado y áreas de convivencia</div>
                </div>
                <div class="mt-5 ps-4 border-start border-4" style="border-color: var(--naranja) !important;">
                    <p class="fst-italic fs-5 text-dark mb-0">
                        El objetivo no es solo mover más autos: <strong style="color: var(--color-primario);">es mejorar la experiencia de todas las personas que usan el corredor.</strong>     
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- LÍNEA CONECTORA 4 (3 Líneas de Centro a Derecha) -->
    <div class="conector-metro d-none d-md-flex">
        <svg viewBox="0 0 1000 220" preserveAspectRatio="none">
            <!-- Naranja -->
            <path class="linea-via" stroke="var(--naranja)" d="M 500 0 L 500 60 Q 500 80 530 80 L 820 80 Q 850 80 850 100 L 850 220" />
            <!-- Verde Medio -->
            <path class="linea-via" stroke="var(--verde-medio)" d="M 470 0 L 470 80 Q 470 110 500 110 L 790 110 Q 820 110 820 140 L 820 220" />
            <!-- Verde Claro -->
            <path class="linea-via" stroke="var(--verde-claro)" d="M 440 0 L 440 100 Q 440 140 470 140 L 760 140 Q 790 140 790 180 L 790 220" />
            
            <circle cx="500" cy="20" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
            <circle cx="850" cy="200" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
        </svg>
    </div>

    <!-- 2.6 MAPA DEL CORREDOR -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="display-6 titulo-seccion mb-4 py-lg-4 pt-5 mt-md-4">Explora el corredor tramo por tramo</h2>
            <div class="bg-light border border-dark-subtle d-flex align-items-center justify-content-center w-100" style="height: 450px;">
                <iframe 
                    src="../mapa-interactivo/index.html" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    title="Mapa Interactivo del Plan Integral Distrito López Mateos">
                </iframe>
            </div>
        </div>
    </section>

    <!-- LÍNEA CONECTORA 5 (2 Líneas de Derecha a Izquierda) -->
    <div class="conector-metro d-none d-md-flex">
        <svg viewBox="0 0 1000 220" preserveAspectRatio="none">
            <path class="linea-via" stroke="var(--verde-oscuro)" d="M 850 0 L 850 60 Q 850 90 820 90 L 180 90 Q 150 90 150 120 L 150 220" />
            <path class="linea-via" stroke="var(--naranja)" d="M 820 0 L 820 80 Q 820 120 790 120 L 210 120 Q 180 120 180 160 L 180 220" />
            
            <circle cx="850" cy="20" r="8" class="estacion-nodo" stroke="var(--verde-oscuro)"/>
            <circle cx="150" cy="200" r="8" class="estacion-nodo" stroke="var(--verde-oscuro)"/>
        </svg>
    </div>

    <!-- 2.9 SOCIALIZACIÓN Y CONSULTA -->
    <section id="socializacion" class="seccion-gris py-5">
        <div class="container py-lg-5 text-center">
            <h2 class="display-5 titulo-seccion mb-4">Infórmate antes de decidir</h2>
            <p class="contenedor-lectura mb-5">La socialización es el periodo previo a la Consulta Popular. Puedes informarte por cuatro vías:</p>
            
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-md-3">
                    <h5 class="fw-bold" style="color: var(--verde-oscuro:);">📍 Módulos</h5>
                    <p class="small">30 puntos en el corredor.</p>
                </div>
                <div class="col-6 col-md-3">
                    <h5 class="fw-bold" style="color: var(--verde-oscuro:);">💻 Sitio web</h5>
                    <p class="small">Documentos y mapas.</p>
                </div>
                <div class="col-6 col-md-3">
                    <h5 class="fw-bold" style="color: var(--verde-oscuro:);">🗣️ Reuniones</h5>
                    <p class="small">Diálogo con vecinos.</p>
                </div>
                <div class="col-6 col-md-3">
                    <h5 class="fw-bold" style="color: var(--verde-oscuro:);">🏠 Visitas</h5>
                    <p class="small">A viviendas cercanas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- LÍNEA CONECTORA 6 (1 Línea de Izquierda a Centro) -->
    <div class="conector-metro d-none d-md-flex">
        <svg viewBox="0 0 1000 220" preserveAspectRatio="none">
            <path class="linea-via" stroke="var(--verde-medio)" d="M 150 0 L 150 80 Q 150 110 180 110 L 470 110 Q 500 110 500 140 L 500 220" />
            <circle cx="150" cy="20" r="8" class="estacion-nodo" stroke="var(--verde-medio)"/>
            <circle cx="500" cy="200" r="8" class="estacion-nodo" stroke="var(--verde-medio)"/>
        </svg>
    </div>

    <!-- 2.10 PARTICIPA -->
    <section id="participa" class="seccion-clara py-5">
        <div class="container py-5 text-center contenedor-lectura">
            <h2 class="display-5 titulo-seccion mb-4">Tu opinión es parte del futuro</h2>
            <p class="mb-5">Después de conocer el Plan Integral de López Mateos, comparte tu opinión. Responder el cuestionario te tomará pocos minutos. <br><br><strong style="color: var(--color-oscuro);">Este formulario forma parte de la etapa de socialización y no corresponde a la votación de la Consulta Popular.</strong></p>
            
            <!-- Contenedor Dinámico del Formulario -->
            <div class="border p-4 p-md-5 text-center rounded-3 shadow-sm" style="background-color: var(--color-secundario);" id="contenedor-kobo">
                <div id="kobo-prompt">
                    <div class="fs-1 mb-3">📋</div>
                    <h4 class="fw-bold mb-4" style="color: var(--color-oscuro);">Formulario de Participación</h4>
                    <button class="btn-acento" id="btn-cargar-form">
                        Hacer clic para llenar el formulario
                    </button>
                </div>
                <!-- El Iframe se inyectará aquí mediante Javascript -->
            </div>
        </div>
    </section>

    <!-- LÍNEA CONECTORA 7 (2 Líneas del Centro Bifurcándose) -->
    <div class="conector-metro d-none d-md-flex">
        <svg viewBox="0 0 1000 220" preserveAspectRatio="none">
            <!-- Izquierda Naranja -->
            <path class="linea-via" stroke="var(--naranja)" d="M 480 0 L 480 60 Q 480 90 450 90 L 180 90 Q 150 90 150 120 L 150 220" />
            <!-- Derecha Verde Claro -->
            <path class="linea-via" stroke="var(--verde-claro)" d="M 520 0 L 520 60 Q 520 90 550 90 L 820 90 Q 850 90 850 120 L 850 220" />
            
            <circle cx="480" cy="20" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
            <circle cx="150" cy="200" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
            <circle cx="520" cy="20" r="8" class="estacion-nodo" stroke="var(--verde-claro)"/>
            <circle cx="850" cy="200" r="8" class="estacion-nodo" stroke="var(--verde-claro)"/>
        </svg>
    </div>

    <!-- 2.11 RESUELVE TUS DUDAS -->
    <section id="dudas" class="py-5">
        <div class="container py-lg-4 contenedor-lectura">
            <h2 class="display-6 titulo-seccion text-center mb-5">Respuestas claras para tomar una decisión informada</h2>
            
            <div class="accordion mb-5" id="accordionFaq">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            ¿El Plan consiste únicamente en un viaducto?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                        <div class="accordion-body text-muted bg-white">
                            No. El Plan combina siete componentes: viaducto subterráneo, transporte público, ciclovía, cruces seguros, espacios públicos, drenaje y viaducto elevado.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            ¿Por qué es necesario este proyecto?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                        <div class="accordion-body text-muted bg-white">
                            Porque los problemas del corredor —saturación, transporte público lento, cruces inseguros e inundaciones— están relacionados entre sí y requieren una solución integral.
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center border-top border-dark-subtle pt-4 mt-5">
                <p class="fw-bold mb-3">¿No encuentras tu pregunta?</p>
                <a href="#" class="btn-solido">Resolver dudas por WhatsApp</a>
            </div>
        </div>
    </section>

    <!-- 2.12 PIE DE PÁGINA -->
    <footer class="py-5" style="background-color: var(--color-oscuro); color: white;">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-5">
                    <h4 class="fw-bold mb-3" style="color: var(--verde-pdf2);">Plan Integral López Mateos</h4>
                    <p class="small text-white-50">Una estrategia para atender los retos de movilidad, transporte público, drenaje, seguridad vial, conectividad y espacio público del corredor.</p>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <h5 class="fw-bold mb-3" style="color: var(--verde-pdf2);">Navegación</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2 small">
                        <li><a href="#conoce" class="text-white-50 text-decoration-none">Inicio</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">El proyecto a detalle</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Preguntas frecuentes</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Documentos y antecedentes</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 text-lg-end">
                    <h5 class="fw-bold mb-3" style="color: var(--verde-pdf2);">Contacto</h5>
                    <p class="small text-white-50 mb-1">Gobierno del Estado de Jalisco</p>
                    <a href="#" class="text-white-50 text-decoration-none small text-decoration-underline mt-2 d-inline-block">Aviso de Privacidad</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- ========================================== -->
    <!-- 1. AQUÍ COLOCAS EL HTML DEL BANNER DE COOKIES -->
    <!-- ========================================== -->
    <div id="cookieConsentBanner" class="cookie-banner-wrapper">
        <button id="btn-cookie-dismiss" class="cookie-btn-dismiss">Continuar sin aceptar</button>
        
        <div class="p-4 pt-5 pb-3">
            <h3 class="fw-bolder mb-3" style="color: var(--texto-oscuro);">Gestión de cookies</h3>
            <!-- ... resto del contenido del banner ... -->
        </div>
        
        <div class="cookie-actions-grid">
            <button id="btn-cookie-settings" class="btn-cookie-action btn-cookie-config">Parametrizar</button>
            <button id="btn-cookie-accept" class="btn-cookie-action btn-cookie-accept">Aceptar</button>
        </div>
    </div>

    <!-- Bootstrap JS con SRI (OWASP Standard) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Script General -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            /* --- 1. LÓGICA DEL COMPARADOR DE IMÁGENES --- */
            const slider = document.getElementById('compareSlider');
            const afterImg = document.getElementById('afterImage');
            const sliderHandle = document.getElementById('sliderHandle'); 

            if(slider && afterImg && sliderHandle) {
                function updateSliderPosition(value) {
                    afterImg.style.clipPath = `inset(0 0 0 ${value}%)`;
                    sliderHandle.style.left = `${value}%`; 
                }
                slider.addEventListener('input', (e) => updateSliderPosition(e.target.value));
                updateSliderPosition(slider.value);
            }

            /* --- 2. CARGA DINÁMICA DEL FORMULARIO KOBOTOOLBOX --- */
            const btnCargarForm = document.getElementById('btn-cargar-form');
            const contenedorKobo = document.getElementById('contenedor-kobo');

            if(btnCargarForm && contenedorKobo) {
                btnCargarForm.addEventListener('click', function() {
                    // Reemplaza el botón por el iframe de manera segura
                    contenedorKobo.innerHTML = `
                        <iframe 
                            src="https://ee.kobotoolbox.org/yCu22I6o" 
                            title="Formulario de Participación Ciudadana"
                            sandbox="allow-scripts allow-same-origin allow-forms allow-popups"
                            allow="geolocation"
                            class="w-100 rounded-3 border-0 bg-transparent"
                            style="min-height: 750px; overflow-y: auto;">
                        </iframe>
                    `;
                });
            }

            // Reseteo de seguridad: Evita que el navegador intente recordar posiciones antiguas
            if (window.location.hash === '') {
                window.history.scrollRestoration = 'manual';
                window.scrollTo(0, 0);
            }

            /* --- 3. LÓGICA DE COOKIES (OWASP COMPLIANT) --- */
            const cookieBanner = document.getElementById('cookieConsentBanner');
            const btnAcceptCookies = document.getElementById('btn-cookie-accept');
            const btnDismissCookies = document.getElementById('btn-cookie-dismiss');

            // Función segura para verificar si la cookie ya existe
            function checkCookie(name) {
                return document.cookie.split(';').some(c => {
                    return c.trim().startsWith(name + '=');
                });
            }

            // Función que inyecta los flags Secure y SameSite=Strict recomendados por OWASP
            function setSecureCookie(name, value, days) {
                let expires = "";
                if (days) {
                    const date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                
                // Si la página está en HTTPS, fuerza el flag 'Secure'
                const isSecure = location.protocol === 'https:' ? '; Secure' : '';
                
                // SameSite=Strict previene ataques CSRF (Cross-Site Request Forgery)
                document.cookie = `${name}=${value}${expires}; path=/; SameSite=Strict${isSecure}`;
            }

            if(cookieBanner) {
                // Comprobar estado al cargar la página
                if (!checkCookie('lm_consentimiento_cookies')) {
                    // Solo se muestra si el usuario no ha tomado una decisión
                    cookieBanner.style.display = 'block';
                }

                // Evento: Aceptar Cookies
                if(btnAcceptCookies) {
                    btnAcceptCookies.addEventListener('click', function() {
                        setSecureCookie('lm_consentimiento_cookies', 'aceptado', 365);
                        cookieBanner.style.display = 'none';
                    });
                }

                // Evento: Continuar sin aceptar (Descarta el banner y guarda preferencia negativa)
                if(btnDismissCookies) {
                    btnDismissCookies.addEventListener('click', function() {
                        setSecureCookie('lm_consentimiento_cookies', 'rechazado', 365);
                        cookieBanner.style.display = 'none';
                    });
                }
            }
        });
    </script>
</body>
</html>