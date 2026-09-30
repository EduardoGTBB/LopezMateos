<?php
// CABECERAS DE SEGURIDAD OWASP CENTRALIZADAS
header("X-Frame-Options: SAMEORIGIN"); 
header("X-XSS-Protection: 1; mode=block"); 
header("X-Content-Type-Options: nosniff"); 
header("Content-Security-Policy: default-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://cdnjs.cloudflare.com https://fonts.googleapis.com https://fonts.gstatic.com; font-src 'self' https://cdnjs.cloudflare.com https://fonts.gstatic.com; frame-src 'self' https://www.youtube.com https://ee.kobotoolbox.org; img-src 'self' data:;");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Propuesta navegable para el sitio informativo del Plan Integral López Mateos." />
    <title>Plan Integral López Mateos - Opción 1</title>
    
    <!-- Fuentes Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Inter:wght@400;600;800;900&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet" />
    
    <!-- Bootstrap 5.3.2 con SRI -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- FontAwesome 6.4.2 con SRI (OWASP Compliant) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        :root {
            --naranja: #fd8107;
            --verde-claro: #94ee00;
            --verde-medio: #00943c;
            --verde-oscuro: #004b13;
            --gris-cliente: #ede9df;
            
            --green: var(--verde-medio);
            --green-deep: var(--verde-oscuro);
            --green-soft: var(--gris-cliente);
            --orange: var(--naranja);
            --ink: #333333;
            --muted: #595959;
            --line: #dee2e6;
            --white: #ffffff;
            --radius: 22px;
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: auto; /* Controlado por JS */ }
        body { margin: 0; color: var(--ink); background-color: #f8f9fa; font: 16px/1.55 "DM Sans", Arial, sans-serif; overflow-x: hidden; }
        a { color: inherit; }
        button, a { -webkit-tap-highlight-color: transparent; }
        h1, h2, h3, p, figure { margin-top: 0; }
        h1, h2, h3 { font-family: "Inter", "Manrope", Arial, sans-serif; letter-spacing: -.035em; line-height: 1.08; }

        .navbar { background-color: var(--verde-oscuro); box-shadow: 0 4px 12px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 1050 !important; }
        .navbar-brand .logo-text { color: #ffffff; font-weight: 800; font-family: "Inter", sans-serif; }
        .main-nav-link { color: rgba(255, 255, 255, 0.7) !important; font-weight: 600; font-size: 0.9rem; font-family: "Inter", sans-serif; padding: 0.5rem 0.75rem !important; border-radius: 8px; transition: all 0.2s; white-space: nowrap; }
        .main-nav-link:hover { color: #ffffff !important; background-color: rgba(255, 255, 255, 0.1); }
        .main-nav-link.active { background-color: var(--naranja) !important; color: #ffffff !important; }

        .story-section, .participate, .resource-section { scroll-margin-top: 76px; }
        .theme-light { color: var(--ink); background: var(--green-soft); }
        .theme-dark { color: var(--white); background: var(--green); }
        
        .section-shell { width: min(1380px,90vw); margin: auto; display: grid; grid-template-columns: 170px minmax(0,1fr); gap: clamp(2.5rem,5vw,5.8rem); }
        .story-section .section-shell { padding: clamp(5rem,7vw,7rem) 0; }
        .section-label { align-self: stretch; padding: .25rem 1.35rem 0 0; border-right: 2px solid var(--orange); }
        .section-label span { color: var(--orange); font: 800 2.7rem/1 "Manrope", sans-serif; letter-spacing: -.05em; }
        .section-label p { margin: 1rem 0 .65rem; font-weight: 800; font-size: .88rem; letter-spacing: .06em; text-transform: uppercase; }
        .section-label small { display: block; color: var(--muted); font-size: .8rem; line-height: 1.45; }
        .theme-dark .section-label small { color: #bed7cd; }
        
        .section-heading { margin-bottom: 2.3rem; display: flex; flex-wrap: wrap; gap: clamp(1.5rem, 4vw, 3rem); align-items: center; }
        .section-heading h2 { flex: 1 1 0%; min-width: 60%; max-width: 890px; margin-bottom: 0; font-size: clamp(2rem, 3.2vw, 3.45rem); }
        .section-heading > p { flex: 0 1 300px; margin-bottom: 0; padding-left: 1.2rem; color: var(--muted); border-left: 3px solid var(--orange); }
        .theme-dark .section-heading > p { color: #c8ddd5; }
        .context-note { margin: -1rem 0 2rem; padding: .9rem 1rem; color: var(--ink); background: #fff4ed; border-left: 4px solid var(--orange); border-radius: 8px; font-size: .9rem; }

        .document-links { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1rem; margin-top: 2.5rem; }
        .document-links a { padding: 1.8rem 1.5rem; display: flex; justify-content: space-between; align-items: center; gap: 1rem; text-decoration: none; background-color: var(--verde-oscuro); border: 1px solid rgba(255,255,255,0.2); border-radius: 12px; font-size: 1.05rem; font-weight: 700; color: var(--white); transition: all 0.2s ease; }
        .document-links a:hover { background-color: var(--white); color: var(--verde-oscuro); border-color: var(--white); }

        .carousel-shell { position: relative; }
        .topic-tabs { padding: 0 0 1rem; display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; }
        .topic-tab { min-height: 42px; padding: .6rem 1.2rem; color: var(--green-deep); background: var(--white); border: 1px solid var(--line); border-radius: 999px; font: 700 .85rem "DM Sans", sans-serif; cursor: pointer; transition: all 0.2s; }
        .topic-tab:hover { border-color: var(--orange); background: var(--gris-cliente); }
        .topic-tab[aria-selected="true"] { color: var(--white); background: var(--orange); border-color: var(--orange); box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .theme-dark .topic-tab { color: var(--white); background: transparent; border-color: rgba(255,255,255,.34); }
        .theme-dark .topic-tab[aria-selected="true"] { background: var(--orange); border-color: var(--orange); }
        
        .story-stage { position: relative; }
        .feature-card { min-height: 385px; padding: 0; display: grid; grid-template-columns: minmax(300px,.82fr) minmax(0,1.18fr); overflow: hidden; color: var(--ink); background: var(--white); border: 1px solid rgba(11,81,63,.15); border-radius: var(--radius); box-shadow: 0 18px 50px rgba(6,61,49,.08); }
        
        .feature-visual { position: relative; min-height: 385px; padding: clamp(2rem,4vw,3.2rem); display: flex; flex-direction: column; justify-content: flex-end; color: var(--white); background: var(--green-deep); overflow: hidden; }
        .feature-visual[data-slide]::before { content: attr(data-slide); position: absolute; top: 22px; left: 28px; color: rgba(255,255,255,.14); font: 800 7rem/1 "Manrope", sans-serif; }
        
        .stat-kicker { position: relative; z-index: 1; margin-bottom: .45rem; color: #acd0c2; font-size: .72rem; font-weight: 800; letter-spacing: .11em; text-transform: uppercase; }
        .stat-value { position: relative; z-index: 1; margin-bottom: .45rem; font: 800 clamp(2.3rem,4vw,4.5rem)/.98 "Manrope", sans-serif; letter-spacing: -.06em; }
        .stat-caption { position: relative; z-index: 1; max-width: 280px; color: #d4e7df; font-size: .86rem; }
        
        .feature-copy { padding: clamp(2.2rem,4vw,4rem); display: flex; flex-direction: column; justify-content: center; text-align: left; }
        .feature-copy h3 { max-width: 650px; margin-bottom: 1rem; font-size: clamp(1.8rem,3vw,3rem); color: var(--green-deep); }
        .feature-copy > p { max-width: 720px; margin-bottom: 1.5rem; color: var(--muted); font-size: 1.05rem; }
        .feature-copy dl { margin: 0; padding-top: 1.25rem; border-top: 1px solid var(--line); }
        .feature-copy dt { color: var(--green); font-size: .75rem; font-weight: 800; letter-spacing: .09em; text-transform: uppercase; }
        .feature-copy dd { margin: .3rem 0 0; color: #333; font-weight: 600; }
        
        .details-toggle { align-self: flex-start; min-height: 42px; margin-top: 1.35rem; padding: .62rem 1rem; display: inline-flex; align-items: center; gap: .7rem; color: var(--green); background: transparent; border: 1px solid var(--green); border-radius: 999px; font: 800 .82rem "DM Sans", sans-serif; cursor: pointer; }
        .details-toggle:hover { color: var(--white); background: var(--green); }
        .proposal-details { margin-top: 1.35rem; padding-top: 1.3rem; display: grid; gap: 1.25rem; border-top: 1px solid var(--line); text-align: left; }
        .proposal-details[hidden] { display: none; }
        .proposal-details h4 { margin: 0 0 .45rem; color: var(--green); font: 800 .72rem "DM Sans", sans-serif; letter-spacing: .09em; text-transform: uppercase; }
        .proposal-details ul { margin: 0; padding: 0; display: grid; gap: .42rem; list-style: none; color: var(--muted); }
        .proposal-details li { position: relative; padding-left: 1.2rem; }
        .proposal-details li::before { content: "→"; position: absolute; left: 0; color: var(--orange); font-weight: 800; }
        
        .carousel-arrows { position: absolute; inset: 50% -22px auto; display: flex; justify-content: space-between; transform: translateY(-50%); pointer-events: none; }
        .arrow-button { width: 46px; height: 46px; display: grid; place-items: center; color: var(--green-deep); background: var(--white); border: 1px solid var(--line); border-radius: 50%; box-shadow: 0 7px 20px rgba(6,61,49,.12); cursor: pointer; pointer-events: auto; font-size: 1.1rem; }
        .arrow-button:hover { color: var(--white); background: var(--orange); border-color: var(--orange); }
        .carousel-footer { min-height: 34px; padding-top: .85rem; display: flex; align-items: center; justify-content: center; gap: .8rem; }
        .carousel-count { color: var(--muted); font-size: .76rem; font-weight: 800; }
        .carousel-dots { display: flex; align-items: center; gap: .42rem; }
        .carousel-dot { width: 7px; height: 7px; padding: 0; border: 0; border-radius: 50%; background: #c8d5cf; cursor: pointer; }
        .carousel-dot.active { width: 20px; border-radius: 99px; background: var(--orange); }

        .participate .section-shell, .resource-section .section-shell { padding: clamp(4.5rem,6.5vw,6.5rem) 0; }
        .participate-main { display: grid; grid-template-columns: minmax(0,1.15fr) minmax(300px,.85fr); gap: clamp(3rem,7vw,7rem); align-items: start; }
        .participate-main h2 { margin-bottom: 0; font-size: clamp(2.2rem,3.8vw,4.1rem); }
        .participate-main p { color: #cfe1da; }
        .button-orange { margin-top: .65rem; color: var(--white); background: var(--orange); display: inline-flex; align-items: center; justify-content: center; gap: .9rem; border-radius: 8px; text-decoration: none; font-weight: 800; padding: .82rem 1.2rem; }
        
        .resource-section .section-shell { padding: clamp(4.5rem,6.5vw,6.5rem) 0; }
        .resource-grid { display: grid; grid-template-columns: repeat(3,1fr); overflow: hidden; background: var(--white); border: 1px solid var(--line); border-radius: 16px; margin-top: 1rem;}
        .resource-grid a { min-height: 200px; padding: 2.5rem 1.5rem; display: flex; flex-direction: column; text-decoration: none; border-right: 1px solid var(--line); transition: background-color 0.2s;}
        .resource-grid a:last-child { border-right: 0; }
        .resource-grid a:hover { background-color: var(--gris-cliente); }
        .resource-icon { width: 42px; height: 42px; margin-bottom: auto; display: grid; place-items: center; color: var(--white); background: var(--verde-medio); border-radius: 50%; font-weight: 800; font-size: 1.2rem;}
        .resource-grid strong { margin-top: 1.5rem; font-family: "Inter", sans-serif; font-weight: 800; font-size: 1.15rem; color: var(--verde-oscuro); }
        .resource-grid small { margin-top: .45rem; color: var(--muted); font-size: 0.95rem; line-height: 1.4; }

        footer { min-height: 96px; padding: 1.5rem 5vw; display: grid; grid-template-columns: 1fr auto 1fr; align-items: center; gap: 2rem; color: #d0e2db; background: var(--green-deep); font-size: .78rem; }
        footer > div { display: flex; justify-content: flex-end; gap: 1.5rem; }
        footer a { text-decoration: none; }
        .footer-brand { color: var(--white); }

        /* --- AVISO FLOTANTE PERSISTENTE (EVASIÓN ADBLOCK) --- */
        .sys-notice-layer {
            position: fixed; bottom: 20px; right: 20px; max-width: 380px; width: calc(100% - 40px);
            background-color: #ffffff; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); z-index: 1060;
            border: 1px solid var(--gris-cliente); overflow: hidden; font-family: 'Inter', sans-serif;
        }
        .sys-notice-header { background-color: var(--color-primario); padding: 12px 20px; display: flex; justify-content: space-between; align-items: center; }
        .sys-notice-header h6 { color: #ffffff; margin: 0; font-weight: 800; font-size: 0.95rem; }
        .sys-notice-body { padding: 20px; }
        .sys-notice-body p { color: var(--texto-principal); font-size: 0.85rem; line-height: 1.4; margin-bottom: 20px; }
        .sys-btn-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
        .btn-sys { padding: 10px; border-radius: 6px; font-size: 0.85rem; font-weight: 700; text-align: center; border: none; cursor: pointer; transition: opacity 0.2s; }
        .btn-sys-primary { background-color: var(--naranja); color: #ffffff; }
        .btn-sys-secondary { background-color: var(--gris-cliente); color: var(--texto-principal); }

        .whatsapp-float { position: fixed; bottom: 25px; left: 25px; width: 75px; height: 75px; background-color: #25d366; color: #FFF; border-radius: 50px; box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15); z-index: 1050; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: transform 0.3s ease, background-color 0.3s ease; }
        .whatsapp-float:hover { background-color: #1ebe57; color: #FFF; transform: scale(1.05); }
        .whatsapp-float svg { width: 42px; height: 42px; fill: currentColor; }

        @media (max-width: 1050px) {
            .section-shell { grid-template-columns: 130px minmax(0,1fr); gap: 2.2rem; }
            .section-heading { flex-direction: column; align-items: flex-start; gap: 1.3rem; }
            .section-heading h2 { min-width: 100%; }
            .section-heading > p { max-width: 620px; flex-basis: auto; }
            .feature-card { grid-template-columns: .8fr 1.2fr; }
            .participate-main { grid-template-columns: 1fr; gap: 2rem; }
            .document-links { grid-template-columns: 1fr; } 
        }
        @media (max-width: 760px) {
            .section-shell { width: 88vw; grid-template-columns: 1fr; gap: 1.8rem; }
            .story-section .section-shell, .participate .section-shell, .resource-section .section-shell { padding: 4rem 0; }
            .section-label { padding: 0 0 1rem; display: grid; grid-template-columns: auto 1fr; align-items: end; gap: .8rem 1rem; border-right: 0; border-bottom: 2px solid var(--orange); }
            .section-label span { font-size: 2.2rem; }
            .section-label p { margin: 0; }
            .section-label small { grid-column: 1 / -1; }
            .section-heading h2 { font-size: 2.15rem; }
            .feature-card { min-height: 550px; grid-template-columns: 1fr; }
            .feature-visual { min-height: 220px; }
            .feature-copy { padding: 2rem; }
            .carousel-arrows { inset: auto 16px 16px auto; gap: .5rem; transform: none; }
            .arrow-button { width: 42px; height: 42px; }
            .carousel-footer { justify-content: flex-start; }
            .resource-grid { grid-template-columns: 1fr; }
            .resource-grid a { min-height: 150px; border-right: 0; border-bottom: 1px solid var(--line); }
            .resource-grid a:last-child { border-bottom: 0; }
            footer { grid-template-columns: 1fr; text-align: center; }
            footer > div { justify-content: center; }
            .whatsapp-float { width: 60px; height: 60px; bottom: 20px; left: 20px; }
            .whatsapp-float svg { width: 32px; height: 32px; }
        }
    </style>
</head>
<body> <!-- Sin scrollspy para JS nav -->

    <nav class="navbar navbar-expand-xl navbar-dark" id="spaNavbar">
        <div class="container py-2">
            <a class="navbar-brand d-flex flex-column lh-1" href="#home">
                <span class="logo-text fs-4">LÓPEZ MATEOS,</span>
                <span class="fs-6 fw-bold" style="color: var(--verde-claro);">TE TOCA A TI</span>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navContent">
                <ul class="navbar-nav gap-1 nav-pills">
                    <li class="nav-item"><a class="nav-link main-nav-link" href="#home">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link main-nav-link" href="#por-que">¿Por qué?</a></li>
                    <li class="nav-item"><a class="nav-link main-nav-link" href="#escuchado">Lo que escuchamos</a></li>
                    <li class="nav-item"><a class="nav-link main-nav-link" href="#propuesta">La propuesta</a></li>
                    <li class="nav-item"><a class="nav-link main-nav-link" href="#beneficios">Beneficios</a></li>
                    <li class="nav-item"><a class="nav-link main-nav-link" href="#impacto">Impacto temporal</a></li>
                    <li class="nav-item"><a class="nav-link main-nav-link" href="#consulta">Participa</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <!-- 1. HOME -->
        <section id="home" class="position-relative bg-white d-flex align-items-center" style="min-height: 85vh;">
            <div class="container content-layer py-5">
                <div class="row align-items-center justify-content-between g-5">
                    <div class="col-lg-5 text-start">
                        <p class="fw-bold mb-2 text-uppercase" style="color: var(--naranja); letter-spacing: 1px; font-size: 0.9rem;">López Mateos te toca a ti.</p>
                        <h1 class="display-4 mb-4 lh-sm" style="color: var(--verde-oscuro); font-family: 'Inter', sans-serif; font-weight: 900;">
                            Conoce la <br> propuesta del <br> Plan Integral <br> para López <br> Mateos
                        </h1>
                        <p class="text-muted mb-5 fw-semibold" style="font-size: 1.05rem; line-height: 1.6;">
                            Una estrategia integral para atender los retos de movilidad, transporte público, drenaje, seguridad vial, conectividad y espacio público.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative rounded-4 shadow-lg overflow-hidden border border-light" style="background-color: var(--verde-oscuro);">
                            <div class="ratio ratio-16x9 bg-dark">
                                <iframe src="https://www.youtube.com/embed/199djkIEflw" title="Video explicativo Plan López Mateos" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" sandbox="allow-scripts allow-same-origin allow-presentation" class="border-0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. DIAGNÓSTICO -->
        <section class="story-section theme-light" id="por-que" data-carousel="diagnostico">
            <div class="section-shell">
                <aside class="section-label"><span>01</span><p>¿Por qué?</p><small>Antes de decidir, conoce qué está pasando.</small></aside>
                <div class="section-main">
                    <div class="section-heading">
                        <h2>López Mateos mueve a miles de personas todos los días, pero hoy enfrenta retos que afectan la forma en que nos movemos por la ciudad.</h2>
                    </div>
                    <div class="carousel-shell">
                        <div class="topic-tabs" role="tablist" aria-label="Problemáticas del corredor"></div>
                        <div class="story-stage"><article class="feature-card" aria-live="polite"></article><div class="carousel-arrows"></div></div>
                        <div class="carousel-footer"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. ESCUCHA -->
        <section class="story-section theme-dark" id="escuchado" data-carousel="escucha">
            <div class="section-shell">
                <aside class="section-label"><span>02</span><p>¿Qué hemos escuchado?</p><small>Una propuesta que ha evolucionado.</small></aside>
                <div class="section-main">
                    <div class="section-heading"><h2>Antes de proponer una solución, escuchamos. El Plan Integral evolucionó con la participación de la ciudadanía y los resultados de estudios técnicos.</h2></div>
                    <div class="carousel-shell">
                        <div class="topic-tabs" role="tablist"></div>
                        <div class="story-stage"><article class="feature-card" aria-live="polite"></article><div class="carousel-arrows"></div></div>
                        <div class="carousel-footer"></div>
                    </div>
                    <div class="document-links">
                        <a href="https://dialogoslopezmateos.jalisco.gob.mx/" target="_blank">Conoce los resultados de los Diálogos 2022-2023 <span class="fs-5 lh-1">↗</span></a>
                        <a href="https://mesaslopezmateos.jalisco.gob.mx/" target="_blank">Consulta las Mesas de Diálogo 2025 <span class="fs-5 lh-1">↗</span></a>
                        <a href="documentos.php" target="_blank">Revisa cómo responde el Proyecto a las propuestas ciudadanas <span class="fs-5 lh-1">↗</span></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. PROPUESTA -->
        <section class="story-section theme-light" id="propuesta" data-carousel="propuesta">
            <div class="section-shell">
                <aside class="section-label"><span>03</span><p>La propuesta</p><small>No es solo una obra: es una estrategia integral.</small></aside>
                <div class="section-main">
                    <div class="section-heading"><h2>La propuesta combina distintas intervenciones para atender varios problemas de López Mateos al mismo tiempo.</h2></div>
                    <div class="carousel-shell">
                        <div class="topic-tabs" role="tablist"></div>
                        <div class="story-stage"><article class="feature-card" aria-live="polite"></article><div class="carousel-arrows"></div></div>
                        <div class="carousel-footer"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. BENEFICIOS -->
        <section class="story-section theme-dark" id="beneficios" data-carousel="beneficios">
            <div class="section-shell">
                <aside class="section-label"><span>04</span><p>Beneficios</p><small>¿Qué podría mejorar con el Plan Integral?</small></aside>
                <div class="section-main">
                    <div class="section-heading"><h2>El Plan Integral busca generar beneficios de largo plazo para quienes viven, trabajan, estudian o transitan por el corredor.</h2></div>
                    <div class="carousel-shell">
                        <div class="topic-tabs" role="tablist"></div>
                        <div class="story-stage"><article class="feature-card" aria-live="polite"></article><div class="carousel-arrows"></div></div>
                        <div class="carousel-footer"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. IMPACTO TEMPORAL -->
        <section class="story-section theme-light" id="impacto" data-carousel="impactos">
            <div class="section-shell">
                <aside class="section-label"><span>05</span><p>Impacto durante la obra</p><small>Un esfuerzo compartido.</small></aside>
                <div class="section-main">
                    <div class="mb-4 pt-1">
                        <h2 class="mb-4 lh-sm" style="font-size: clamp(2.1rem, 3.2vw, 3.45rem); max-width: 890px; color: var(--ink);">
                            Como en otros proyectos icónicos de la Ciudad como Paseo Alcalde, Periférico y Carretera Chapala, el Plan Integral podría generar afectaciones temporales durante su construcción.
                        </h2>
                        <div class="ps-3 mb-4" style="border-left: 3px solid var(--orange); max-width: 890px;">
                            <p class="mb-0" style="color: var(--muted); font-size: 1.05rem;">Su implementación implica un esfuerzo compartido y corresponsabilidad entre autoridades, usuarios, vecinos y comercios para transitar esta etapa, procurando reducir las afectaciones al máximo y mantener informada a la ciudadanía.</p>
                        </div>
                    </div>
                    <div class="context-note mt-4">La información específica sobre etapas, desvíos, accesos, horarios, medidas de mitigación y zonas afectadas se publicará conforme avance la planeación del proyecto. Entre los impactos temporales que podrían presentarse están:</div>
                    <div class="carousel-shell mt-4">
                        <div class="topic-tabs" role="tablist"></div>
                        <div class="story-stage"><article class="feature-card" aria-live="polite"></article><div class="carousel-arrows"></div></div>
                        <div class="carousel-footer"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7. PARTICIPA -->
        <section class="participate theme-dark" id="consulta">
            <div class="section-shell">
                <aside class="section-label"><span>06</span><p>Consulta Popular</p></aside>
                <div class="participate-main">
                    <div class="d-flex flex-column justify-content-center">
                        <h2 class="mb-3">Conoce la propuesta, resuelve tus dudas y comparte tu opinión.</h2>
                        <h4 class="fw-bold fs-3 mt-4" style="color: var(--naranja);">La consulta te toca a ti.</h4>
                    </div>
                    <div>
                        <p>El Plan Integral se someterá a una Consulta Popular, en la que la ciudadanía podrá expresar formalmente su opinión sobre el proyecto. </p>
                        <p>La fecha se confirmará próximamente y se publicará en este sitio. Mientras tanto, conoce la propuesta, resuelve tus dudas y comparte tus comentarios durante esta etapa de socialización.</p>
                        <a class="button-orange mt-2" href="https://ee.kobotoolbox.org/yCu22I6o" target="_blank" rel="noopener noreferrer">Participa en línea <span aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8. CONOCE MÁS -->
        <section class="story-section theme-light" id="documentos">
            <div class="section-shell">
                <aside class="section-label">
                    <span class="d-block text-naranja fw-black fs-5 mb-2" style="color: var(--naranja);">07</span>
                    <h3 class="fw-bold mb-2" style="color: var(--verde-oscuro);">Conoce más</h3>
                    <p class="text-muted small fw-bold">Información para decidir.</p>
                </aside>
                <div class="section-main">
                    <div class="resource-grid shadow-sm">
                        <a href="faq.php"><span class="resource-icon">?</span><strong>Preguntas frecuentes</strong><small>Resuelve tus dudas sobre el Plan Integral.</small></a>
                        <a href="documentos.php"><span class="resource-icon">↓</span><strong>Documentos</strong><small>Consulta estudios, resultados y materiales.</small></a>
                        <a href="#contacto"><span class="resource-icon">→</span><strong>Contacto</strong><small>Comparte una pregunta o comentario.</small></a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="contacto">
        <a class="brand footer-brand" href="#home" style="display:flex; flex-direction:column;">
            <span class="fs-6 fw-bold" style="color: var(--verde-claro);">PLAN INTEGRAL</span>
            <span class="fs-4 fw-bolder">LÓPEZ MATEOS</span>
        </a>
        <p>Propuesta de sitio para revisión.</p>
        <div><a href="#">Aviso de privacidad</a><a href="#">Contacto</a></div>
    </footer> 

    <!-- ==========================================
         AVISO FLOTANTE DEL SISTEMA 
         ========================================== -->
    <div id="sysNoticeLayer" class="sys-notice-layer d-none">
        <div class="sys-notice-header"><h6>Gestión de datos</h6></div>
        <div class="sys-notice-body">
            <p>En este sitio, utilizamos herramientas internas para medir nuestra audiencia, garantizar la seguridad de tu sesión y mostrarte contenidos adaptados a tus necesidades de navegación.</p>
            <div class="sys-btn-grid">
                <button class="btn-sys btn-sys-secondary" data-bs-toggle="modal" data-bs-target="#modalConfiguracion">Configurar</button>
                <button id="btn-sys-accept" class="btn-sys btn-sys-primary">Aceptar todo</button>
            </div>
        </div>
    </div>

    <!-- MODAL: CONFIGURACIÓN DE DATOS -->
    <div class="modal fade" id="modalConfiguracion" tabindex="-1" aria-labelledby="modalConfiguracionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow">
                <div class="modal-header border-bottom-0 pb-0 bg-white">
                    <h4 class="modal-title fw-bold" id="modalConfiguracionLabel" style="color: var(--verde-oscuro);">Configuración de datos</h4>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body p-4 px-md-5">
                    <p class="text-muted small mb-4">Administra tus preferencias sobre las herramientas internas que utilizamos.</p>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="pe-3">
                            <h6 class="fw-bold mb-1" style="color: var(--verde-oscuro);">Técnicas y necesarias</h6>
                            <p class="text-muted small mb-0 lh-sm">Indispensables para que el sitio sea seguro y funcione correctamente.</p>
                        </div>
                        <div class="form-check form-switch"><input class="form-check-input fs-4 shadow-none" type="checkbox" role="switch" checked disabled></div>
                    </div>
                    <hr class="border-dark-subtle opacity-25 my-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="pe-3">
                            <h6 class="fw-bold mb-1" style="color: var(--verde-oscuro);">Medición y analítica</h6>
                            <p class="text-muted small mb-0 lh-sm">Nos ayudan a entender de forma anónima cómo usas el sitio para mejorarlo.</p>
                        </div>
                        <div class="form-check form-switch"><input class="form-check-input fs-4 shadow-none" type="checkbox" role="switch" id="toggleAnalytics" checked></div>
                    </div>
                </div>
                <div class="modal-footer border-top-0 pt-0 bg-white justify-content-center">
                    <button type="button" class="btn rounded-pill text-white px-4 fw-bold shadow-sm" style="background-color: var(--naranja);" id="btn-save-config">Guardar preferencias</button>
                </div>
            </div>
        </div>
    </div>

    <a href="https://wa.me/521XXXXXXXXXX?text=Hola,%20me%20gustar%C3%ADa%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20Plan%20Integral%20L%C3%B3pez%20Mateos" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157.1zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            const sectionsData = {
              diagnostico: [
                { tabName: "Tráfico", meta: "3 problemáticas", icon: `<i class="fa-solid fa-car-side fa-5x"></i>`, slides: [ { title: "Movilidad saturada", stat: "+160 mil autos al día", text: "Una sola avenida concentra viajes locales y recorridos de paso, saturando el corredor por el que circulan más de 160 mil autos al día y, en hora pico, la velocidad puede ser menor a 10 km/h. "}, { title: "Costos de traslado", stat: "2 y 3 horas al día", text: "El tráfico cobra un costo en tiempo, dinero y calidad de vida para quienes recorren diariamente el corredor, con traslados que pueden representar entre 2 y 3 horas al día para muchos usuarios." }, { title: "Conectividad metropolitana limitada", stat: "Accesos afectados", text: "Al ser la única vía norte-sur en el tramo suburbano, cuando López Mateos se satura también se afecta el acceso al sur de la metrópoli." } ] },
                { tabName: "Cruces inseguros", meta: "2 problemáticas", icon: `<i class="fa-solid fa-person-walking fa-5x"></i>`, slides: [ { title: "Barrera urbana", stat: "12 calles", text: "El corredor funciona como una barrera que divide colonias y dificulta la movilidad de peatones y ciclistas; actualmente, 12 calles perpendiculares terminan al llegar a la avenida." }, { title: "Seguridad vial", stat: "14.8% de letalidad", text: "Las condiciones actuales aumentan el riesgo para peatones, ciclistas, automovilistas y transporte de carga. Entre 2019 y 2024, el corredor registró una tasa de letalidad de 14.8%, solo por debajo de Carretera a Chapala." } ] },
                { tabName: "Transporte lento", meta: "1 problemática", icon: `<i class="fa-solid fa-bus fa-5x"></i>`, slides: [ { title: "Transporte público atrapado", stat: "Velocidad reducida", text: "Los autobuses comparten espacio con el tráfico general, lo que reduce la velocidad y regularidad del servicio." } ] },
                { tabName: "Inundaciones", meta: "1 problemática", icon: `<i class="fa-solid fa-cloud-showers-heavy fa-5x"></i>`, slides: [ { title: "Inundaciones recurrentes", stat: "+50 años", text: "La infraestructura existente, incluido un colector con más de 50 años de antigüedad, no responde a la demanda ni a los episodios de lluvia. Las inundaciones afectan traslados, comercios, viviendas y el funcionamiento de López Mateos." } ] }
              ],
              escucha: [
                { tabName: "Participación ciudadana", 
                    meta: "Participación", 
                    icon: `<i class="fa-solid fa-people-group fa-5x"></i>`,
                    slides: [ { title: "Más de 60,000 participaciones ciudadanas", stat: "2022-2025", text: "La ciudadanía, especialistas, academia, organizaciones, sector privado y autoridades participaron en los Diálogos por la Movilidad Sustentable 2022-2023  y las Mesas de Diálogo de 2025 para identificar las problemáticas y posibles soluciones para el Corredor." } ] },
                { tabName: "Estudios técnicos", 
                    meta: "Evidencia", 
                    icon: `<i class="fa-solid fa-magnifying-glass-chart fa-5x"></i>`,
                    slides: [ { title: "Estudios técnicos y territoriales", stat: "Diagnóstico", text: "Los estudios técnicos y la información territorial permitieron ampliar el diagnóstico, entender las distintas dinámicas del corredor y ajustar la propuesta." } ] }
              ],
              propuesta: [
                { tabName: "Viaducto subterráneo", meta: "Componente 01", slides: [ { image: "img/V_subterraneo.png", title: "Viaducto subterráneo — 6.28 km totales.", stat: "6.28 km", text: "Busca mover parte del tráfico por debajo del nivel de calle en el tramo urbano para liberar superficie y permitir mejoras en transporte público, ciclovía, cruces y espacio público.", label: "Tramo", detail: "4.53 km entre Periférico y Av. Tizoc; 1.75 km en Mariano Otero, desde la Glorieta hasta Av. de las Rosas.", problem: "Mezcla de tráfico local y de paso en el tramo urbano.", elements: ["Viaducto subterráneo en tres tramos de la sección urbana del Corredor.", "Rampas de entrada y salida en puntos estratégicos.", "Conexión con Mariano Otero mediante una incorporación subterránea."] } ] },
                { tabName: "Viaducto elevado", meta: "Componente 02", slides: [ { image: "img/V_elevado.png", title: "Viaducto elevado — 11.84 km", stat: "11.84 km", text: "Separar viajes largos, vehículos de paso y transporte de carga del tránsito local, para que quienes recorren distancias más largas puedan circular sin detenerse en cada cruce, mientras que a nivel de calle se mantiene el acceso local.", label: "Tramo", detail: "Entre Camino Real a Colima y Periférico.", problem: "Saturación por falta de alternativas norte-sur en el tramo suburbano.", elements: ["Viaducto elevado que separa tránsito de paso y flujo suburbano.", "Ruta exprés para transporte público."] } ] },
                { tabName: "Transporte público", meta: "Componente 03", slides: [ { image: "img/T_publico.png", title: "Transporte público — 6 km de carril exclusivo y 7 estaciones.", stat: "6 km de carril y 7 estaciones", text:"Contempla carril exclusivo para transporte público, 7 estaciones centrales para la Ruta López Mateos y ruta exprés sobre el tramo elevado para mejorar tiempos, regularidad y conexión con otros sistemas como Macro Periférico, Tren Ligero y rutas troncales.", label: "Tramo", detail: "4.3 km sobre López Mateos y 1.7 km sobre Mariano Otero", problem: "Autobuses comparten el espacio con los vehículos particulares y queda atrapado en el tráfico.", elements: ["Carril exclusivo confinado.", "Estaciones en puntos de conexión.", "Conexión con Macro Periférico, Línea 1, futura Línea 5 y rutas troncales.", "Ruta exprés en tramo suburbano."] } ] },
                { tabName: "Ciclovía", meta: "Componente 04", slides: [ { image: "img/Ciclovia.png", title: "Ciclovía — 6.01 km de ciclovía.", stat: "6.01 km", text: "Incorpora infraestructura ciclista en López Mateos y Mariano Otero, conectadas con la red ciclista existente de la ciudad, para que la bicicleta pueda convertirse en una alternativa real para trayectos cotidianos.", label: "Tramo", detail: "4.26 km en López Mateos; 1.75 km en Mariano Otero.", problem: "Falta de infraestructura ciclista en López Mateos y en Mariano Otero.", elements: ["Conexión con ciclovías existentes.", "Carril confinado y separado del tráfico vehicular."] } ] },
                { tabName: "Drenaje", meta: "Componente 05", slides: [ { image: "img/Drenaje.png", title: "Drenaje — 4.6 km de nuevos colectores.", stat: "4.6 km", text: "Propone nuevos colectores para separar el agua residual del agua de lluvia para reducir inundaciones, mejorar la capacidad del sistema y disminuir afectaciones durante temporada de lluvias.", label: "Problema que atiende", detail: "Inundaciones recurrentes por el drenaje actual rebasado.", elements: ["Colector sanitario.", "Colector pluvial.", "+20% de capacidad respecto al colector sanitario actual."] } ] },
                { tabName: "Cruces seguros", meta: "Componente 06", slides: [ { image: "img/C_seguros.png", title: "Cruces seguros — 9 cruces peatonales a nivel de calle.", stat: "Accesibilidad", text: "Sustituye cruces inseguros y puentes poco accesibles por cruces a nivel de calle, buscan reducir barreras urbanas y mejorar la conectividad entre colonias.", label: "Problema que atiende", detail: "Cruzar el corredor actualmente es difícil, inseguro y poco accesible.", elements: ["Cruces vehiculares en Las Fuentes, Galileo, Orión y Conchita.", "Eliminación de 7 puentes peatonales.", "9 cruces peatonales en puntos estratégicos.", "Accesibilidad universal."] } ] },
                { tabName: "Nuevas áreas verdes", meta: "Componente 07", slides: [ { image: "img/A_verdes.png", title: "Nuevas áreas verdes y espacios públicos — 780 m en López Mateos.", stat: "1.6 km", text: "Recupera espacio a nivel de calle para áreas verdes, arbolado, zonas de descanso y convivencia.", label: "Tramo", detail: "López Mateos y Mariano Otero.", problem: "Falta de espacios públicos articulados y de calidad.", elements: ["Parque lineal en Jardines del Sol.", "Parque lineal en Mariano Otero.", "Mobiliario urbano, iluminación, arbolado y conexión con senderos existentes."] } ] },
                { tabName: "Modelo de operación", meta: "Componente 08", slides: [ { image: "img/A_verdes.png", title: "Modelo de operación y tramos de cuota", stat: "Por definir", text: "El tramo urbano será libre y el tramo suburbano contempla un esquema de peaje aún en definición.", label: "Tramo", detail: "Periférico Sur – Circuito Metropolitano Sur", elements: ["Tramo urbano libre: 4.53 km.", "Tramo suburbano con peaje: 15.74 km.", "Monto y estructura de tarifas por definir."] } ] }
              ],
              beneficios: [
                { tabName: "Menores tiempos", meta: "Beneficio 01", icon: `<i class="fa-solid fa-stopwatch fa-5x"></i>`, slides: [ { title: "Menores tiempos de traslado", stat: "Más previsibles", text: "Al separar los flujos y dar prioridad al transporte público se reducirán los tiempos de traslado y los tiempos de viaje podrán ser más previsibles." } ] },
                { tabName: "Mejor transporte", meta: "Beneficio 02", icon: `<i class="fa-solid fa-bus-simple fa-5x"></i>`, slides: [ { title: "Transporte público más eficiente", stat: "Mayor rapidez", text: "El carril exclusivo permitirá que los viajes en autobús sean más ágiles, reduciendo el tiempo de recorrer un trayecto de 30 a 10 minutos aproximadamente." } ] },
                { tabName: "Ciclovía segura", meta: "Beneficio 03", icon: `<i class="fa-solid fa-bicycle fa-5x"></i>`, slides: [ { title: "Ciclovía segura", stat: "Alternativa real", text: "Con la ciclovía confinada, moverse en bicicleta podría convertirse en una alternativa real y segura para trayectos cotidianos." } ] },
                { tabName: "Cruces seguros", meta: "Beneficio 04", icon: `<i class="fa-solid fa-universal-access fa-5x"></i>`, slides: [ { title: "Cruces más seguros", stat: "Accesibilidad", text: "Los cruces a nivel de calle mejorarán la accesibilidad y facilitarán el paso de peatones y ciclistas, especialmente para personas mayores, niñas, niños y personas con discapacidad." } ] },
                { tabName: "Más espacios", meta: "Beneficio 05", icon: `<i class="fa-solid fa-tree fa-5x"></i>`, slides: [ { title: "Más espacios públicos", stat: "Recuperación", text: "Al liberar espacio en superficie, se recuperarán espacios verdes que hoy son inaccesibles por el volumen de tráfico y que volverán a ser de los vecinos." } ] },
                { tabName: "Menos inundaciones", meta: "Beneficio 06", icon: `<i class="fa-solid fa-umbrella fa-5x"></i>`, slides: [ { title: "Menos inundaciones", stat: "Mayor capacity", text: "Separar agua pluvial y sanitaria mejorará la capacidad del sistema y reducirá las inundaciones que hoy paralizan el corredor." } ] }
              ],
              impactos: [
                { tabName: "Circulación", meta: "Impacto 01", icon: `<i class="fa-solid fa-road-barrier fa-5x"></i>`, slides: [ { title: "Cambios en la circulación", stat: "Ajustes viales", text: "Podrían presentarse ajustes temporales a la circulación, desvíos y cambios en rutas. Todos los ajustes se informarán en tiempo y forma y se darán alternativas viales." } ] },
                { tabName: "Accesos", meta: "Impacto 02", icon: `<i class="fa-solid fa-shop fa-5x"></i>`, slides: [ { title: "Afectaciones a comercios y viviendas", stat: "Accesos", text: "Algunos accesos, actividades comerciales o condiciones de operación podrían verse afectados temporalmente durante los frentes de obra." } ] },
                { tabName: "Ruido y polvo", meta: "Impacto 03", icon: `<i class="fa-solid fa-smog fa-5x"></i>`, slides: [ { title: "Ruido y polvo", stat: "Medidas de control", text: "Los trabajos podrían generar ruido y polvo en zonas cercanas a la construcción. Las medidas de control incluirán riego, mallas, mantenimiento de maquinaria y horarios definidos." } ] },
                { tabName: "Servicios", meta: "Impacto 04", icon: `<i class="fa-solid fa-faucet-drip fa-5x"></i>`, slides: [ { title: "Afectaciones a servicios", stat: "Cortes", text: "Las obras hidráulicas o reubicación de infraestructura podrían requerir cortes temporales de servicios, siempre con aviso previo." } ] },
                { tabName: "Transporte", meta: "Impacto 05", icon: `<i class="fa-solid fa-route fa-5x"></i>`, slides: [ { title: "Cambios en transporte público", stat: "Modificaciones", text: "Algunas paradas o rutas podrían modificarse temporalmente durante la obra." } ] }
              ]
            };

            function escapeHTML(value) { return String(value).replace(/[&<>'"]/g, character => ({ "&": "&amp;", "<": "&lt;", ">": "&gt;", "'": "&#39;", '"': "&quot;" })[character]); }

            document.querySelectorAll("[data-carousel]").forEach(section => {
              const key = section.dataset.carousel;
              const tabsData = sectionsData[key];
              const tabsContainer = section.querySelector(".topic-tabs");
              const card = section.querySelector(".feature-card");
              const arrows = section.querySelector(".carousel-arrows");
              const footer = section.querySelector(".carousel-footer");
              
              let currentTabIndex = 0, currentSlideIndex = 0, pointerStart = null;

              tabsContainer.innerHTML = tabsData.map((tabGroup, index) => `<button class="topic-tab shadow-sm" type="button" role="tab" aria-selected="${index === 0}" data-tab-index="${index}">${escapeHTML(tabGroup.tabName)}</button>`).join("");
              arrows.innerHTML = `<button class="arrow-button prev shadow-sm" type="button" aria-label="Anterior">←</button><button class="arrow-button next shadow-sm" type="button" aria-label="Siguiente">→</button>`;

              const render = (tabIdx, slideIdx) => {
                if (slideIdx >= tabsData[tabIdx].slides.length) { tabIdx = (tabIdx + 1) % tabsData.length; slideIdx = 0; } 
                else if (slideIdx < 0) { tabIdx = (tabIdx - 1 + tabsData.length) % tabsData.length; slideIdx = tabsData[tabIdx].slides.length - 1; }

                currentTabIndex = tabIdx; currentSlideIndex = slideIdx;
                const tabGroup = tabsData[currentTabIndex], slideItem = tabGroup.slides[currentSlideIndex];
                
                tabsContainer.querySelectorAll(".topic-tab").forEach((tab, index) => {
                  const selected = index === currentTabIndex; tab.setAttribute("aria-selected", String(selected)); tab.tabIndex = selected ? 0 : -1;
                });
                
                let totalSlidesCount = 0, globalSlideIndex = 0;
                tabsData.forEach((tg, tIdx) => { tg.slides.forEach((s, sIdx) => { if (tIdx === currentTabIndex && sIdx === currentSlideIndex) globalSlideIndex = totalSlidesCount; totalSlidesCount++; }); });

                footer.innerHTML = `<span class="carousel-count"></span><div class="carousel-dots" aria-label="Posición del carrusel">${Array.from({length: totalSlidesCount}).map((_, idx) => `<button class="carousel-dot ${idx === globalSlideIndex ? 'active' : ''}" type="button" data-global-index="${idx}"></button>`).join("")}</div>`;
                footer.querySelector(".carousel-count").textContent = `${String(globalSlideIndex + 1).padStart(2, "0")} / ${String(totalSlidesCount).padStart(2, "0")}`;

                let moreMarkup = "", detailsMarkup = "";
                if(slideItem.elements && slideItem.elements.length > 0) {
                     moreMarkup = `<button class="details-toggle" type="button" aria-expanded="false" aria-controls="proposal-details-${globalSlideIndex}"><span>Ver más detalles</span><span aria-hidden="true" class="ms-1">↓</span></button>
                                   <div class="proposal-details" id="proposal-details-${globalSlideIndex}" hidden>
                                     ${slideItem.problem ? `<section><h4>Problema que atiende</h4><p>${escapeHTML(slideItem.problem)}</p></section>` : ""}
                                     <section class="mt-3"><h4>Elementos</h4><ul>${slideItem.elements.map(element => `<li>${escapeHTML(element)}</li>`).join("")}</ul></section>
                                   </div>`;
                }
                if(slideItem.label && slideItem.detail) { detailsMarkup = `<dl><div><dt>${escapeHTML(slideItem.label)}</dt><dd>${escapeHTML(slideItem.detail)}</dd></div></dl>`; }

                let visualHTML = '', visualClasses = 'feature-visual', dataSlideAttr = `data-slide="${String(globalSlideIndex + 1).padStart(2, "0")}"`;

                if (key === 'propuesta') {
                    visualClasses += ' p-0'; dataSlideAttr = ''; 
                    const placeholderSVG = `data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><rect width="100%" height="100%" fill="%23f8f9fa"/><text x="50%" y="50%" fill="%23004b13" font-family="sans-serif" font-weight="bold" font-size="20" text-anchor="middle" dy=".3em">IMAGEN ${escapeHTML(tabGroup.meta)}</text></svg>`;
                    const finalImgSrc = (slideItem.image && slideItem.image !== "images/placeholder_propuesta.jpg") ? slideItem.image : placeholderSVG;
                    visualHTML = `<img src="${finalImgSrc}" alt="${escapeHTML(slideItem.title)}" style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;">`;

                } else if (key === 'diagnostico' || key === 'beneficios' || key === 'impactos' || key === 'escucha') {
                    // OPCIÓN 1 MODIFICADA: CUADRO NARANJA GIGANTE E ÍCONO ESCALADO
                    visualClasses += ' p-0 overflow-hidden'; dataSlideAttr = ''; 
                    visualHTML = `
                        <div class="w-100 h-100 position-relative" style="background-color: var(--verde-oscuro);">
                            <!-- Marca de agua gigante en el fondo -->
                            <div class="position-absolute text-white" style="right: 0; bottom: 0; opacity: 0.08; transform: scale(2.5) translate(-10%, -10%); pointer-events: none;">
                                ${tabGroup.icon}
                            </div>
                            <!-- Contenido frontal -->
                            <div class="position-relative z-1 d-flex flex-column justify-content-between h-100 p-4 p-md-5">
                                
                                <!-- Ícono destacado en CAJA NARANJA GRANDE (Ocupa 66% = 2/3 del ancho) -->
                                <div class="d-flex align-items-center justify-content-center shadow-lg" 
                                     style="width: 66%; aspect-ratio: 1 / 1; background-color: var(--naranja); border-radius: 20px;">
                                    <div class="text-white d-flex align-items-center justify-content-center w-100 h-100">
                                        <!-- Eliminamos el .replace y escalamos el SVG hacia arriba (1.8x) para que llene el recuadro -->
                                        <div style="transform: scale(1.8);">
                                            ${tabGroup.icon} 
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Insignia translúcida (Label) -->
                                <div class="mt-auto">
                                    <span class="badge px-3 py-2" style="background-color: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); color: white; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase; backdrop-filter: blur(4px);">
                                        ${escapeHTML(tabGroup.meta)}
                                    </span>
                                </div>
                            </div>
                        </div>
                    `;
                } else {
                    visualHTML = `<span class="stat-kicker">${escapeHTML(tabGroup.meta)}</span><strong class="stat-value">${escapeHTML(slideItem.stat)}</strong><span class="stat-caption">${escapeHTML(slideItem.title)}</span>`;
                }

                card.innerHTML = `<div class="${visualClasses}" ${dataSlideAttr}>${visualHTML}</div><div class="feature-copy"><h3>${escapeHTML(slideItem.title)}</h3><p>${escapeHTML(slideItem.text)}</p>${detailsMarkup}${moreMarkup}</div>`;
              };

              tabsContainer.addEventListener("click", event => { const button = event.target.closest("button[data-tab-index]"); if (button) render(Number(button.dataset.tabIndex), 0); });
              arrows.querySelector(".prev").addEventListener("click", () => render(currentTabIndex, currentSlideIndex - 1));
              arrows.querySelector(".next").addEventListener("click", () => render(currentTabIndex, currentSlideIndex + 1));
              
              card.addEventListener("click", event => {
                const button = event.target.closest(".details-toggle"); if (!button) return;
                const details = card.querySelector(".proposal-details"), open = button.getAttribute("aria-expanded") === "true";
                button.setAttribute("aria-expanded", String(!open));
                button.firstElementChild.textContent = open ? "Ver más detalles" : "Ocultar detalles"; button.lastElementChild.textContent = open ? "↓" : "↑"; details.hidden = open;
              });
              
              card.addEventListener("pointerdown", event => { pointerStart = event.clientX; });
              card.addEventListener("pointerup", event => { if (pointerStart === null) return; const distance = event.clientX - pointerStart; if (Math.abs(distance) > 55) render(currentTabIndex, currentSlideIndex + (distance < 0 ? 1 : -1)); pointerStart = null; });
              render(0, 0);
            });

            // --- LÓGICA DE AVISO FLOTANTE PERSISTENTE Y CONFIGURACIÓN ---
            const sysLayer = document.getElementById('sysNoticeLayer');
            const btnAccept = document.getElementById('btn-sys-accept');
            const btnSaveConfig = document.getElementById('btn-save-config');
            const toggleAnalytics = document.getElementById('toggleAnalytics');

            if(sysLayer) {
                const userPref = localStorage.getItem('user_site_pref');
                if(!userPref) { sysLayer.classList.remove('d-none'); }

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

            // LÓGICA DE INTERSECTION OBSERVER Y MENÚ SUAVE
            const navLinks = [...document.querySelectorAll(".main-nav-link[href^='#']")];
            const observedSections = navLinks.map(link => document.querySelector(link.getAttribute("href"))).filter(Boolean);
            
            const observer = new IntersectionObserver(entries => {
              entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                navLinks.forEach(link => {
                    if (link.getAttribute("href") === `#${entry.target.id}`) { link.classList.add("active"); } 
                    else { link.classList.remove("active"); }
                });
              });
            }, { rootMargin: "-20% 0px -60%", threshold: 0 });
            observedSections.forEach(section => observer.observe(section));

            navLinks.forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetSection = document.querySelector(targetId);
                    
                    if (targetSection) {
                        const navbarCollapse = document.getElementById('navContent');
                        if (navbarCollapse.classList.contains('show')) {
                            const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                            if (bsCollapse) bsCollapse.hide();
                        }
                        const headerOffset = document.querySelector('.navbar').offsetHeight;
                        const elementPosition = targetSection.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.scrollY - headerOffset;
                        
                        window.scrollTo({ top: offsetPosition, behavior: "smooth" });
                    }
                });
            });
        });
    </script>
</body>
</html>