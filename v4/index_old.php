<?php
// CABECERAS DE SEGURIDAD OWASP CENTRALIZADAS
header("X-Frame-Options: SAMEORIGIN"); 
header("X-XSS-Protection: 1; mode=block"); 
header("X-Content-Type-Options: nosniff"); 
header("Content-Security-Policy: default-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://fonts.googleapis.com https://fonts.gstatic.com; frame-src 'self' https://www.youtube.com https://ee.kobotoolbox.org; img-src 'self' data:;");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Integral López Mateos - SPA</title>
    
    <!-- Bootstrap 5.3.2 con SRI -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            /* Paleta Institucional */
            --naranja: #fd8107;
            --verde-claro: #94ee00;
            --verde-medio: #00943c;
            --verde-oscuro: #004b13;
            --verde-pdf: #dcefc6;
            --gris-cliente: #ede9df;
            --verde-pdf2: #a9e34b;

            --color-primario: var(--verde-medio); 
            --color-oscuro: var(--verde-oscuro);  
            --texto-principal: #333333;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--texto-principal);
            background-color: #f8f9fa;
            overflow-x: hidden; 
        }

        /* =========================================================
           SISTEMA DE MARCAS DE AGUA (OWASP COMPLIANT)
           ========================================================= */
        
        /* ¡MUY IMPORTANTE! Aseguramos que los trazados SVG jamás se rellenen de negro */
        .via-agua { fill: none !important; stroke-linecap: round; stroke-linejoin: round; }
        .nodo-agua { fill: #f8f9fa !important; }

        /* Fondo Exclusivo para INICIO (Diseño exacto de index2.php) */
        .bg-watermark-lateral {
            position: fixed; /* Ancla al monitor eliminando el margen superior */
            top: 0;
            right: 0; 
            width: 40vw; 
            min-width: 300px;
            max-width: 600px;
            height: 100vh; /* Abarca toda la altura de la pantalla */
            z-index: -1; 
            pointer-events: none; 
            opacity: 0.20; 
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
        .bg-watermark-lateral svg { min-width: 100%; min-height: 100%; object-fit: cover; }
        .bg-watermark-lateral .via-agua { stroke-width: 10px; }
        .bg-watermark-lateral .nodo-agua { stroke-width: 6px; }

        /* Fondo Exclusivo para LAS DEMÁS PESTAÑAS (Diseño exacto de index3.php) */
        .bg-watermark-full {
            position: fixed; /* Ancla al monitor eliminando el margen superior */
            top: 0;
            left: 0; 
            width: 100vw; /* 100% de la pantalla */
            height: 100vh; 
            z-index: -1; 
            pointer-events: none; 
            opacity: 0.08; 
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .bg-watermark-full svg { min-width: 100%; min-height: 100%; object-fit: cover; }
        .bg-watermark-full .via-agua { stroke-width: 16px; }
        .bg-watermark-full .nodo-agua { stroke-width: 10px; }

        /* Elevamos el contenedor para evitar sobreposiciones en clics */
        .tab-pane > .container { position: relative; z-index: 1; }

        /* --- MENÚ PRINCIPAL --- */
        .navbar {
            background-color: var(--verde-oscuro);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .navbar-brand .logo-text { color: #ffffff; font-weight: 800; }
        
        .main-nav-link {
            color: rgba(255, 255, 255, 0.7) !important;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 0.5rem 0.75rem !important;
            border-radius: 8px;
            transition: all 0.2s;
            cursor: pointer;
            white-space: nowrap;
        }
        .main-nav-link:hover { 
            color: #ffffff !important; 
            background-color: rgba(255, 255, 255, 0.1);
        }
        .main-nav-link.active {
            background-color: var(--naranja) !important;
            color: #ffffff !important;
        }

        /* --- COMPONENTES UI (Flat Design) --- */
        .spa-card {
            background: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 12px;
            overflow: hidden;
        }

        /* Botones de Filtro Internos (Sub-pestañas) */
        .filter-btn {
            background-color: #ffffff;
            color: var(--texto-principal);
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 0.75rem;
            width: 100%;
            text-align: center;
            transition: all 0.2s;
            cursor: pointer;
        }
        
        .nav-pills .nav-link.filter-btn:hover,
        .nav-pills .nav-link.filter-btn:focus {
            background-color: var(--gris-cliente);
            color: var(--verde-oscuro) !important;
        }

        .nav-pills .nav-link.filter-btn.active {
            background-color: var(--verde-claro) !important;
            border-color: var(--verde-claro) !important;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .nav-pills .nav-link.filter-btn.active,
        .nav-pills .nav-link.filter-btn.active span {
            color: var(--verde-oscuro) !important;
        }

        .nav-pills .nav-link.filter-btn.active:hover,
        .nav-pills .nav-link.filter-btn.active:hover span {
            color: var(--verde-oscuro) !important;
        }

        /* --- ESTRUCTURA PARA CARRUSELES INTERNOS --- */
        .custom-carousel-wrapper {
            position: relative;
            padding: 0;
            margin-bottom: 3rem;
        }
        
        .custom-carousel-wrapper .carousel-control-prev,
        .custom-carousel-wrapper .carousel-control-next {
            width: 5%;
            opacity: 1;
            background: none;
        }
        
        .custom-carousel-wrapper .carousel-control-prev { left: 0; }
        .custom-carousel-wrapper .carousel-control-next { right: 0; }
        
        .custom-carousel-wrapper .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23595959'%3E%3Cpath d='M12 2L4 8l8 6V2z'/%3E%3C/svg%3E");
            width: 2rem; height: 2rem;
        }
        .custom-carousel-wrapper .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23595959'%3E%3Cpath d='M4 2l8 6-8 6V2z'/%3E%3C/svg%3E");
            width: 2rem; height: 2rem;
        }
        
        .carousel-indicators { bottom: -40px; margin-bottom: 0; }
        .carousel-indicators [data-bs-target] {
            background-color: #adb5bd;
            width: 10px; height: 10px; border-radius: 50%;
            border: none; margin: 0 6px; opacity: 0.8;
        }
        .carousel-indicators .active { 
            background-color: #1a1a1a; 
            opacity: 1; 
        }

        .custom-carousel-wrapper .carousel-item .d-flex {
            padding-left: 12% !important;
            padding-right: 12% !important;
        }

        /* --- ESTILOS DEL AVISO FLOTANTE PERSISTENTE --- */
        .sys-notice-layer {
            position: fixed;
            bottom: 20px;
            right: 20px;
            max-width: 380px;
            width: calc(100% - 40px);
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            z-index: 1060;
            border: 1px solid var(--gris-cliente);
            overflow: hidden;
            font-family: 'Inter', sans-serif;
        }

        .sys-notice-header {
            background-color: var(--color-primario);
            padding: 12px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .sys-notice-header h6 { color: #ffffff; margin: 0; font-weight: 800; font-size: 0.95rem; }
        .sys-notice-body { padding: 20px; }
        .sys-notice-body p { color: var(--texto-principal); font-size: 0.85rem; line-height: 1.4; margin-bottom: 20px; }
        .sys-btn-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
        .btn-sys { padding: 10px; border-radius: 6px; font-size: 0.85rem; font-weight: 700; text-align: center; border: none; cursor: pointer; transition: opacity 0.2s; }
        .btn-sys:hover { opacity: 0.9; }
        .btn-sys-primary { background-color: var(--naranja); color: #ffffff; }
        .btn-sys-secondary { background-color: var(--gris-cliente); color: var(--texto-principal); }
    </style>
</head>
<body>

    <!-- MENÚ PRINCIPAL (SPA Router) -->
    <nav class="navbar navbar-expand-xl sticky-top navbar-dark">
        <div class="container py-2">
            <a class="navbar-brand d-flex flex-column lh-1" href="#">
                <span class="logo-text fs-4">LÓPEZ MATEOS,</span>
                <span class="fs-6 fw-bold" style="color: var(--verde-claro);">TE TOCA A TI</span>
            </a>
            
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#spaNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="spaNavbar">
                <ul class="navbar-nav gap-1 nav-pills" role="tablist">
                    <li class="nav-item"><a class="nav-link main-nav-link active" data-bs-toggle="tab" data-bs-target="#home">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link main-nav-link" data-bs-toggle="tab" data-bs-target="#porque">¿Por qué?</a></li>
                    <li class="nav-item"><a class="nav-link main-nav-link" data-bs-toggle="tab" data-bs-target="#propuesta">La propuesta</a></li>
                    <li class="nav-item"><a class="nav-link main-nav-link" data-bs-toggle="tab" data-bs-target="#beneficios">Beneficios</a></li>
                    <li class="nav-item"><a class="nav-link main-nav-link" data-bs-toggle="tab" data-bs-target="#impacto">Impacto temporal</a></li>
                    <li class="nav-item"><a class="nav-link main-nav-link" data-bs-toggle="tab" data-bs-target="#consulta">La Consulta</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENEDOR MAESTRO DE VISTAS -->
    <main class="tab-content" id="spaContent">
        <!-- ==========================================
             1. HOME / APERTURA
             ========================================== -->
        <div class="tab-pane fade show active" id="home" role="tabpanel">
            
            <!-- FONDO EXCLUSIVO DE INICIO: CORREDOR LATERAL (Igual a index2.php) -->
            <div class="bg-watermark-lateral">
                <svg viewBox="0 0 400 1080" preserveAspectRatio="xMaxYMid slice" xmlns="http://www.w3.org/2000/svg">
                    <path class="via-agua" stroke="var(--verde-oscuro)" d="M 300 -50 L 300 300 Q 300 350 250 400 L 150 500 Q 100 550 100 600 L 100 1150" />
                    <circle cx="300" cy="150" r="14" class="nodo-agua" stroke="var(--verde-oscuro)"/>
                    <circle cx="250" cy="400" r="14" class="nodo-agua" stroke="var(--verde-oscuro)"/>
                    <circle cx="100" cy="800" r="14" class="nodo-agua" stroke="var(--verde-oscuro)"/>

                    <path class="via-agua" stroke="var(--naranja)" d="M 150 -50 L 150 150 Q 150 200 200 250 L 350 400 Q 400 450 400 500 L 400 750 Q 400 800 350 850 L 200 1000" />
                    <circle cx="150" cy="150" r="14" class="nodo-agua" stroke="var(--naranja)"/>
                    <circle cx="350" cy="400" r="14" class="nodo-agua" stroke="var(--naranja)"/>
                    <circle cx="400" cy="750" r="14" class="nodo-agua" stroke="var(--naranja)"/>

                    <path class="via-agua" stroke="var(--verde-claro)" d="M 50 250 L 150 350 Q 200 400 200 450 L 200 700 Q 200 750 150 800 L 50 900" />
                    <circle cx="150" cy="350" r="14" class="nodo-agua" stroke="var(--verde-claro)"/>
                    <circle cx="200" cy="600" r="14" class="nodo-agua" stroke="var(--verde-claro)"/>

                    <path class="via-agua" stroke="var(--verde-medio)" d="M 450 50 L 350 150 Q 300 200 300 250 L 300 550 Q 300 600 250 650 L 0 900" />
                    <circle cx="350" cy="150" r="14" class="nodo-agua" stroke="var(--verde-medio)"/>
                    <circle cx="300" cy="550" r="14" class="nodo-agua" stroke="var(--verde-medio)"/>
                </svg>
            </div>

            <div class="container py-lg-4">
                <div class="mb-5 text-start mx-auto" style="max-width: 1000px;">
                    <p class="fw-bold mb-2 text-dark">López Mateos te toca a ti.</p>
                    <h1 class="display-5 fw-normal mb-3 lh-sm" style="color: var(--verde-oscuro);">
                        Conoce la propuesta del Plan <br class="d-none d-md-block">
                        Integral para López Mateos
                    </h1>
                    <p class="fw-bold text-dark mb-5" style="font-size: 1.1rem; max-width: 800px;">
                        Una estrategia integral para atender los retos de movilidad, transporte público, drenaje, seguridad vial, conectividad y espacio público.
                    </p>
                </div>
                <!-- Grilla de Videos -->
                <div class="row g-4 justify-content-center mx-auto" style="max-width: 1000px;">
                    <div class="col-md-4">
                        <div class="ratio shadow-sm" style="--bs-aspect-ratio: 133%; border-radius: 20px; overflow: hidden; background-color: #000;">
                            <iframe src="https://www.youtube.com/embed/199djkIEflw" title="Video explicativo Plan López Mateos" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" sandbox="allow-scripts allow-same-origin allow-presentation" class="border-0 w-100 h-100" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ratio shadow-sm" style="--bs-aspect-ratio: 133%; border-radius: 20px; overflow: hidden; background-color: #000;">
                            <iframe src="https://www.youtube.com/embed/HPeVaYRBMhE" title="Video explicativo Plan López Mateos" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" sandbox="allow-scripts allow-same-origin allow-presentation" class="border-0 w-100 h-100" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ratio shadow-sm" style="--bs-aspect-ratio: 133%; border-radius: 20px; overflow: hidden; background-color: #000;">
                            <iframe src="https://www.youtube.com/embed/stD_-DHkZTY" title="Video explicativo Plan López Mateos" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" sandbox="allow-scripts allow-same-origin allow-presentation" class="border-0 w-100 h-100" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==========================================
             2. ¿POR QUÉ?
             ========================================== -->
        <div class="tab-pane fade" id="porque" role="tabpanel">
            
            <!-- FONDO EXCLUSIVO DE ¿POR QUÉ?: RED METROPOLITANA (Igual a index3.php) -->
            <div class="bg-watermark-full">
                <svg viewBox="0 0 1920 1080" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                    <path class="via-agua" stroke="var(--naranja)" d="M -100 200 L 400 300 Q 500 320 600 450 L 900 850 Q 1000 980 1200 1000 L 2100 1050" />
                    <circle cx="400" cy="300" r="12" class="nodo-agua" stroke="var(--naranja)"/>
                    <circle cx="900" cy="850" r="12" class="nodo-agua" stroke="var(--naranja)"/>
                    <circle cx="1200" cy="1000" r="12" class="nodo-agua" stroke="var(--naranja)"/>

                    <path class="via-agua" stroke="var(--verde-oscuro)" d="M 200 -100 L 200 400 Q 200 500 350 600 L 700 800 Q 800 850 800 1000 L 800 1200" />
                    <circle cx="200" cy="400" r="12" class="nodo-agua" stroke="var(--verde-oscuro)"/>
                    <circle cx="700" cy="800" r="12" class="nodo-agua" stroke="var(--verde-oscuro)"/>

                    <path class="via-agua" stroke="var(--verde-medio)" d="M -100 800 L 300 800 Q 400 800 500 700 L 1100 100 Q 1200 0 1400 0 L 2100 0" />
                    <circle cx="300" cy="800" r="12" class="nodo-agua" stroke="var(--verde-medio)"/>
                    <circle cx="1100" cy="100" r="12" class="nodo-agua" stroke="var(--verde-medio)"/>

                    <path class="via-agua" stroke="var(--verde-claro)" d="M 1600 -100 L 1600 300 Q 1600 400 1500 500 L 1100 900 Q 1000 1000 1000 1200" />
                    <circle cx="1600" cy="300" r="12" class="nodo-agua" stroke="var(--verde-claro)"/>
                    <circle cx="1100" cy="900" r="12" class="nodo-agua" stroke="var(--verde-claro)"/>
                </svg>
            </div>

            <div class="container py-lg-4 text-center mx-auto" style="max-width: 1000px;">
                
                <h3 class="fw-bold text-dark mb-2">¿Por qué?</h3>
                <p class="text-muted fw-bold mb-3">Antes de decidir, conoce qué está pasando.</p>
                <h2 class="fw-normal mb-5">López Mateos mueve a miles de personas todos los días, pero hoy enfrenta retos que afectan la forma en que nos movemos por la ciudad.</h2>

                <!-- Sub-pestañas (Filtros) -->
                <ul class="nav nav-pills row g-3 justify-content-center mb-5" role="tablist">
                    <li class="nav-item col-6 col-md-3" role="presentation">
                        <button class="nav-link filter-btn active" data-bs-toggle="pill" data-bs-target="#pq-trafico" type="button" role="tab">
                            <span class="fw-bold d-block text-dark lh-1 mb-1">Tráfico</span>
                            <span class="d-block fw-bold" style="font-size: 0.7rem; color: var(--naranja); text-transform: uppercase;">3 Problemáticas</span>
                        </button>
                    </li>
                    <li class="nav-item col-6 col-md-3" role="presentation">
                        <button class="nav-link filter-btn" data-bs-toggle="pill" data-bs-target="#pq-cruces" type="button" role="tab">
                            <span class="fw-bold d-block text-dark lh-1 mb-1">Cruces Inseguros</span>
                            <span class="d-block fw-bold" style="font-size: 0.7rem; color: var(--naranja); text-transform: uppercase;">2 Problemáticas</span>
                        </button>
                    </li>
                    <li class="nav-item col-6 col-md-3" role="presentation">
                        <button class="nav-link filter-btn" data-bs-toggle="pill" data-bs-target="#pq-transporte" type="button" role="tab">
                            <span class="fw-bold d-block text-dark lh-1 mb-1">Transporte lento</span>
                            <span class="d-block fw-bold text-muted" style="font-size: 0.7rem; text-transform: uppercase;">1 Problemática</span>
                        </button>
                    </li>
                    <li class="nav-item col-6 col-md-3" role="presentation">
                        <button class="nav-link filter-btn" data-bs-toggle="pill" data-bs-target="#pq-inundaciones" type="button" role="tab">
                            <span class="fw-bold d-block text-dark lh-1 mb-1" style="font-size: 0.85rem;">Inundaciones recurrentes</span>
                            <span class="d-block fw-bold text-muted" style="font-size: 0.7rem; text-transform: uppercase;">1 Problemática</span>
                        </button>
                    </li>
                </ul>

                <!-- Contenido Dinámico de los Filtros -->
                <div class="tab-content mb-5 pb-4">
                    
                    <!-- 2.1 TRÁFICO -->
                    <div class="tab-pane fade show active" id="pq-trafico" role="tabpanel">
                        <div class="custom-carousel-wrapper mx-auto" style="max-width: 800px;">
                            <div id="carousel-trafico" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-inner spa-card">
                                    <div class="carousel-item active">
                                        <div class="d-flex align-items-center justify-content-center py-4" style="min-height: 280px;">
                                            <div class="text-center" style="max-width: 550px; width: 100%;">
                                                <h4 class="fw-bold text-dark mb-3">Movilidad saturada</h4>
                                                <p class="mb-0 text-muted fs-5">Una sola avenida concentra viajes locales y recorridos de paso, saturando el corredor por el que circulan más de 160 mil autos al día y, en hora pico, la velocidad puede ser menor a 10 km/h.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-flex align-items-center justify-content-center py-4" style="min-height: 280px;">
                                            <div class="text-center" style="max-width: 550px; width: 100%;">
                                                <h4 class="fw-bold text-dark mb-3">Costos de traslado</h4>
                                                <p class="mb-0 text-muted fs-5">El tráfico cobra un costo en tiempo, dinero y calidad de vida para quienes recorren diariamente el corredor, con traslados que pueden representar entre 2 y 3 horas al día para muchos usuarios.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-flex align-items-center justify-content-center py-4" style="min-height: 280px;">
                                            <div class="text-center" style="max-width: 550px; width: 100%;">
                                                <h4 class="fw-bold text-dark mb-3">Conectividad metropolitana limitada</h4>
                                                <p class="mb-0 text-muted fs-5">Al ser la única vía norte-sur en el tramo suburbano, cuando López Mateos se satura también se afecta el acceso al sur de la metrópoli.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-trafico" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel-trafico" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carousel-trafico" data-bs-slide-to="0" class="active"></button>
                                    <button type="button" data-bs-target="#carousel-trafico" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#carousel-trafico" data-bs-slide-to="2"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2.2 CRUCES INSEGUROS -->
                    <div class="tab-pane fade" id="pq-cruces" role="tabpanel">
                        <div class="custom-carousel-wrapper mx-auto" style="max-width: 800px;">
                            <div id="carousel-cruces" class="carousel carousel-dark slide" data-bs-ride="false">
                                <div class="carousel-inner spa-card">
                                    <div class="carousel-item active">
                                        <div class="d-flex align-items-center justify-content-center py-4" style="min-height: 280px;">
                                            <div class="text-center" style="max-width: 550px; width: 100%;">
                                                <h4 class="fw-bold text-dark mb-3">Barrera urbana</h4>
                                                <p class="mb-0 text-muted fs-5">El corredor funciona como una barrera que divide colonias y dificulta la movilidad de peatones y ciclistas; actualmente, 12 calles perpendiculares terminan al llegar a la avenida. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-flex align-items-center justify-content-center py-4" style="min-height: 280px;">
                                            <div class="text-center" style="max-width: 550px; width: 100%;">
                                                <h4 class="fw-bold text-dark mb-3">Seguridad vial</h4>
                                                <p class="mb-0 text-muted fs-5">Las condiciones actuales aumentan el riesgo para peatones, ciclistas, automovilistas y transporte de carga. Entre 2019 y 2024, el corredor registró una tasa de letalidad de 14.8%, solo por debajo de Carretera a Chapala.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-cruces" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel-cruces" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carousel-cruces" data-bs-slide-to="0" class="active"></button>
                                    <button type="button" data-bs-target="#carousel-cruces" data-bs-slide-to="1"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2.3 TRANSPORTE LENTO -->
                    <div class="tab-pane fade" id="pq-transporte" role="tabpanel">
                        <div class="spa-card p-4 p-md-5 mx-auto text-center" style="max-width: 800px;">
                            <h4 class="fw-bold text-dark mb-3">Transporte público atrapado</h4>
                            <p class="mb-0 text-muted fs-5">Los autobuses comparten espacio con el tráfico general, lo que reduce la velocidad y regularidad del servicio.</p>
                        </div>
                    </div>

                    <!-- 2.4 INUNDACIONES -->
                    <div class="tab-pane fade" id="pq-inundaciones" role="tabpanel">
                        <div class="spa-card p-4 p-md-5 mx-auto text-center" style="max-width: 800px;">
                            <h4 class="fw-bold text-dark mb-3">Inundaciones recurrentes</h4>
                            <p class="mb-0 text-muted fs-5">La infraestructura existente, incluido un colector con más de 50 años de antigüedad, no responde a la demanda ni a los episodios de lluvia. Las inundaciones afectan traslados, comercios, viviendas y el funcionamiento de López Mateos.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- ==========================================
             3. LA PROPUESTA (Aplica el mismo fondo)
             ========================================== -->
        <div class="tab-pane fade" id="propuesta" role="tabpanel">
            
            <!-- FONDO REPLICADO DE ¿POR QUÉ?: RED METROPOLITANA -->
            <div class="bg-watermark-full">
                <svg viewBox="0 0 1920 1080" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                    <path class="via-agua" stroke="var(--naranja)" d="M -100 200 L 400 300 Q 500 320 600 450 L 900 850 Q 1000 980 1200 1000 L 2100 1050" />
                    <circle cx="400" cy="300" r="12" class="nodo-agua" stroke="var(--naranja)"/>
                    <circle cx="900" cy="850" r="12" class="nodo-agua" stroke="var(--naranja)"/>
                    <circle cx="1200" cy="1000" r="12" class="nodo-agua" stroke="var(--naranja)"/>

                    <path class="via-agua" stroke="var(--verde-oscuro)" d="M 200 -100 L 200 400 Q 200 500 350 600 L 700 800 Q 800 850 800 1000 L 800 1200" />
                    <circle cx="200" cy="400" r="12" class="nodo-agua" stroke="var(--verde-oscuro)"/>
                    <circle cx="700" cy="800" r="12" class="nodo-agua" stroke="var(--verde-oscuro)"/>

                    <path class="via-agua" stroke="var(--verde-medio)" d="M -100 800 L 300 800 Q 400 800 500 700 L 1100 100 Q 1200 0 1400 0 L 2100 0" />
                    <circle cx="300" cy="800" r="12" class="nodo-agua" stroke="var(--verde-medio)"/>
                    <circle cx="1100" cy="100" r="12" class="nodo-agua" stroke="var(--verde-medio)"/>

                    <path class="via-agua" stroke="var(--verde-claro)" d="M 1600 -100 L 1600 300 Q 1600 400 1500 500 L 1100 900 Q 1000 1000 1000 1200" />
                    <circle cx="1600" cy="300" r="12" class="nodo-agua" stroke="var(--verde-claro)"/>
                    <circle cx="1100" cy="900" r="12" class="nodo-agua" stroke="var(--verde-claro)"/>
                </svg>
            </div>

            <div class="container py-lg-4 text-center mx-auto" style="max-width: 1000px;">
                <h2 class="fw-bold text-dark mb-2">La propuesta</h2>
                <p class="text-muted fw-bold mb-3">No es solo una obra: es una estrategia integral.</p>
                <h3 class="fw-normal mb-5">La propuesta combina distintas intervenciones para atender varios problemas de López Mateos al mismo tiempo.</h3>

                <!-- Filtros (Pills) -->
                <ul class="nav nav-pills d-flex flex-wrap justify-content-center gap-2 mb-5" role="tablist">
                    <li class="nav-item"><button class="nav-link filter-btn active px-3 py-2" data-bs-toggle="pill" data-bs-target="#prop-1">Viaducto subterráneo</button></li>
                    <li class="nav-item"><button class="nav-link filter-btn px-3 py-2" data-bs-toggle="pill" data-bs-target="#prop-2">Viaducto elevado</button></li>
                    <li class="nav-item"><button class="nav-link filter-btn px-3 py-2" data-bs-toggle="pill" data-bs-target="#prop-3">Transporte público</button></li>
                    <li class="nav-item"><button class="nav-link filter-btn px-3 py-2" data-bs-toggle="pill" data-bs-target="#prop-4">Ciclovía</button></li>

                    <li class="nav-item"><button class="nav-link filter-btn px-3 py-2" data-bs-toggle="pill" data-bs-target="#prop-5">Drenaje</button></li>
                    <li class="nav-item"><button class="nav-link filter-btn px-3 py-2" data-bs-toggle="pill" data-bs-target="#prop-6">Cruces seguros</button></li>
                    <li class="nav-item"><button class="nav-link filter-btn px-3 py-2" data-bs-toggle="pill" data-bs-target="#prop-7">Espacios públicos y parques lineales</button></li>
                    
                    <li class="nav-item"><button class="nav-link filter-btn px-3 py-2" data-bs-toggle="pill" data-bs-target="#prop-8">Modelo de operación y tramos de cuota</button></li>
                </ul>

                <!-- Contenido Dinámico de Propuestas -->
                <div class="tab-content text-start">
                    
                    <!-- Prop 1 -->
                    <div class="tab-pane fade show active" id="prop-1" role="tabpanel">
                        <div class="spa-card p-4 p-md-5">
                            <h4 class="fw-bold mb-3" style="color: var(--color-primario);">Viaducto subterráneo — 6.28 km totales.</h4>
                            <p class="text-muted mb-4">Busca mover parte del tráfico por debajo del nivel de calle en el tramo urbano para liberar superficie y permitir mejoras en transporte público, ciclovía, cruces y espacio público.</p>
                            <div class="row g-4 border-top pt-3">
                                <div class="col-md-6">
                                    <strong class="text-dark d-block">Tramo:</strong>
                                    <span class="small text-muted">4.53 km entre Periférico y Av. Tizoc; 1.75 km en Mariano Otero, desde la Glorieta hasta Av. de las Rosas.</span>
                                </div>
                                <div class="col-md-6">
                                    <strong class="text-dark d-block">Problema que atiende:</strong>
                                    <span class="small text-muted">Mezcla de tráfico local y de paso en el tramo urbano.</span>
                                </div>
                                <div class="col-12">
                                    <strong class="text-dark d-block mb-1">Elementos asociados:</strong>
                                    <ul class="small text-muted mb-0 ps-3">
                                        <li>Viaducto subterráneo en tres tramos de la sección urbana del Corredor.</li>
                                        <li>Rampas de entrada y salida en puntos estratégicos.</li>
                                        <li>Conexión con Mariano Otero mediante una incorporación subterránea.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Prop 2 -->
                    <div class="tab-pane fade" id="prop-2" role="tabpanel">
                        <div class="spa-card p-4 p-md-5">
                            <h4 class="fw-bold mb-3" style="color: var(--color-primario);">Viaducto elevado — 11.84 km</h4>
                            <p class="text-muted mb-4">Separar viajes largos, vehículos de paso y transporte de carga del tránsito local, para que quienes recorren distancias más largas puedan circular sin detenerse en cada cruce, mientras que a nivel de calle se mantiene el acceso local.</p>
                            <div class="row g-4 border-top pt-3">
                                <div class="col-md-6">
                                    <strong class="text-dark d-block">Tramo:</strong>
                                    <span class="small text-muted">Entre Camino Real a Colima y Periférico.</span>
                                </div>
                                <div class="col-md-6">
                                    <strong class="text-dark d-block">Problema que atiende:</strong>
                                    <span class="small text-muted">Saturación por falta de alternativas norte-sur en el tramo suburbano.</span>
                                </div>
                                <div class="col-12">
                                    <strong class="text-dark d-block mb-1">Elementos asociados:</strong>
                                    <ul class="small text-muted mb-0 ps-3">
                                        <li>Viaducto elevado que separa tránsito de paso y flujo suburbano.</li>
                                        <li>Ruta exprés para transporte público.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Prop 3 -->
                    <div class="tab-pane fade" id="prop-3" role="tabpanel">
                        <div class="spa-card p-4 p-md-5">
                            <h4 class="fw-bold mb-3" style="color: var(--color-primario);">Transporte público — 6 km de carril exclusivo y 7 estaciones.</h4>
                            <p class="text-muted mb-4">Contempla carril exclusivo para transporte público, 7 estaciones centrales para la Ruta López Mateos y ruta exprés sobre el tramo elevado para mejorar tiempos, regularidad y conexión con otros sistemas como Macro Periférico, Tren Ligero y rutas troncales.</p>
                            <div class="row g-4 border-top pt-3">
                                <div class="col-md-6">
                                    <strong class="text-dark d-block">Tramo:</strong>
                                    <span class="small text-muted">4.3 km sobre López Mateos y 1.7 km sobre Mariano Otero</span>
                                </div>
                                <div class="col-md-6">
                                    <strong class="text-dark d-block">Problema que atiende:</strong>
                                    <span class="small text-muted">Autobuses comparten el espacio con los vehículos particulares y queda atrapado en el tráfico.</span>
                                </div>
                                <div class="col-12">
                                    <strong class="text-dark d-block mb-1">Elementos asociados:</strong>
                                    <ul class="small text-muted mb-0 ps-3">
                                        <li>Carril exclusivo confinado.</li>
                                        <li>Estaciones en puntos de conexión.</li>
                                        <li>Conexión con Macro Periférico, Línea 1, futura Línea 5 y rutas troncales.</li>
                                        <li>Ruta exprés en tramo suburbano.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Prop 4 -->
                    <div class="tab-pane fade" id="prop-4" role="tabpanel">
                        <div class="spa-card p-4 p-md-5">
                            <h4 class="fw-bold mb-3" style="color: var(--color-primario);">Ciclovía — 6.01 km de ciclovía.</h4>
                            <p class="text-muted mb-4">Incorpora infraestructura ciclista en López Mateos y Mariano Otero, conectadas con la red ciclista existente de la ciudad, para que la bicicleta pueda convertirse en una alternativa real para trayectos cotidianos.</p>
                            <div class="row g-4 border-top pt-3">
                                <div class="col-md-6">
                                    <strong class="text-dark d-block">Tramo:</strong>
                                    <span class="small text-muted">4.26 km en López Mateos; 1.75 km en Mariano Otero.</span>
                                </div>
                                <div class="col-md-6">
                                    <strong class="text-dark d-block">Problema que atiende:</strong>
                                    <span class="small text-muted">Falta de infraestructura ciclista en López Mateos y en Mariano Otero.</span>
                                </div>
                                <div class="col-12">
                                    <strong class="text-dark d-block mb-1">Elementos asociados:</strong>
                                    <ul class="small text-muted mb-0 ps-3">
                                        <li>Conexión con ciclovías existentes.</li>
                                        <li>Carril confinado y separado del tráfico vehicular.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Prop 5 -->
                    <div class="tab-pane fade" id="prop-5" role="tabpanel">
                        <div class="spa-card p-4 p-md-5">
                            <h4 class="fw-bold mb-3" style="color: var(--color-primario);">Drenaje — 4.6 km de nuevos colectores.</h4>
                            <p class="text-muted mb-4">Propone nuevos colectores para separar el agua residual del agua de lluvia para reducir inundaciones, mejorar la capacidad del sistema y disminuir afectaciones durante temporada de lluvias.</p>
                            <div class="row g-4 border-top pt-3">
                                <div class="col-md-12">
                                    <strong class="text-dark d-block">Problema que atiende:</strong>
                                    <span class="small text-muted">Inundaciones recurrentes por el drenaje actual rebasado, tiene más de 50 años y no fue planeado para la demanda actual de la zona metropolitana: viviendas y comercios cercanas a la Av. López Mateos.</span>
                                </div>
                                <div class="col-12">
                                    <strong class="text-dark d-block mb-1">Elementos asociados:</strong>
                                    <ul class="small text-muted mb-0 ps-3">
                                        <li>Colector sanitario.</li>
                                        <li>Colector pluvial.</li>
                                        <li>+20% de capacidad respecto al colector sanitario actual.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Prop 6 -->
                    <div class="tab-pane fade" id="prop-6" role="tabpanel">
                        <div class="spa-card p-4 p-md-5">
                            <h4 class="fw-bold mb-3" style="color: var(--color-primario);">Cruces seguros — 9 cruces peatonales a nivel de calle y 4 nuevos cruces vehiculares, peatonales y ciclistas.</h4>
                            <p class="text-muted mb-4">Sustituye cruces inseguros y puentes poco accesibles por cruces a nivel de calle, buscan reducir barreras urbanas y mejorar la conectividad entre colonias.</p>
                            <div class="row g-4 border-top pt-3">
                                <div class="col-md-12">
                                    <strong class="text-dark d-block">Problema que atiende:</strong>
                                    <span class="small text-muted">Cruzar el corredor actualmente es difícil, inseguro y poco accesible para peatones y ciclistas.</span>
                                </div>
                                <div class="col-12">
                                    <strong class="text-dark d-block mb-1">Elementos asociados:</strong>
                                    <ul class="small text-muted mb-0 ps-3">
                                        <li>Cruces vehiculares en Las Fuentes, Galileo, Orión y Conchita.</li>
                                        <li>Eliminación de 7 puentes peatonales.</li>
                                        <li>9 cruces peatonales en puntos estratégicos (Av. Lázaro Cárdenas, De las Rosas, 12 de diciembre, Av. Cubilete, Plaza del Sol, Av. Moctezuma, Av. Mariano Otero, Av. Patria, Av. Copérnico).</li>
                                        <li>Accesibilidad universal.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Prop 7 -->
                    <div class="tab-pane fade" id="prop-7" role="tabpanel">
                        <div class="spa-card p-4 p-md-5">
                            <h4 class="fw-bold mb-3" style="color: var(--color-primario);">Nuevas áreas verdes y espacios públicos — 780 m en López Mateos y 1.6 km en Mariano Otero.</h4>
                            <p class="text-muted mb-4">Recupera espacio a nivel de calle para áreas verdes, arbolado, zonas de descanso y convivencia.</p>
                            <div class="row g-4 border-top pt-3">
                                <div class="col-md-6">
                                    <strong class="text-dark d-block">Tramo:</strong>
                                    <span class="small text-muted">López Mateos y Mariano Otero.</span>
                                </div>
                                <div class="col-md-6">
                                    <strong class="text-dark d-block">Problema que atiende:</strong>
                                    <span class="small text-muted">Falta de espacios públicos articulados y de calidad a lo largo del Corredor.</span>
                                </div>
                                <div class="col-12">
                                    <strong class="text-dark d-block mb-1">Elementos asociados:</strong>
                                    <ul class="small text-muted mb-0 ps-3">
                                        <li>Parque lineal en Jardines del Sol.</li>
                                        <li>Parque lineal en Mariano Otero.</li>
                                        <li>Mobiliario urbano, iluminación, arbolado y conexión con senderos existentes.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Prop 8 -->
                    <div class="tab-pane fade" id="prop-8" role="tabpanel">
                        <div class="spa-card p-4 p-md-5">
                            <h4 class="fw-bold mb-3" style="color: var(--color-primario);">Modelo de operación y tramos de cuota</h4>
                            <p class="text-muted mb-4">El tramo urbano será libre y el tramo suburbano contempla un esquema de peaje aún en definición.</p>
                            <div class="row g-4 border-top pt-3">
                                <div class="col-md-6">
                                    <strong class="text-dark d-block">Tramo:</strong>
                                    <span class="small text-muted">Periférico Sur – Circuito Metropolitano Sur</span>
                                </div>
                                <div class="col-md-6">
                                    <strong class="text-dark d-block mb-1">Elementos asociados:</strong>
                                    <ul class="small text-muted mb-0 ps-3">
                                        <li>Tramo urbano libre: 4.53 km.</li>
                                        <li>Tramo suburbano con peaje: 15.74 km.</li>
                                        <li>Monto y structure de tarifas por definir.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ==========================================
             5. BENEFICIOS (Aplica el mismo fondo)
             ========================================== -->
        <div class="tab-pane fade" id="beneficios" role="tabpanel">
            
            <!-- FONDO REPLICADO DE ¿POR QUÉ?: RED METROPOLITANA -->
            <div class="bg-watermark-full">
                <svg viewBox="0 0 1920 1080" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                    <path class="via-agua" stroke="var(--naranja)" d="M -100 200 L 400 300 Q 500 320 600 450 L 900 850 Q 1000 980 1200 1000 L 2100 1050" />
                    <circle cx="400" cy="300" r="12" class="nodo-agua" stroke="var(--naranja)"/>
                    <circle cx="900" cy="850" r="12" class="nodo-agua" stroke="var(--naranja)"/>
                    <circle cx="1200" cy="1000" r="12" class="nodo-agua" stroke="var(--naranja)"/>

                    <path class="via-agua" stroke="var(--verde-oscuro)" d="M 200 -100 L 200 400 Q 200 500 350 600 L 700 800 Q 800 850 800 1000 L 800 1200" />
                    <circle cx="200" cy="400" r="12" class="nodo-agua" stroke="var(--verde-oscuro)"/>
                    <circle cx="700" cy="800" r="12" class="nodo-agua" stroke="var(--verde-oscuro)"/>

                    <path class="via-agua" stroke="var(--verde-medio)" d="M -100 800 L 300 800 Q 400 800 500 700 L 1100 100 Q 1200 0 1400 0 L 2100 0" />
                    <circle cx="300" cy="800" r="12" class="nodo-agua" stroke="var(--verde-medio)"/>
                    <circle cx="1100" cy="100" r="12" class="nodo-agua" stroke="var(--verde-medio)"/>

                    <path class="via-agua" stroke="var(--verde-claro)" d="M 1600 -100 L 1600 300 Q 1600 400 1500 500 L 1100 900 Q 1000 1000 1000 1200" />
                    <circle cx="1600" cy="300" r="12" class="nodo-agua" stroke="var(--verde-claro)"/>
                    <circle cx="1100" cy="900" r="12" class="nodo-agua" stroke="var(--verde-claro)"/>
                </svg>
            </div>

            <div class="container py-lg-4 text-center mx-auto" style="max-width: 1000px;">
                <h2 class="fw-bold text-dark mb-2">Beneficios</h2>
                <p class="text-muted fw-bold mb-3">¿Qué podría mejorar con el Plan Integral?</p>
                <h3 class="fw-normal mb-5">El Plan Integral busca generar beneficios de largo plazo para quienes viven, trabajan, estudian o transitan por el corredor.</h3>

                <!-- Carrusel Único de Beneficios -->
                <div class="custom-carousel-wrapper mx-auto">
                    <div id="carousel-beneficios" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner spa-card">
                            
                            <!-- Beneficio 1 -->
                            <div class="carousel-item active">
                                <div class="d-flex align-items-center justify-content-center py-4" style="min-height: 280px;">
                                    <div class="text-center" style="max-width: 550px; width: 100%;">
                                        <h4 class="fw-bold text-dark mb-2">Menores tiempos de traslado</h4>
                                        <p class="mb-0 text-dark" style="font-size: 1.15rem;">Al separar los flujos y dar prioridad al transporte público se reducirán los tiempos de traslado y los tiempos de viaje podrán ser más previsibles.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Beneficio 2 -->
                            <div class="carousel-item">
                                <div class="d-flex align-items-center justify-content-center py-4" style="min-height: 280px;">
                                    <div class="text-center" style="max-width: 550px; width: 100%;">
                                        <h4 class="fw-bold text-dark mb-2">Transporte público más eficiente</h4>
                                        <p class="mb-0 text-dark" style="font-size: 1.15rem;">El carril exclusivo permitirá que los viajes en autobús sean más ágiles, reduciendo el tiempo de recorrer un trayecto de 30 a 10 minutos aproximadamente.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Beneficio 3 -->
                            <div class="carousel-item">
                                <div class="d-flex align-items-center justify-content-center py-4" style="min-height: 280px;">
                                    <div class="text-center" style="max-width: 550px; width: 100%;">
                                        <h4 class="fw-bold text-dark mb-2">Ciclovía segura</h4>
                                        <p class="mb-0 text-dark" style="font-size: 1.15rem;">Con la ciclovía confinada, moverse en bicicleta podría convertirse en una alternativa real y segura para trayectos cotidianos.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Beneficio 4 -->
                            <div class="carousel-item">
                                <div class="d-flex align-items-center justify-content-center py-4" style="min-height: 280px;">
                                    <div class="text-center" style="max-width: 550px; width: 100%;">
                                        <h4 class="fw-bold text-dark mb-2">Cruces más seguros</h4>
                                        <p class="mb-0 text-dark" style="font-size: 1.15rem;">Los cruces a nivel de calle mejorarán la accesibilidad y facilitarán el paso de peatones y ciclistas, especialmente para personas mayores, niñas, niños y personas con discapacidad. La avenida dejará de ser una barrera peligrosa para volverse más fácil y segura de cruzar.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Beneficio 5 -->
                            <div class="carousel-item">
                                <div class="d-flex align-items-center justify-content-center py-4" style="min-height: 280px;">
                                    <div class="text-center" style="max-width: 550px; width: 100%;">
                                        <h4 class="fw-bold text-dark mb-2">Más espacios públicos</h4>
                                        <p class="mb-0 text-dark" style="font-size: 1.15rem;">Al liberar espacio en superficie, se recuperarán espacios verdes que hoy son inaccesibles por el volumen de tráfico y que volverán a ser de los vecinos.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Beneficio 6 -->
                            <div class="carousel-item">
                                <div class="d-flex align-items-center justify-content-center py-4" style="min-height: 280px;">
                                    <div class="text-center" style="max-width: 550px; width: 100%;">
                                        <h4 class="fw-bold text-dark mb-2">Menos inundaciones</h4>
                                        <p class="mb-0 text-dark" style="font-size: 1.15rem;">Separar agua pluvial y sanitaria mejorará la capacidad del sistema y reducirá las inundaciones que hoy paralizan el corredor y dañan comercios y vehículos durante temporada de lluvias.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <!-- Controles (Flechas por fuera) -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-beneficios" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel-beneficios" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                        
                        <!-- Indicadores (Puntos por debajo) -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-beneficios" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#carousel-beneficios" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#carousel-beneficios" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#carousel-beneficios" data-bs-slide-to="3"></button>
                            <button type="button" data-bs-target="#carousel-beneficios" data-bs-slide-to="4"></button>
                            <button type="button" data-bs-target="#carousel-beneficios" data-bs-slide-to="5"></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ==========================================
             6. IMPACTO TEMPORAL (Aplica el mismo fondo)
             ========================================== -->
        <div class="tab-pane fade" id="impacto" role="tabpanel">
            
            <!-- FONDO REPLICADO DE ¿POR QUÉ?: RED METROPOLITANA -->
            <div class="bg-watermark-full">
                <svg viewBox="0 0 1920 1080" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                    <path class="via-agua" stroke="var(--naranja)" d="M -100 200 L 400 300 Q 500 320 600 450 L 900 850 Q 1000 980 1200 1000 L 2100 1050" />
                    <circle cx="400" cy="300" r="12" class="nodo-agua" stroke="var(--naranja)"/>
                    <circle cx="900" cy="850" r="12" class="nodo-agua" stroke="var(--naranja)"/>
                    <circle cx="1200" cy="1000" r="12" class="nodo-agua" stroke="var(--naranja)"/>

                    <path class="via-agua" stroke="var(--verde-oscuro)" d="M 200 -100 L 200 400 Q 200 500 350 600 L 700 800 Q 800 850 800 1000 L 800 1200" />
                    <circle cx="200" cy="400" r="12" class="nodo-agua" stroke="var(--verde-oscuro)"/>
                    <circle cx="700" cy="800" r="12" class="nodo-agua" stroke="var(--verde-oscuro)"/>

                    <path class="via-agua" stroke="var(--verde-medio)" d="M -100 800 L 300 800 Q 400 800 500 700 L 1100 100 Q 1200 0 1400 0 L 2100 0" />
                    <circle cx="300" cy="800" r="12" class="nodo-agua" stroke="var(--verde-medio)"/>
                    <circle cx="1100" cy="100" r="12" class="nodo-agua" stroke="var(--verde-medio)"/>

                    <path class="via-agua" stroke="var(--verde-claro)" d="M 1600 -100 L 1600 300 Q 1600 400 1500 500 L 1100 900 Q 1000 1000 1000 1200" />
                    <circle cx="1600" cy="300" r="12" class="nodo-agua" stroke="var(--verde-claro)"/>
                    <circle cx="1100" cy="900" r="12" class="nodo-agua" stroke="var(--verde-claro)"/>
                </svg>
            </div>

            <div class="container py-lg-4 text-center mx-auto" style="max-width: 1000px;">
                
                <h2 class="fw-bold text-dark mb-2">Impacto durante la obra</h2>
                <p class="text-muted fw-bold mb-3">Como en otros proyectos icónicos de la Ciudad como Paseo Alcalde, Periférico y Carretera Chapala, el Plan Integral podría generar afectaciones temporales durante su construcción. Su implementación implica un esfuerzo compartido y corresponsabilidad entre autoridades, usuarios, vecinos y comercios para transitar esta etapa, procurando reducir las afectaciones al máximo y mantener informada a la ciudadanía.</p>
                <p class="text-muted fw-bold mb-3">La información específica sobre etapas, desvíos, accesos, horarios, medidas de mitigación y zonas afectadas se publicará conforme avance la planeación del proyecto. Entre los impactos temporales que podrían presentarse están:</p>

                <!-- Carrusel Único de Impacto Temporal -->
                <div class="custom-carousel-wrapper mx-auto">
                    <div id="carousel-impacto" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner spa-card">
                            
                            <!-- Impacto 1 -->
                            <div class="carousel-item active">
                                <div class="d-flex align-items-center justify-content-center py-4" style="min-height: 280px;">
                                    <div class="text-center" style="max-width: 550px; width: 100%;">
                                        <h4 class="fw-bold text-dark mb-3">Cambios en la circulación</h4>
                                        <p class="mb-0 text-dark fs-5">Podrían presentarse ajustes temporales a la circulación, desvíos y cambios en rutas. Todos los ajustes se informarán en tiempo y forma y se darán alternativas viales.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Impacto 2 -->
                            <div class="carousel-item">
                                <div class="d-flex align-items-center justify-content-center py-4" style="min-height: 280px;">
                                    <div class="text-center" style="max-width: 550px; width: 100%;">
                                        <h4 class="fw-bold text-dark mb-3">Afectaciones a comercios y viviendas cercanas</h4>
                                        <p class="mb-0 text-dark fs-5">Algunos accesos, actividades comerciales o condiciones de operación podrían verse afectados temporalmente durante los frentes de obra.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Impacto 3 -->
                            <div class="carousel-item">
                                <div class="d-flex align-items-center justify-content-center py-4" style="min-height: 280px;">
                                    <div class="text-center" style="max-width: 550px; width: 100%;">
                                        <h4 class="fw-bold text-dark mb-3">Ruido y polvo</h4>
                                        <p class="mb-0 text-dark fs-5">Los trabajos podrían generar ruido y polvo en zonas cercanas a la construcción. Las medidas de control incluirán riego, mallas, mantenimiento de maquinaria y horarios definidos.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Impacto 4 -->
                            <div class="carousel-item">
                                <div class="d-flex align-items-center justify-content-center py-4" style="min-height: 280px;">
                                    <div class="text-center" style="max-width: 550px; width: 100%;">
                                        <h4 class="fw-bold text-dark mb-3">Afectaciones temporales a servicios</h4>
                                        <p class="mb-0 text-dark fs-5">Las obras hidráulicas o reubicación de infraestructura podrían requerir cortes temporales de servicios, siempre con aviso previo.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Impacto 5 -->
                            <div class="carousel-item">
                                <div class="d-flex align-items-center justify-content-center py-4" style="min-height: 280px;">
                                    <div class="text-center" style="max-width: 550px; width: 100%;">
                                        <h4 class="fw-bold text-dark mb-3">Cambios en transporte público</h4>
                                        <p class="mb-0 text-dark fs-5">Algunas paradas o rutas podrían modificarse temporalmente durante la obra.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <!-- Controles -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-impacto" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel-impacto" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
                        
                        <!-- Indicadores (5 puntos) -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-impacto" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#carousel-impacto" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#carousel-impacto" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#carousel-impacto" data-bs-slide-to="3"></button>
                            <button type="button" data-bs-target="#carousel-impacto" data-bs-slide-to="4"></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ==========================================
             7. LA CONSULTA (Aplica el mismo fondo)
             ========================================== -->
        <div class="tab-pane fade" id="consulta" role="tabpanel">
            
            <!-- FONDO REPLICADO DE ¿POR QUÉ?: RED METROPOLITANA -->
            <div class="bg-watermark-full">
                <svg viewBox="0 0 1920 1080" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                    <path class="via-agua" stroke="var(--naranja)" d="M -100 200 L 400 300 Q 500 320 600 450 L 900 850 Q 1000 980 1200 1000 L 2100 1050" />
                    <circle cx="400" cy="300" r="12" class="nodo-agua" stroke="var(--naranja)"/>
                    <circle cx="900" cy="850" r="12" class="nodo-agua" stroke="var(--naranja)"/>
                    <circle cx="1200" cy="1000" r="12" class="nodo-agua" stroke="var(--naranja)"/>

                    <path class="via-agua" stroke="var(--verde-oscuro)" d="M 200 -100 L 200 400 Q 200 500 350 600 L 700 800 Q 800 850 800 1000 L 800 1200" />
                    <circle cx="200" cy="400" r="12" class="nodo-agua" stroke="var(--verde-oscuro)"/>
                    <circle cx="700" cy="800" r="12" class="nodo-agua" stroke="var(--verde-oscuro)"/>

                    <path class="via-agua" stroke="var(--verde-medio)" d="M -100 800 L 300 800 Q 400 800 500 700 L 1100 100 Q 1200 0 1400 0 L 2100 0" />
                    <circle cx="300" cy="800" r="12" class="nodo-agua" stroke="var(--verde-medio)"/>
                    <circle cx="1100" cy="100" r="12" class="nodo-agua" stroke="var(--verde-medio)"/>

                    <path class="via-agua" stroke="var(--verde-claro)" d="M 1600 -100 L 1600 300 Q 1600 400 1500 500 L 1100 900 Q 1000 1000 1000 1200" />
                    <circle cx="1600" cy="300" r="12" class="nodo-agua" stroke="var(--verde-claro)"/>
                    <circle cx="1100" cy="900" r="12" class="nodo-agua" stroke="var(--verde-claro)"/>
                </svg>
            </div>

            <div class="container py-lg-4 text-center mx-auto" style="max-width: 1000px;">
                <h2 class="fw-bold text-dark mb-2">Consulta Popular</h2>
                <p class="text-muted fw-bold mb-3">La Consulta te toca a ti</p>
                <h3 class="fw-normal mb-5">Conoce la propuesta, resuelve tus dudas y comparte tu opinión.</h3>
                
                <div class="spa-card p-5 mx-auto bg-white border border-dark-subtle text-start" style="max-width: 800px;">
                    <p class="text-muted fs-5 mb-5">El Plan Integral se someterá a una Consulta Popular, en la que la ciudadanía podrá expresar formalmente su opinión sobre el proyecto. La fecha se confirmará próximamente y se publicará en este sitio. Mientras tanto, conoce la propuesta, resuelve tus dudas y comparte tus comentarios durante esta etapa de socialización.</p>
                    <div class="text-center">
                        <a href="https://ee.kobotoolbox.org/yCu22I6o" target="_blank" rel="noopener noreferrer" class="btn btn-dark fw-bold px-4 py-3 rounded-0 shadow-sm" style="background-color: var(--color-primario); border:none;">Participa en línea</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ==========================================
         AVISO FLOTANTE DEL SISTEMA (Ofuscado para Evasión AdBlock)
         ========================================== -->
    <div id="sysNoticeLayer" class="sys-notice-layer d-none">
        <div class="sys-notice-header">
            <h6>Gestión de datos</h6>
        </div>
        <div class="sys-notice-body">
            <p>En este sitio, utilizamos herramientas internas para medir nuestra audiencia, garantizar la seguridad de tu sesión y mostrarte contenidos adaptados a tus necesidades de navegación.</p>
            <div class="sys-btn-grid">
                <!-- Dispara un modal interno de Bootstrap -->
                <button class="btn-sys btn-sys-secondary" data-bs-toggle="modal" data-bs-target="#modalConfiguracion">Configurar</button>
                <button id="btn-sys-accept" class="btn-sys btn-sys-primary">Aceptar todo</button>
            </div>
        </div>
    </div>

    <!-- ==========================================
         MODAL: CONFIGURACIÓN DE DATOS (Evasión AdBlock)
         ========================================== -->
    <div class="modal fade" id="modalConfiguracion" tabindex="-1" aria-labelledby="modalConfiguracionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow">
                
                <!-- Cabecera -->
                <div class="modal-header border-bottom-0 pb-0 bg-white">
                    <h4 class="modal-title fw-bold" id="modalConfiguracionLabel" style="color: var(--verde-oscuro);">Configuración de datos</h4>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                
                <!-- Cuerpo con los Switches -->
                <div class="modal-body p-4 px-md-5">
                    <p class="text-muted small mb-4">Administra tus preferencias sobre las herramientas internas que utilizamos.</p>
                    
                    <!-- Switch: Necesarias (Siempre activo) -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="pe-3">
                            <h6 class="fw-bold mb-1" style="color: var(--verde-oscuro);">Técnicas y necesarias</h6>
                            <p class="text-muted small mb-0 lh-sm">Indispensables para que el sitio sea seguro y funcione correctamente.</p>
                        </div>
                        <div class="form-check form-switch">
                            <!-- Disabled y Checked por defecto -->
                            <input class="form-check-input fs-4 shadow-none" type="checkbox" role="switch" checked disabled>
                        </div>
                    </div>
                    
                    <hr class="border-dark-subtle opacity-25 my-4">
                    
                    <!-- Switch: Analítica (Opcional) -->
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="pe-3">
                            <h6 class="fw-bold mb-1" style="color: var(--verde-oscuro);">Medición y analítica</h6>
                            <p class="text-muted small mb-0 lh-sm">Nos ayudan a entender de forma anónima cómo usas el sitio para mejorarlo.</p>
                        </div>
                        <div class="form-check form-switch">
                            <!-- Toggle interactivo -->
                            <input class="form-check-input fs-4 shadow-none" type="checkbox" role="switch" id="toggleAnalytics" checked>
                        </div>
                    </div>
                </div>
                
                <!-- Botón de Guardar -->
                <div class="modal-footer border-top-0 pt-0 bg-white justify-content-center">
                    <button type="button" class="btn rounded-pill text-white px-4 fw-bold shadow-sm" style="background-color: var(--naranja);" id="btn-save-config">Guardar preferencias</button>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Bootstrap JS con SRI -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Lógica de SPA (Router Seguro) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ==========================================
            // LÓGICA DE SPA Y DEEP LINKING
            // ==========================================
            let hash = window.location.hash;
            if (hash) {
                let tabTrigger = document.querySelector('.main-nav-link[data-bs-target="' + hash + '"]');
                if (tabTrigger) {
                    let tab = new bootstrap.Tab(tabTrigger);
                    tab.show();
                }
            }

            // Actualizar hash al cambiar la pestaña principal
            let tabLinks = document.querySelectorAll('.main-nav-link');
            tabLinks.forEach(tab => {
                tab.addEventListener('shown.bs.tab', function (e) {
                    let targetHash = e.target.getAttribute('data-bs-target');
                    window.history.replaceState(null, null, targetHash);
                    
                    let navbarCollapse = document.getElementById('spaNavbar');
                    if(navbarCollapse.classList.contains('show')){
                        let bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                        if(bsCollapse) bsCollapse.hide();
                    }
                });
            });

            // ==========================================
            // LÓGICA DE AVISO FLOTANTE PERSISTENTE Y CONFIGURACIÓN
            // ==========================================
            const sysLayer = document.getElementById('sysNoticeLayer');
            const btnAccept = document.getElementById('btn-sys-accept');
            const btnSaveConfig = document.getElementById('btn-save-config');
            const toggleAnalytics = document.getElementById('toggleAnalytics');

            if(sysLayer) {
                const userPref = localStorage.getItem('user_site_pref');
                
                if(!userPref) {
                    sysLayer.classList.remove('d-none');
                }

                const closeSysLayer = (status, analyticsEnabled = false) => {
                    localStorage.setItem('user_site_pref', status);
                    localStorage.setItem('user_analytics_pref', analyticsEnabled);
                    sysLayer.classList.add('d-none');
                };

                btnAccept.addEventListener('click', () => closeSysLayer('accepted_all', true));
                
                if(btnSaveConfig) {
                    btnSaveConfig.addEventListener('click', () => {
                        const isAnalyticsOn = toggleAnalytics.checked;
                        closeSysLayer('custom_config', isAnalyticsOn);
                        
                        const modalConfigEl = document.getElementById('modalConfiguracion');
                        const modalInstance = bootstrap.Modal.getOrCreateInstance(modalConfigEl);
                        modalInstance.hide();
                    });
                }
            }
        });
    </script>
</body>
</html>