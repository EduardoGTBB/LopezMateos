<?php
// CABECERAS DE SEGURIDAD OWASP CENTRALIZADAS
header("X-Frame-Options: SAMEORIGIN"); 
header("X-XSS-Protection: 1; mode=block"); 
header("X-Content-Type-Options: nosniff"); 
header("Content-Security-Policy: default-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://fonts.googleapis.com https://fonts.gstatic.com; img-src 'self' data:;");
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
            --naranja: #fd8107;
            --verde-claro: #94ee00;
            --verde-medio: #00943c;
            --verde-oscuro: #004b13;
            --verde-pdf: #dcefc6;
            --gris-cliente: #ede9df;
            --verde-pdf2: #a9e34b;

            --color-primario: var(--verde-medio); 
            --color-oscuro: var(--verde-oscuro);  
            --color-acento: var(--verde-claro);
            --texto-principal: #333333;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--texto-principal);
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .titulo-seccion { font-weight: 800; letter-spacing: -0.5px; }

        /* Estilos globales para Nivel 2 */
        .tarjeta-plana {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 0; 
        }

        /* Botón destacado del menú (Flat Design) */
        .btn-acento {
            background-color: var(--color-acento);
            color: var(--verde-oscuro); 
            font-weight: 800; 
            border-radius: 0px; 
            border: none;
            text-decoration: none;
            display: inline-block;
        }
        .btn-acento:hover {
            background-color: var(--verde-pdf2);
            color: var(--verde-oscuro);
        }
    </style>
</head>
<body>

    <!-- BARRA SUPERIOR DE NIVEL 2 (Regreso al proyecto) -->
    <div class="py-2 sticky-top border-bottom" style="background-color: var(--color-oscuro); z-index: 1050;">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="index.php" class="text-white text-decoration-none fw-bold small">
                &larr; Volver al proyecto
            </a>
            <span class="badge rounded-0 text-dark" style="background-color: var(--naranja);">Etapa: socialización</span>
        </div>
    </div>

    <!-- NAVEGACIÓN PRINCIPAL UNIFICADA (Idéntica a index.php pero con enlaces de retorno) -->
    <nav class="navbar navbar-expand-lg navbar-dark border-bottom border-dark-subtle" style="background-color: var(--color-oscuro);">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">
                <div class="d-flex flex-column justify-content-center">
                    <span class="fw-bolder fs-5 text-nowrap lh-1 mb-1" style="color: var(--verde-pdf);">LÓPEZ MATEOS,</span>
                    <span class="fw-bold fs-6 text-nowrap lh-1 opacity-75" style="color: var(--verde-claro);">TE TOCA A TI</span>
                </div>
            </a>
            <!-- Botón Hamburguesa para Móviles -->
            <button class="navbar-toggler rounded-0 shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
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
    <main class="flex-grow-1">