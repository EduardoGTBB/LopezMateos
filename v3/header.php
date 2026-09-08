<?php
// CABECERAS DE SEGURIDAD OWASP CENTRALIZADAS
header("X-Frame-Options: SAMEORIGIN"); 
header("X-XSS-Protection: 1; mode=block"); 
header("X-Content-Type-Options: nosniff"); 
// CSP Estricto: Protege todas las páginas del Nivel 1 y Nivel 2
header("Content-Security-Policy: default-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://fonts.googleapis.com https://fonts.gstatic.com; img-src 'self' data:; frame-src 'self' https://www.youtube.com https://ee.kobotoolbox.org;");

// Lógica para detectar si estamos en Nivel 2
$es_nivel2 = isset($es_nivel2) ? $es_nivel2 : false;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Integral López Mateos</title>
    
    <!-- Bootstrap 5.3.2 con SRI -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            /* PALETA DEL CLIENTE */
            --naranja: #fd8107;
            --verde-claro: #94ee00;
            --verde-medio: #00943c;
            --verde-oscuro: #004b13;
            --verde-pdf: #dcefc6;
            --gris-cliente: #ede9df;
            --verde-pdf2: #a9e34b;

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
            overflow-x: hidden; 
        }

        /* --- ESTILOS DE LÍNEAS CONECTORAS --- */
        .conector-metro {
            position: relative;
            z-index: 1; 
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
            height: 220px; 
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
            stroke-width: 4px;
            vector-effect: non-scaling-stroke;
        }

        section, header, footer {
            position: relative;
            z-index: 5;
        }

        p { font-size: 1.15rem; line-height: 1.6; }
        .titulo-seccion { font-weight: 800; letter-spacing: -0.5px; }

        .seccion-clara { background-color: #ffffff; }
        .seccion-gris { background-color: var(--color-secundario); }
        .seccion-oscura { background-color: var(--color-primario); color: #ffffff; }
        .seccion-oscura .titulo-seccion { color: #ffffff; }

        /* Botones Planos (Sin animaciones) */
        .btn-solido {
            background-color: var(--color-primario);
            color: white;
            padding: 14px 32px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 0px; /* Diseño Plano */
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
            border-radius: 0px; /* Diseño Plano */
            border: none;
            text-decoration: none;
            display: inline-block;
        }
        .btn-acento:hover {
            background-color: var(--verde-pdf2);
            color: var(--verde-oscuro);
        }

        .caja-dato {
            border-left: 4px solid var(--naranja); 
            padding-left: 1rem;
            margin-bottom: 1.5rem;
            min-height: 100%; 
            margin-bottom: 0;
        }
        
        .numero-gigante {
            font-size: 3rem;
            font-weight: 800;
            color: var(--color-primario);
            line-height: 0.5;
        }

        .accordion-item {
            border: 1px solid var(--color-primario);
            margin-bottom: 0.5rem;
            border-radius: 0px !important;
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
            pointer-events: none; z-index: 4; box-shadow: none;
        }
        .slider-button {
            position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
            width: 45px; height: 45px; background: white; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            border: 3px solid var(--naranja); box-shadow: none;
        }

        /* Tarjetas Planas (Flat Design - Sin sombras) */
        .tarjeta-plana {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 0;
            padding: 1.5rem;
            height: 100%;
        }
        
        /* Formulario Plano */
        .form-plano .form-control, .form-plano .form-select {
            border-radius: 0;
            border: 1px solid #ced4da;
            padding: 12px;
            background-color: #f8f9fa;
        }
        .form-plano .form-control:focus {
            box-shadow: none;
            border-color: var(--color-acento);
        }

        /* ==========================================
           ESTILOS WIDGET FLOTANTE (Abajo a la Derecha)
           ========================================== */
        .sys-floating-widget {
            position: fixed;
            bottom: 25px; /* Fijado en la parte inferior */
            right: 25px;  /* Fijado a la derecha */
            z-index: 2000; /* Siempre por encima del contenido y el footer */
            display: flex;
            align-items: flex-end;
            justify-content: flex-end;
            /* Animación suave de entrada de abajo hacia arriba */
            animation: slideUpFade 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        .sys-dialog {
            width: 100%;
            max-width: 400px; /* Ancho compacto ideal para la esquina */
            margin-top: 50px; /* Deja espacio visual para el botón superior */
        }

        /* Botón píldora flotante fuera de la tarjeta principal */
        .btn-sys-floating {
            position: absolute;
            top: -40px;
            right: 0;
            background: white;
            color: #555;
            border: 1px solid #ddd;
            border-radius: 50px;
            padding: 6px 18px;
            font-size: 0.85rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }

        .btn-sys-floating:hover {
            background-color: var(--hueso);
            color: var(--verde-oscuro);
        }

        /* Botones divididos al estilo StartBootstrap / UI Europea */
        .sys-btn-half {
            width: 50%;
            border-radius: 0 !important;
            padding: 14px 0;
            font-size: 1rem;
            border: none;
            transition: opacity 0.2s;
        }
        
        .sys-btn-half:hover {
            opacity: 0.85;
        }

        @keyframes slideUpFade {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive: En celulares ocupa el 100% del ancho y se centra */
        @media (max-width: 576px) {
            .sys-floating-widget {
                bottom: 15px;
                right: 15px;
                left: 15px;
                justify-content: center;
            }
            .sys-dialog { 
                max-width: 100%; 
            }
            .btn-sys-floating {
                right: 0; /* Lo mantiene a la derecha dentro de la caja en móviles */
            }
        }

        /* Estilos Gestor Cookies (Oculto) *
        .cookie-banner-wrapper { display: none; }

        *--- ESTILOS DEL CHECKBOX DEL FOOTER --- *
        .checkbox-footer {
            background-color: #ffffff !important;
            border: 1px solid #adb5bd !important;
            cursor: pointer;
        }
        .checkbox-footer:checked {
            background-color: var(--naranja) !important;
            border-color: var(--naranja) !important;
        }*/
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-principal">

    <!-- NAVEGACIÓN PRINCIPAL ÚNICA FIJA -->
    <nav id="navbar-principal" class="navbar navbar-expand-lg navbar-dark fixed-top border-bottom border-dark-subtle" style="background-color: var(--color-oscuro);">
        <div class="container align-items-center">
            
            <a class="navbar-brand fw-bold d-flex align-items-center" href="index.php">
                <div class="d-flex flex-column justify-content-center me-3">
                    <span class="fw-bolder fs-5 text-nowrap lh-1 mb-1" style="color: var(--verde-pdf);">LÓPEZ MATEOS,</span>
                    <span class="fw-bold fs-6 text-nowrap lh-1 opacity-75" style="color: var(--verde-claro);">TE TOCA A TI</span>
                </div>
            </a>

            <button class="navbar-toggler rounded-0 shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú Limpio -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center gap-3">
                    <li class="nav-item"><a class="nav-link text-white" href="index.php#conoce">Conoce el proyecto</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="index.php#socializacion">Socialización y Consulta</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="index.php#dudas">Resuelve tus dudas</a></li>
                    <li class="nav-item"><a class="btn btn-acento py-2 px-4 ms-lg-3 mt-2 mt-lg-0" href="index.php#participa">Participa</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Inicio del contenido principal -->
    <!-- padding-top de 76px compensa el nav fijo para que el contenido no quede oculto bajo la barra -->
    <main class="flex-grow-1" style="padding-top: 76px;">

        <?php if($es_nivel2): ?>
        <!-- BARRA "VOLVER AL PROYECTO" Y ETAPA (Sticky Top) -->
        <!-- Esta barra acompañará al usuario pegándose debajo del menú principal -->
        <div class="py-1 border-bottom border-dark-subtle sticky-top shadow-sm transition-all" style="background-color: var(--verde-pdf); top: 75px; z-index: 1020;">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Retorno -->
                <a href="index.php" class="text-decoration-none fw-bold small text-dark py-1">
                    &larr; Volver al proyecto
                </a>
                <!-- Etiqueta -->
                <span class="badge rounded-0 text-dark border border-dark-subtle" style="background-color: var(--naranja);">Etapa: socialización</span>
            </div>
        </div>
        <?php endif; ?>