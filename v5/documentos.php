<?php
// CABECERAS DE SEGURIDAD OWASP
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
    <title>Documentos del Proceso - Plan Integral López Mateos</title>
    
    <!-- Fuentes y Bootstrap 5.3.2 con SRI -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Inter:wght@400;600;800;900&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style>
        :root {
            --naranja: #fd8107;
            --verde-claro: #94ee00;
            --verde-medio: #00943c;
            --verde-oscuro: #004b13;
            --gris-cliente: #ede9df;
        }

        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; color: #333333; }
        
        /* Navbar Superior */
        .navbar { background-color: var(--verde-oscuro); box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        .navbar-brand .logo-text { color: #ffffff; font-weight: 800; }
        .btn-regreso { border: 2px solid rgba(255,255,255,0.5); color: #fff; font-weight: 600; transition: all 0.2s; }
        .btn-regreso:hover { background-color: #fff; color: var(--verde-oscuro); }

        .titulo-seccion { font-weight: 800; letter-spacing: -0.5px; }
        .tarjeta-plana { background-color: #ffffff; border: 1px solid #dee2e6; transition: transform 0.2s ease, box-shadow 0.2s ease; border-radius: 12px;}
        .tarjeta-plana:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(0,0,0,0.05); }

        footer { min-height: 96px; padding: 1.5rem 5vw; display: flex; justify-content: space-between; align-items: center; color: #d0e2db; background: var(--verde-oscuro); font-size: .85rem; margin-top: 4rem; }
        footer a { color: #d0e2db; text-decoration: none; font-weight: 600; margin-left: 1rem; }
    </style>
</head>
<body>

    <!-- MENÚ SUPERIOR CON BOTÓN DE REGRESO -->
    <nav class="navbar sticky-top navbar-dark py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand d-flex flex-column lh-1 m-0" href="index.php">
                <span class="logo-text fs-5">LÓPEZ MATEOS,</span>
                <span class="fs-6 fw-bold" style="color: var(--verde-claro);">TE TOCA A TI</span>
            </a>
            <a href="index.php" class="btn btn-regreso btn-sm rounded-pill px-4 py-2">
                &larr; Volver al inicio
            </a>
        </div>
    </nav>

    <main class="container py-5 mt-md-2">
        <!-- Línea del tiempo -->
        <section class="mb-5 pb-5 border-bottom border-dark-subtle">
            <h1 class="display-6 titulo-seccion mb-3 text-dark">Una propuesta construida con evidencia y participación</h1>
            <p class="text-muted fs-5 mb-5">El Plan no se diseñó desde un escritorio. Se integraron tres fuentes: estudios técnicos, información territorial y la experiencia de quienes viven, trabajan, estudian o transitan por López Mateos.</p>
            
            <div class="row g-4">
                <div class="col-md-4"><div class="tarjeta-plana p-4 h-100 border-start border-4 shadow-sm" style="border-start-color: var(--naranja) !important;"><span class="fw-bold fs-4 text-dark d-block mb-1">2022</span><strong class="d-block text-dark fs-6 mb-2">Radiografía del área circundante</strong><span class="text-muted small">Información territorial · IIEG</span></div></div>
                <div class="col-md-4"><div class="tarjeta-plana p-4 h-100 border-start border-4 shadow-sm" style="border-start-color: var(--naranja) !important;"><span class="fw-bold fs-4 text-dark d-block mb-1">2022–23</span><strong class="d-block text-dark fs-6 mb-2">Diálogos por la Movilidad Sustentable</strong><span class="text-muted small">58,856 participantes</span></div></div>
                <div class="col-md-4"><div class="tarjeta-plana p-4 h-100 border-start border-4 shadow-sm" style="border-start-color: var(--naranja) !important;"><span class="fw-bold fs-4 text-dark d-block mb-1">2024</span><strong class="d-block text-dark fs-6 mb-2">PIMUS y POTMet</strong><span class="text-muted small">Estudios técnicos de planeación metropolitana</span></div></div>
                <div class="col-md-4"><div class="tarjeta-plana p-4 h-100 border-start border-4 shadow-sm" style="border-start-color: var(--naranja) !important;"><span class="fw-bold fs-4 text-dark d-block mb-1">2025</span><strong class="d-block text-dark fs-6 mb-2">Mesas de Diálogo</strong><span class="text-muted small">403 participantes presenciales y 5,683 digitales</span></div></div>
                <div class="col-md-4"><div class="tarjeta-plana p-4 h-100 border-start border-4 shadow-sm bg-light" style="border-start-color: var(--verde-medio) !important;"><span class="fw-bold fs-4 d-block mb-1" style="color: var(--verde-medio) !important;">Estamos aquí</span><strong class="d-block text-dark fs-6 mb-2">Socialización · López Mateos te toca a ti</strong><span class="text-muted small">Módulos, sitio web, reuniones y visitas</span></div></div>
                <div class="col-md-4"><div class="tarjeta-plana p-4 h-100 border-start border-4 shadow-sm" style="border-start-color: var(--verde-claro) !important;"><span class="fw-bold fs-4 text-dark d-block mb-1">Después</span><strong class="d-block text-dark fs-6 mb-2">Consulta Popular</strong><span class="text-muted small">Fecha por confirmar</span></div></div>
            </div>
            <div class="mt-4 p-4 bg-white border border-dark-subtle rounded-4 shadow-sm">
                <p class="mb-0 text-muted fst-italic">El proyecto evolucionó a partir de estos procesos: se incorporó el viaducto subterráneo en el tramo urbano, las ciclovías confinadas, la separación del drenaje sanitario y pluvial, nuevos cruces peatonales seguros y espacio público.</p>
            </div>
        </section>

        <!-- Documentos -->
        <section>
            <h2 class="fw-bold mb-4 text-dark fs-2">Consulta los documentos del proceso</h2>
            
            <div class="nav nav-pills mb-5 gap-2" id="filtros-documentos">
                <button class="btn btn-dark text-white rounded-pill px-4 nav-link active" data-filtro="todos">Todos</button>
                <button class="btn btn-outline-dark text-dark bg-white border-dark-subtle rounded-pill px-4 nav-link" data-filtro="participacion">Participación</button>
                <button class="btn btn-outline-dark text-dark bg-white border-dark-subtle rounded-pill px-4 nav-link" data-filtro="planeacion">Planeación</button>
                <button class="btn btn-outline-dark text-dark bg-white border-dark-subtle rounded-pill px-4 nav-link" data-filtro="consulta">Consulta</button>
            </div>

            <div class="row g-4" id="grilla-documentos">
                <div class="col-md-6 col-lg-4 doc-item" data-categoria="participacion">
                    <a href="#" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                        <div class="card tarjeta-plana h-100 p-4"><span class="badge bg-secondary rounded-1 w-25 mb-3 py-2">PDF</span><h5 class="fw-bold text-dark mb-0">Resultados Diálogos 2022–2023</h5></div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 doc-item" data-categoria="participacion">
                    <a href="#" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                        <div class="card tarjeta-plana h-100 p-4"><span class="badge bg-secondary rounded-1 w-25 mb-3 py-2">PDF</span><h5 class="fw-bold text-dark mb-0">Resultados Mesas de Diálogo 2025</h5></div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 doc-item" data-categoria="planeacion">
                    <a href="#" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                        <div class="card tarjeta-plana h-100 p-4"><span class="badge bg-secondary rounded-1 w-25 mb-3 py-2">PDF</span><h5 class="fw-bold text-dark mb-0">Diagnóstico de problemáticas</h5></div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 doc-item" data-categoria="planeacion">
                    <a href="#" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                        <div class="card tarjeta-plana h-100 p-4"><span class="badge bg-success rounded-1 w-25 mb-3 py-2">XLSX</span><h5 class="fw-bold text-dark mb-0">Matriz de trazabilidad</h5></div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 doc-item" data-categoria="planeacion">
                    <a href="#" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                        <div class="card tarjeta-plana h-100 p-4"><span class="badge bg-secondary rounded-1 w-25 mb-3 py-2">PDF</span><h5 class="fw-bold text-dark mb-0">PIMUS</h5></div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 doc-item" data-categoria="planeacion">
                    <a href="#" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                        <div class="card tarjeta-plana h-100 p-4"><span class="badge bg-secondary rounded-1 w-25 mb-3 py-2">PDF</span><h5 class="fw-bold text-dark mb-0">POTMet</h5></div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 doc-item" data-categoria="planeacion">
                    <a href="#" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                        <div class="card tarjeta-plana h-100 p-4"><span class="badge bg-secondary rounded-1 w-25 mb-3 py-2">PDF</span><h5 class="fw-bold text-dark mb-0">Atlas Metropolitano de Riesgos</h5></div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 doc-item" data-categoria="consulta">
                    <div class="card tarjeta-plana h-100 p-4 bg-light opacity-75 border-dashed"><span class="badge bg-dark rounded-1 w-50 mb-3 py-2">Próximamente</span><h5 class="fw-bold text-muted mb-0">Convocatoria y pregunta oficial</h5></div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="d-flex flex-column lh-1">
            <span class="fs-6 fw-bold text-white">PLAN INTEGRAL</span>
            <span class="fs-4 fw-bolder text-white">LÓPEZ MATEOS</span>
        </div>
        <div><a href="#">Aviso de privacidad</a><a href="#">Contacto</a></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const botonesFiltro = document.querySelectorAll('#filtros-documentos .nav-link');
        const documentos = document.querySelectorAll('.doc-item');
        botonesFiltro.forEach(boton => {
            boton.addEventListener('click', (e) => {
                e.preventDefault();
                botonesFiltro.forEach(btn => { btn.classList.remove('active', 'bg-dark', 'text-white'); btn.classList.add('bg-white', 'text-dark'); });
                const btnActivo = e.target;
                btnActivo.classList.remove('bg-white', 'text-dark'); btnActivo.classList.add('active', 'bg-dark', 'text-white');
                const filtro = btnActivo.getAttribute('data-filtro');
                documentos.forEach(doc => { doc.style.display = (filtro === 'todos' || doc.getAttribute('data-categoria') === filtro) ? 'block' : 'none'; });
            });
        });
    });
    </script>
</body>
</html>