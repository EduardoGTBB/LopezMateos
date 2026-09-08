<?php
// CABECERAS DE SEGURIDAD OWASP
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
    
    <!-- Bootstrap 5.3.2 con SRI (Seguridad OWASP) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        /* PALETA DE COLORES DEL CLIENTE */
        :root {
            --naranja: #fd8107;
            --verde-claro: #94ee00; /* Verde limón */
            --verde-medio: #00943c;
            --verde-oscuro: #004b13;
            --verde-pdf: #dcefc6; /* Verde claro para fondos */
            --gris-cliente: #ede9df;
            --verde-pdf2: #a9e34b;
            
            /* Asignación a tu estructura original */
            --color-primario: var(--verde-oscuro);
            --color-secundario: var(--verde-pdf); 
            --color-acento: var(--verde-claro);
            --texto-oscuro: #212529;
            --texto-claro: #6c757d;
            --radio-bento: 24px;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--texto-oscuro);
        }

        /* ENVOLTURA PRINCIPAL (Evita el scroll horizontal sin romper el fixed) */
        .wrapper-principal {
            overflow-x: hidden;
            width: 100%;
        }

        /* --- ESTILOS DE LÍNEAS CONECTORAS --- */
        .conector-metro {
            position: relative;
            z-index: 1; /* Mandamos las líneas al fondo */
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -30px; 
            margin-bottom: -30px;
            pointer-events: none; 
            width: 100%;
        }
        
        .conector-metro svg {
            width: 100%;
            max-width: 1200px;
            height: 120px; 
            overflow: visible;
        }

        .linea-via {
            fill: none;
            stroke-width: 12px;
            stroke-linecap: round;
            stroke-linejoin: round;
            vector-effect: non-scaling-stroke;
        }

        .estacion-nodo {
            fill: white;
            stroke-width: 5px;
            vector-effect: non-scaling-stroke;
        }

        /* --- CONTENEDORES SUPERIORES --- */
        .bento-card, .banner-zindex {
            position: relative;
            z-index: 5; /* Por encima de las líneas */
        }

        /* Navegación */
        .navbar {
            background-color: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            z-index: 1000;
        }
        
        .nav-link {
            font-weight: 500;
            color: var(--texto-oscuro) !important;
        }

        /* Bento Cards */
        .bento-card {
            background-color: #ffffff;
            border-radius: var(--radio-bento);
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            height: 100%;
        }

        /* Botones */
        .btn-principal {
            background-color: var(--verde-medio);
            color: white;
            border-radius: 50px;
            padding: 12px 28px;
            font-weight: 600;
            border: none;
            transition: background-color 0.2s ease;
        }

        .btn-principal:hover {
            background-color: var(--verde-oscuro);
            color: white;
        }

        .btn-destacado {
            background-color: var(--verde-claro); 
            color: var(--verde-oscuro); 
            border-radius: 50px;
            padding: 10px 24px;
            font-weight: 700;
            transition: background-color 0.2s ease;
        }

        .btn-destacado:hover {
            background-color: var(--verde-pdf2);
            color: var(--verde-oscuro);
        }

        .seccion-titulo {
            font-weight: 800;
            letter-spacing: -1px;
            line-height: 1.2;
        }
        
        .cifra-destacada {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--verde-medio); 
        }

        .accordion-button:not(.collapsed) {
            background-color: var(--verde-pdf); 
            color: var(--verde-oscuro);
            box-shadow: none;
        }
        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0,0,0,0.1);
        }

        /* Estilos Comparador Interactivo */
        .before-after-wrapper {
            position: relative;
            overflow: hidden;
            border: 2px solid var(--verde-oscuro); 
            z-index: 5;
        }
        .overlay-img {
            clip-path: polygon(0 0, 50% 0, 50% 100%, 0 100%);
        }
        .slider-input {
            opacity: 0;
            cursor: ew-resize;
            z-index: 5;
        }
        .slider-handle {
            position: absolute;
            top: 0; bottom: 0; left: 50%; width: 4px;
            background: white; 
            transform: translateX(-50%);
            pointer-events: none; z-index: 4;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }
        .slider-button {
            position: absolute; top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 45px; height: 45px; background: white;
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.4);
        }

        /* --- ESTILOS: GESTOR DE PREFERENCIAS (Ofuscado anti Ad-Blockers) --- */
        .lm-panel-flotante {
            position: fixed;
            bottom: 24px;
            right: 24px;
            width: calc(100% - 48px);
            max-width: 420px;
            z-index: 2000; 
            display: none; 
            background-color: #ffffff;
            border-radius: var(--radio-bento);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            border: 1px solid rgba(0,0,0,0.05);
        }

        .lm-btn-cerrar {
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

        .lm-btn-cerrar:hover {
            background: var(--gris-cliente);
            color: var(--texto-oscuro);
        }

        .lm-acciones-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            border-top: 1px solid #e9ecef;
        }

        .lm-btn-accion {
            padding: 16px;
            font-weight: 700;
            border: none;
            background: transparent;
            transition: all 0.2s ease;
        }

        .lm-btn-config {
            color: var(--texto-claro);
            border-right: 1px solid #e9ecef;
            border-bottom-left-radius: var(--radio-bento);
        }

        .lm-btn-config:hover {
            background-color: #f8f9fa;
            color: var(--texto-oscuro);
        }

        .lm-btn-aceptar {
            color: #ffffff;
            background-color: #009cde; 
            border-bottom-right-radius: var(--radio-bento);
        }

        .lm-btn-aceptar:hover {
            background-color: #0081b8;
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-principal">
    <!-- INICIO DE LA ENVOLTURA PRINCIPAL -->
    <div class="wrapper-principal">

        <!-- MENÚ FIJO -->
        <nav id="navbar-principal" class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container-fluid px-4">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <div class="d-flex flex-column justify-content-center">
                        <span class="fw-bolder fs-5 text-nowrap lh-1 mb-1" style="color: var(--verde-oscuro);">LÓPEZ MATEOS,</span>
                        <span class="fw-bold fs-6 text-nowrap lh-1" style="color: var(--verde-medio);">TE TOCA A TI</span>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav align-items-center gap-3">
                        <li class="nav-item"><a class="nav-link" href="#conoce">Conoce el proyecto</a></li>
                        <li class="nav-item"><a class="nav-link" href="#socializacion">Socialización y Consulta</a></li>
                        <li class="nav-item"><a class="nav-link" href="#dudas">Resuelve tus dudas</a></li>
                        <li class="nav-item"><a class="btn btn-destacado shadow-sm" href="#participa">Participa</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- 2.1 PORTADA -->
        <section id="conoce" class="container-fluid mt-5 pt-5 mb-5">
            <div class="row g-4 px-3">
                <div class="col-lg-6">
                    <div class="bento-card d-flex flex-column justify-content-center">
                        <h1 class="display-4 seccion-titulo mb-4" style="color: var(--verde-oscuro);">López Mateos<br>te toca a ti</h1>
                        <p class="fs-5 text-muted mb-4">Conoce la propuesta del Plan Integral de López Mateos: una estrategia para atender los retos de movilidad, transporte público, drenaje y espacio público.</p>
                        
                        <div class="row g-3 mt-2">
                            <div class="col-6">
                                <div class="p-3 bg-light rounded-4 border">
                                    <h4 class="fw-bold mb-1" style="color: var(--verde-medio);">4</h4>
                                    <small class="text-muted fw-semibold">Municipios beneficiados</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 bg-light rounded-4 border">
                                    <h4 class="fw-bold mb-1" style="color: var(--verde-medio);">2</h4>
                                    <small class="text-muted fw-semibold">Tramos de intervención</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 bg-light rounded-4 border">
                                    <h4 class="fw-bold mb-1" style="color: var(--verde-medio);">7</h4>
                                    <small class="text-muted fw-semibold">Componentes de obra</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 rounded-4 border" style="background-color: var(--verde-pdf);">
                                    <h4 class="fw-bold mb-1" style="color: var(--verde-oscuro);">Ahora</h4>
                                    <small class="text-dark fw-semibold">Etapa de socialización</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bento-card p-2" style="background-color: var(--verde-oscuro);">
                        <div class="ratio ratio-16x9 h-100 rounded-4 overflow-hidden d-flex align-items-center justify-content-center bg-dark">
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
        </section>

        <!-- 2.2 ETAPA ACTUAL -->
        <section class="container-fluid pb-5">
            <div class="row px-4">
                <div class="col-12">
                    <div class="d-flex flex-column flex-md-row rounded-4 overflow-hidden shadow-sm border banner-zindex">
                        <div class="text-white p-4 flex-fill" style="background-color: var(--verde-medio);">
                            <h4 class="fw-bold mb-1">1. Ahora · Socialización — Estás aquí</h4>
                            <p class="mb-0 opacity-75">Conoce la propuesta, resuelve dudas y comparte tu opinión.</p>
                        </div>
                        <div class="text-white p-4 flex-fill" style="background-color: var(--verde-oscuro);">
                            <h4 class="fw-bold mb-1" style="color: var(--verde-pdf2);">2. Después · Consulta Popular</h4>
                            <p class="mb-0 opacity-75">La ciudadanía decidirá sobre el Plan. Fecha por confirmar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- LÍNEA CONECTORA 1 -->
        <div class="conector-metro d-none d-md-flex">
            <svg viewBox="0 0 1000 120" preserveAspectRatio="none">
                <path class="linea-via" stroke="var(--naranja)" d="M 800 0 L 800 40 Q 800 60 780 60 L 220 60 Q 200 60 200 80 L 200 120" />
                <path class="linea-via" stroke="var(--verde-medio)" d="M 830 0 L 830 55 Q 830 75 810 75 L 250 75 Q 230 75 230 95 L 230 120" />
                <path class="linea-via" stroke="var(--verde-oscuro)" d="M 860 0 L 860 30 Q 860 45 880 45 L 920 45 Q 940 45 940 60 L 940 120" />
                <circle cx="800" cy="15" r="10" class="estacion-nodo" stroke="var(--naranja)"/>
                <circle cx="200" cy="105" r="10" class="estacion-nodo" stroke="var(--naranja)"/>
                <circle cx="940" cy="105" r="10" class="estacion-nodo" stroke="var(--verde-oscuro)"/>
            </svg>
        </div>

        <!-- 2.3 EL PROBLEMA -->
        <section class="container-fluid py-5">
            <div class="bento-card mx-3 border shadow-sm">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <h2 class="display-6 seccion-titulo mb-4" style="color: var(--verde-oscuro);">López Mateos forma parte de tu día</h2>
                        <p class="fs-5 text-muted mb-5">Por el corredor circulan personas que van a casa, al trabajo o a la escuela... Estos problemas están relacionados entre sí y requieren una solución integral.</p>
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="cifra-destacada">+160 mil</div>
                                <p class="text-muted fw-semibold">Vehículos al día</p>
                            </div>
                            <div class="col-md-6">
                                <div class="cifra-destacada">&lt; 10 km/h</div>
                                <p class="text-muted fw-semibold">Velocidad en hora pico</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light rounded-4 h-100 min-vh-50 d-flex align-items-center justify-content-center p-2 border" style="min-height: 400px; border-color: var(--verde-pdf) !important;">
                            <img src="../images/S11.jpg" alt="Tráfico del corredor López Mateos" class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover" style="min-height: 400px;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- LÍNEA CONECTORA 2 -->
        <div class="conector-metro d-none d-md-flex">
            <svg viewBox="0 0 1000 120" preserveAspectRatio="none">
                <path class="linea-via" stroke="var(--verde-claro)" d="M 200 0 L 200 30 Q 200 50 240 50 L 760 50 Q 800 50 800 70 L 800 120" />
                <path class="linea-via" stroke="var(--naranja)" d="M 230 0 L 230 45 Q 230 65 270 65 L 790 65 Q 830 65 830 85 L 830 120" />
                <circle cx="200" cy="15" r="10" class="estacion-nodo" stroke="var(--verde-claro)"/>
                <circle cx="800" cy="105" r="10" class="estacion-nodo" stroke="var(--verde-claro)"/>
            </svg>
        </div>

        <!-- 2.5 LA PROPUESTA -->
        <section class="container-fluid py-5">
            <div class="bento-card mx-3 border shadow-sm" style="background-color: var(--verde-pdf);">
                <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                    <h2 class="display-5 seccion-titulo mb-3" style="color: var(--verde-oscuro);">Siete componentes, no una sola obra</h2>
                    <p class="fs-5 text-muted">El Plan propone intervenciones distintas conectadas como parte de una misma estrategia.</p>
                </div>

                <div class="row g-4 px-4 justify-content-center">
                    <div class="col-md-4 col-lg-3">
                        <div class="bento-card p-4 text-center border">
                            <div class="rounded-circle d-inline-flex p-3 mb-3">
                                <span class="fs-2">🚇</span>
                            </div>
                            <h5 class="fw-bold" style="color: var(--verde-oscuro);">Viaducto subterráneo</h5>
                            <p class="small text-muted mb-3">Tramo urbano · 6.28 km</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="bento-card p-4 text-center border">
                            <div class="rounded-circle d-inline-flex p-3 mb-3">
                                <span class="fs-2">🚌</span>
                            </div>
                            <h5 class="fw-bold" style="color: var(--verde-oscuro);">Transporte público</h5>
                            <p class="small text-muted mb-3">Ambos tramos · 4.3 km</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="bento-card p-4 text-center border">
                            <div class="rounded-circle d-inline-flex p-3 mb-3">
                                <span class="fs-2">🚲</span>
                            </div>
                            <h5 class="fw-bold" style="color: var(--verde-oscuro);">Ciclovía</h5>
                            <p class="small text-muted mb-3">Tramo urbano · 6.01 km</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="bento-card p-4 text-center border">
                            <div class="rounded-circle d-inline-flex p-3 mb-3">
                                <span class="fs-2">🚶</span>
                            </div>
                            <h5 class="fw-bold" style="color: var(--verde-oscuro);">Cruces seguros</h5>
                            <p class="small text-muted mb-3">Tramo urbano · 9 mejorados y 4 nuevos</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="bento-card p-4 text-center border">
                            <div class="rounded-circle d-inline-flex p-3 mb-3">
                                <span class="fs-2">🌳</span>
                            </div>
                            <h5 class="fw-bold" style="color: var(--verde-oscuro);">Espacios públicos</h5>
                            <p class="small text-muted mb-3">Tramo urbano · Parques y arbolado</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="bento-card p-4 text-center border">
                            <div class="rounded-circle d-inline-flex p-3 mb-3">
                                <span class="fs-2">💧</span>
                            </div>
                            <h5 class="fw-bold" style="color: var(--verde-oscuro);">Drenaje</h5>
                            <p class="small text-muted mb-3">Tramo urbano · 4.6 km de colectores</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="bento-card p-4 text-center border">
                            <div class="rounded-circle d-inline-flex p-3 mb-3">
                                <span class="fs-2">🌉</span>
                            </div>
                            <h5 class="fw-bold" style="color: var(--verde-oscuro);">Viaducto elevado</h5>
                            <p class="small text-muted mb-3">Tramo suburbano · 11.84 km</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- LÍNEA CONECTORA 3 -->
        <div class="conector-metro d-none d-md-flex">
            <svg viewBox="0 0 1000 120" preserveAspectRatio="none">
                <path class="linea-via" stroke="var(--verde-oscuro)" d="M 800 0 L 800 40 Q 800 60 760 60 L 240 60 Q 200 60 200 80 L 200 120" />
                <circle cx="800" cy="15" r="10" class="estacion-nodo" stroke="var(--verde-oscuro)"/>
                <circle cx="200" cy="105" r="10" class="estacion-nodo" stroke="var(--verde-oscuro)"/>
            </svg>
        </div>

        <!-- 2.7 QUÉ CAMBIARÍA -->
        <section class="container-fluid py-5">
            <div class="bento-card mx-3 shadow-sm border">
                <div class="mb-5 text-center">
                    <span class="badge px-3 py-2 mb-3 rounded-pill fw-semibold text-uppercase text-dark" style="background-color: var(--verde-pdf2);">
                        Hoy vs con el Plan
                    </span>
                    <h2 class="display-6 seccion-titulo mb-3" style="color: var(--verde-oscuro);">Así podría cambiar López Mateos</h2>
                    <p class="text-muted fs-5 col-lg-8 mx-auto">
                        La propuesta busca transformar una avenida saturada y difícil de cruzar a un espacio mejor conectado, con transporte público más eficiente, cruces seguros, ciclovía, drenaje renovado y más áreas públicas.
                    </p>
                </div>

                <div class="before-after-wrapper position-relative mx-auto rounded-4 overflow-hidden shadow-sm mb-5" style="max-width: 1000px; height: 50vh; min-height: 400px;">
                    <img src="../images/S.1.jpg" alt="López Mateos Hoy" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0">
                    <img src="../images/diapositiva_29.png" alt="López Mateos con el Plan" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0 overlay-img" id="afterImage">
                    
                    <div class="slider-handle" id="sliderHandle">
                        <div class="slider-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="var(--slider-mhp)" class="bi bi-arrows-expand" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8ZM7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2ZM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10Z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <input type="range" min="0" max="100" value="50" class="position-absolute top-0 start-0 w-100 h-100 slider-input" id="compareSlider" aria-label="Comparador interactivo de imágenes">
                    
                    <span class="badge bg-dark position-absolute top-0 start-0 m-3 z-3 px-3 py-2 rounded-pill shadow">HOY</span>
                    <span class="badge text-dark position-absolute top-0 end-0 m-3 z-3 px-3 py-2 rounded-pill shadow" style="background-color: var(--verde-claro);">CON EL PLAN</span>
                </div>

                <!-- Tabla de comparación en tarjeta -->
                <div class="mx-auto rounded-4 p-4 p-md-5 border" style="max-width: 1000px;">
                    <div class="row gx-4 mb-4 pb-2 text-center text-md-start">
                        <div class="col-6 fw-bold text-uppercase text-muted fs-5">
                            <span class="d-none d-md-inline opacity-75">❌ </span>Hoy
                        </div>
                        <div class="col-6 fw-bold text-uppercase fs-5" style="color: var(--verde-oscuro);">
                            <span class="d-none d-md-inline">✅ </span>Con el Plan
                        </div>
                    </div>
                    
                    <div class="d-flex flex-column gap-3">
                        <div class="row gx-4 py-3 align-items-center bg-white rounded-3 shadow-sm border mx-0">
                            <div class="col-6 text-muted pe-3 border-end">Tráfico local y de paso mezclado</div>
                            <div class="col-6 fw-semibold text-dark ps-md-4">Separación de flujos en tramos estratégicos</div>
                        </div>
                        <div class="row gx-4 py-3 align-items-center bg-white rounded-3 shadow-sm border mx-0">
                            <div class="col-6 text-muted pe-3 border-end">Transporte público atrapado en el tráfico</div>
                            <div class="col-6 fw-semibold text-dark ps-md-4">Carriles exclusivos y rutas exprés</div>
                        </div>
                        <div class="row gx-4 py-3 align-items-center bg-white rounded-3 shadow-sm border mx-0">
                            <div class="col-6 text-muted pe-3 border-end">Sin ciclovías protegidas</div>
                            <div class="col-6 fw-semibold text-dark ps-md-4">Ciclovía confinada</div>
                        </div>
                        <div class="row gx-4 py-3 align-items-center bg-white rounded-3 shadow-sm border mx-0">
                            <div class="col-6 text-muted pe-3 border-end">Puentes peatonales poco accesibles</div>
                            <div class="col-6 fw-semibold text-dark ps-md-4">Cruces seguros a nivel de calle</div>
                        </div>
                        <div class="row gx-4 py-3 align-items-center bg-white rounded-3 shadow-sm border mx-0">
                            <div class="col-6 text-muted pe-3 border-end">Drenaje rebasado</div>
                            <div class="col-6 fw-semibold text-dark ps-md-4">Nuevos colectores sanitario y pluvial</div>
                        </div>
                        <div class="row gx-4 py-3 align-items-center bg-white rounded-3 shadow-sm border mx-0">
                            <div class="col-6 text-muted pe-3 border-end">Poco espacio público de calidad</div>
                            <div class="col-6 fw-semibold text-dark ps-md-4">Parques lineales, arbolado y áreas de convivencia</div>
                        </div>
                    </div>

                    <div class="mt-5 ps-4 border-start border-4" style="border-color: var(--naranja) !important;">
                        <p class="fst-italic fs-5 text-dark mb-0">
                            El objetivo no es solo mover más autos: <strong style="color: var(--verde-oscuro);">es mejorar la experiencia de todas las personas que usan el corredor.</strong>     
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- LÍNEA CONECTORA 4 -->
        <div class="conector-metro d-none d-md-flex">
            <svg viewBox="0 0 1000 120" preserveAspectRatio="none">
                <path class="linea-via" stroke="var(--verde-claro)" d="M 200 0 L 200 40 Q 200 60 240 60 L 460 60 Q 500 60 500 80 L 500 120" />
                <circle cx="200" cy="15" r="10" class="estacion-nodo" stroke="var(--verde-claro)"/>
                <circle cx="500" cy="105" r="10" class="estacion-nodo" stroke="var(--verde-claro)"/>
            </svg>
        </div>

        <!-- 2.6 MAPA DEL CORREDOR -->
        <section class="container-fluid mb-5 px-4">
            <div class="bento-card p-0 overflow-hidden text-center d-flex flex-column justify-content-center border shadow-sm" style="height: 500px;">
                <p class="text-dark fw-bold mt-4">Explora el corredor tramo por tramo</p>
                <div class="rounded-bottom-4 overflow-hidden shadow-sm" style="height: 70vh; min-height: 450px; width: 100%; position: relative;">
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

        <!-- 2.9 SOCIALIZACIÓN Y CONSULTA -->
        <section id="socializacion" class="container-fluid mb-5">
            <div class="bento-card mx-3 border" style="background-color: var(--verde-pdf);">
                <div class="row text-center mb-5">
                    <div class="col-12">
                        <h2 class="display-6 seccion-titulo mb-3" style="color: var(--verde-oscuro);">Infórmate antes de decidir</h2>
                        <p class="fs-5 text-dark col-lg-8 mx-auto">La socialización es el periodo previo a la Consulta Popular. Puedes informarte por cuatro vías.</p>
                    </div>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-3 text-center">
                        <h5 class="fw-bold" style="color: var(--verde-medio);">Módulos informativos</h5>
                        <p class="small text-dark">30 módulos a lo largo del corredor.</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <h5 class="fw-bold" style="color: var(--verde-medio);">Página web</h5>
                        <p class="small text-dark">Componentes, mapa y documentos.</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <h5 class="fw-bold" style="color: var(--verde-medio);">Reuniones</h5>
                        <p class="small text-dark">Espacios de diálogo con vecinos.</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <h5 class="fw-bold" style="color: var(--verde-medio);">Visitas</h5>
                        <p class="small text-dark">A viviendas y comercios.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- LÍNEA CONECTORA 5 -->
        <div class="conector-metro d-none d-md-flex">
            <svg viewBox="0 0 1000 120" preserveAspectRatio="none">
                <path class="linea-via" stroke="var(--verde-oscuro)" d="M 200 0 L 200 30 Q 200 60 240 60 L 460 60 Q 500 60 500 90 L 500 120" />
                <circle cx="200" cy="15" r="10" class="estacion-nodo" stroke="var(--verde-oscuro)"/>
                <circle cx="500" cy="105" r="10" class="estacion-nodo" stroke="var(--verde-oscuro)"/>
            </svg>
        </div>

        <!-- 2.10 PARTICIPA -->
        <section id="participa" class="container-fluid mb-5 px-4">
            <div class="bento-card text-center py-5 border shadow-sm" style="background-color: var(--gris-cliente);">
                <h2 class="display-6 seccion-titulo mb-3" style="color: var(--verde-oscuro);">Tu opinión es parte del futuro</h2>
                <p class="fs-5 text-dark mb-5 col-lg-6 mx-auto">Después de conocer el Plan Integral, comparte tu opinión. Este formulario forma parte de la etapa de socialización y no corresponde a la votación.</p>
                
                <div class="bg-white p-2 p-md-4 rounded-4 mx-auto shadow-sm border text-center" style="max-width: 800px;" id="contenedor-kobo">
                    <div id="kobo-prompt" class="py-5">
                        <div class="fs-1 mb-3">📋</div>
                        <h4 class="fw-bold mb-4" style="color: var(--verde-oscuro);">Formulario de Participación</h4>
                        <button class="btn btn-destacado shadow-sm" id="btn-cargar-form">
                            Hacer clic para llenar el formulario
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- LÍNEA CONECTORA 6 -->
        <div class="conector-metro d-none d-md-flex">
            <svg viewBox="0 0 1000 120" preserveAspectRatio="none">
                <path class="linea-via" stroke="var(--naranja)" d="M 480 0 L 480 50 Q 480 70 520 70 L 800 70 Q 840 70 840 90 L 840 120" />
                <path class="linea-via" stroke="var(--verde-claro)" d="M 520 0 L 520 20 Q 520 40 560 40 L 860 40 Q 880 40 880 60 L 880 120" />
                <circle cx="480" cy="10" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
                <circle cx="520" cy="10" r="8" class="estacion-nodo" stroke="var(--verde-claro)"/>
                <circle cx="840" cy="110" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
                <circle cx="880" cy="110" r="8" class="estacion-nodo" stroke="var(--verde-claro)"/>
            </svg>
        </div>

        <!-- 2.11 RESUELVE TUS DUDAS -->
        <section id="dudas" class="container-fluid mb-5 px-4">
            <div class="row justify-content-center">
                <!-- Se agregó pt-5 y mt-4 para dejar espacio a la línea del metro -->
                <div class="col-lg-8 pt-5 mt-4 pb-lg-4">
                    <h2 class="display-6 seccion-titulo text-center mb-5" style="color: var(--verde-oscuro);">Respuestas claras para tomar una decisión informada</h2>
                    
                    <div class="accordion" id="accordionDudas">
                        <div class="accordion-item border-0 mb-3 rounded-4 overflow-hidden shadow-sm border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold fs-5 p-4" type="button" data-bs-toggle="collapse" data-bs-target="#duda1">
                                    ¿El Plan consiste únicamente en un viaducto?
                                </button>
                            </h2>
                            <div id="duda1" class="accordion-collapse collapse" data-bs-parent="#accordionDudas">
                                <div class="accordion-body p-4 pt-0 text-dark bg-white">
                                    No. El Plan combina siete componentes: viaducto subterráneo, transporte público, ciclovía, cruces seguros, espacios públicos, drenaje y viaducto elevado.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-3 rounded-4 overflow-hidden shadow-sm border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold fs-5 p-4" type="button" data-bs-toggle="collapse" data-bs-target="#duda2">
                                    ¿Por qué es necesario este proyecto?
                                </button>
                            </h2>
                            <div id="duda2" class="accordion-collapse collapse" data-bs-parent="#accordionDudas">
                                <div class="accordion-body p-4 pt-0 text-dark bg-white">
                                    Porque los problemas del corredor están relacionados entre sí y requieren una solución integral.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <p class="fw-bold" style="color: var(--verde-oscuro);">¿No encuentras tu pregunta?</p>
                        <a href="#" class="btn btn-principal">Resolver dudas por WhatsApp</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2.12 PIE DE PÁGINA -->
        <footer class="text-white pt-5 pb-4 mt-5" style="background-color: var(--verde-oscuro);">
            <div class="container-fluid px-4">
                <div class="row g-4 justify-content-between">
                    <div class="col-lg-4">
                        <h4 class="fw-bold mb-3" style="color: var(--verde-claro);">Plan Integral de López Mateos</h4>
                        <p class="small opacity-75">Una estrategia para atender los retos de movilidad, transporte público, drenaje, seguridad vial, conectividad y espacio público del corredor.</p>
                    </div>
                    <div class="col-lg-3 text-center text-lg-start">
                        <h5 class="mb-3" style="color: var(--verde-pdf2);">Navegación</h5>
                        <ul class="list-unstyled opacity-75 d-flex flex-column gap-2 small">
                            <li><a href="#" class="text-white text-decoration-none">Inicio</a></li>
                            <li><a href="#" class="text-white text-decoration-none">El proyecto a detalle</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 text-center text-lg-end">
                        <h5 class="mb-3" style="color: var(--verde-pdf2);">Contacto y Legal</h5>
                        <p class="small opacity-75 mb-2">Gobierno del Estado de Jalisco</p>
                        <a href="#" class="text-white opacity-75 text-decoration-underline small">Aviso de Privacidad</a>
                    </div>
                </div>
            </div>
        </footer>

    </div> <!-- FIN ENVOLTURA PRINCIPAL -->

    <!-- ========================================== -->
    <!-- PANEL DE PREFERENCIAS (Evadiendo Filtros) -->
    <!-- ========================================== 
    <div id="lmPrefsPanel" class="lm-panel-flotante">
        <button id="btn-lm-dismiss" class="lm-btn-cerrar">Continuar sin aceptar</button>
        
        <div class="p-4 pt-5 pb-3">
            <h3 class="fw-bolder mb-3" style="color: var(--texto-oscuro);">Gestión de datos</h3>
            <p class="text-muted small mb-3 lh-sm">
                En este sitio, utilizamos herramientas para medir nuestra audiencia y mostrarte contenidos adaptados a tus necesidades. Puedes seleccionar aquí cuáles autorizas.
            </p>
            <p class="text-muted small mb-3 lh-sm">
                Modifica tus preferencias en cualquier momento en la parte inferior de la página.
            </p>
            <a href="#" class="text-decoration-underline small mb-4 d-block text-muted">Consultar nuestra política de privacidad</a>
            
            <div class="text-center small text-muted">
                Consentimientos certificados por <span class="fw-bold fst-italic">axeptio</span>
            </div>
        </div>
        
        <div class="lm-acciones-grid">
            <button id="btn-lm-settings" class="lm-btn-accion lm-btn-config">Parametrizar</button>
            <button id="btn-lm-accept" class="lm-btn-accion lm-btn-aceptar">Aceptar</button>
        </div>
    </div>-->

    <!-- Bootstrap JS con SRI -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Script de Lógica -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            /* --- 1. LÓGICA DEL COMPARADOR DE IMÁGENES --- */
            const slider = document.getElementById('compareSlider');
            const overlay = document.getElementById('afterImage');
            const sliderHandle = document.getElementById('sliderHandle'); 

            if(slider && overlay && sliderHandle) {
                function updateSliderPosition(value) {
                    overlay.style.clipPath = `polygon(0 0, ${value}% 0, ${value}% 100%, 0 100%)`;
                    sliderHandle.style.left = `${value}%`; 
                }
                slider.addEventListener('input', (e) => {
                    updateSliderPosition(e.target.value);
                });
                updateSliderPosition(slider.value);
            }

            /* --- 2. CARGA DINÁMICA DEL FORMULARIO --- */
            const btnCargarForm = document.getElementById('btn-cargar-form');
            const contenedorKobo = document.getElementById('contenedor-kobo');

            if(btnCargarForm && contenedorKobo) {
                btnCargarForm.addEventListener('click', function() {
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

            if (window.location.hash === '') {
                if ('scrollRestoration' in history) {
                    history.scrollRestoration = 'manual';
                }
                window.scrollTo(0, 0);
            }

            /* --- 3. LÓGICA DE PREFERENCIAS (OWASP COMPLIANT & ANTI-ADBLOCK) ---
            const prefsPanel = document.getElementById('lmPrefsPanel');
            const btnAcceptPrefs = document.getElementById('btn-lm-accept');
            const btnDismissPrefs = document.getElementById('btn-lm-dismiss');
            const cookieName = 'lm_estado_preferencias'; // Nombre ofuscado

            function checkCookie(name) {
                return document.cookie.split(';').some(c => {
                    return c.trim().startsWith(name + '=');
                });
            }

            function setSecureCookie(name, value, days) {
                let expires = "";
                if (days) {
                    const date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                const isSecure = location.protocol === 'https:' ? '; Secure' : '';
                document.cookie = `${name}=${value}${expires}; path=/; SameSite=Strict${isSecure}`;
            }

            if(prefsPanel) {
                if (!checkCookie(cookieName)) {
                    // Forzamos el !important vía JS para máxima persistencia
                    prefsPanel.style.setProperty('display', 'block', 'important');
                }

                if(btnAcceptPrefs) {
                    btnAcceptPrefs.addEventListener('click', function() {
                        setSecureCookie(cookieName, 'aceptado', 365);
                        prefsPanel.style.setProperty('display', 'none', 'important');
                    });
                }

                if(btnDismissPrefs) {
                    btnDismissPrefs.addEventListener('click', function() {
                        setSecureCookie(cookieName, 'rechazado', 365);
                        prefsPanel.style.setProperty('display', 'none', 'important');
                    });
                }
            } */

        });
    </script>
</body>
</html>