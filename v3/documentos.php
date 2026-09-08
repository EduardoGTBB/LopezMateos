<?php 
$es_nivel2 = true;
require_once 'header.php'; 
?>

<main class="container py-5 mt-md-4">
    <!-- Línea del tiempo (Integrada según el documento) -->
    <section class="mb-5 pb-5 border-bottom border-dark-subtle">
        <h1 class="display-6 titulo-seccion mb-3 text-dark">Una propuesta construida con evidencia y participación</h1>
        <p class="text-muted mb-5">El Plan no se diseñó desde un escritorio. Se integraron tres fuentes: estudios técnicos, información territorial y la experiencia de quienes viven, trabajan, estudian o transitan por López Mateos.</p>
        
        <div class="row g-3">
            <div class="col-md-4"><div class="tarjeta-plana p-3 h-100 border-start border-4" style="border-start-color: var(--naranja) !important;"><span class="fw-bold fs-5 text-dark d-block">2022</span><strong class="d-block text-dark small">Radiografía del área circundante</strong><span class="text-muted small">Información territorial · IIEG</span></div></div>
            <div class="col-md-4"><div class="tarjeta-plana p-3 h-100 border-start border-4" style="border-start-color: var(--naranja) !important;"><span class="fw-bold fs-5 text-dark d-block">2022–23</span><strong class="d-block text-dark small">Diálogos por la Movilidad Sustentable</strong><span class="text-muted small">58,856 participantes</span></div></div>
            <div class="col-md-4"><div class="tarjeta-plana p-3 h-100 border-start border-4" style="border-start-color: var(--naranja) !important;"><span class="fw-bold fs-5 text-dark d-block">2024</span><strong class="d-block text-dark small">PIMUS y POTMet</strong><span class="text-muted small">Estudios técnicos de planeación metropolitana</span></div></div>
            <div class="col-md-4"><div class="tarjeta-plana p-3 h-100 border-start border-4" style="border-start-color: var(--naranja) !important;"><span class="fw-bold fs-5 text-dark d-block">2025</span><strong class="d-block text-dark small">Mesas de Diálogo</strong><span class="text-muted small">403 participantes presenciales y 5,683 digitales</span></div></div>
            <div class="col-md-4"><div class="tarjeta-plana p-3 h-100 border-start border-4" style="border-start-color: var(--verde-medio) !important;"><span class="fw-bold fs-5 text-dark d-block" style="color: var(--verde-medio) !important;">Estamos aquí</span><strong class="d-block text-dark small">Socialización · López Mateos te toca a ti</strong><span class="text-muted small">Módulos, sitio web, reuniones y visitas</span></div></div>
            <div class="col-md-4"><div class="tarjeta-plana p-3 h-100 border-start border-4" style="border-start-color: var(--verde-claro) !important;"><span class="fw-bold fs-5 text-dark d-block">Después</span><strong class="d-block text-dark small">Consulta Popular</strong><span class="text-muted small">Fecha por confirmar</span></div></div>
        </div>
        <p class="mt-4 text-muted small fst-italic">El proyecto evolucionó a partir de estos procesos: se incorporó el viaducto subterráneo en el tramo urbano, las ciclovías confinadas, la separación del drenaje sanitario y pluvial, nuevos cruces peatonales seguros y espacio público.</p>
    </section>

    <!-- Documentos -->
    <section>
        <h2 class="fw-bold mb-4 text-dark">Consulta los documentos del proceso</h2>
        
        <ul class="nav nav-pills mb-4 gap-2" id="filtros-documentos">
            <li class="nav-item"><a class="nav-link active bg-dark text-white border border-dark rounded-0" data-filtro="todos" style="cursor: pointer;">Todos</a></li>
            <li class="nav-item"><a class="nav-link text-dark bg-light border border-dark-subtle rounded-0" data-filtro="participacion" style="cursor: pointer;">Participación</a></li>
            <li class="nav-item"><a class="nav-link text-dark bg-light border border-dark-subtle rounded-0" data-filtro="planeacion" style="cursor: pointer;">Planeación</a></li>
            <li class="nav-item"><a class="nav-link text-dark bg-light border border-dark-subtle rounded-0" data-filtro="consulta" style="cursor: pointer;">Consulta</a></li>
        </ul>

        <div class="row g-3" id="grilla-documentos">
            <div class="col-md-6 col-lg-4 doc-item" data-categoria="participacion">
                <a href="#" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                    <div class="card tarjeta-plana h-100 p-3"><span class="badge bg-secondary rounded-0 w-25 mb-2">PDF</span><h6 class="fw-bold text-dark mb-0">Resultados Diálogos 2022–2023</h6></div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 doc-item" data-categoria="participacion">
                <a href="#" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                    <div class="card tarjeta-plana h-100 p-3"><span class="badge bg-secondary rounded-0 w-25 mb-2">PDF</span><h6 class="fw-bold text-dark mb-0">Resultados Mesas de Diálogo 2025</h6></div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 doc-item" data-categoria="planeacion">
                <a href="#" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                    <div class="card tarjeta-plana h-100 p-3"><span class="badge bg-secondary rounded-0 w-25 mb-2">PDF</span><h6 class="fw-bold text-dark mb-0">Diagnóstico de problemáticas</h6></div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 doc-item" data-categoria="planeacion">
                <a href="#" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                    <div class="card tarjeta-plana h-100 p-3"><span class="badge bg-success rounded-0 w-25 mb-2">XLSX</span><h6 class="fw-bold text-dark mb-0">Matriz de trazabilidad</h6></div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 doc-item" data-categoria="planeacion">
                <a href="#" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                    <div class="card tarjeta-plana h-100 p-3"><span class="badge bg-secondary rounded-0 w-25 mb-2">PDF</span><h6 class="fw-bold text-dark mb-0">PIMUS</h6></div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 doc-item" data-categoria="planeacion">
                <a href="#" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                    <div class="card tarjeta-plana h-100 p-3"><span class="badge bg-secondary rounded-0 w-25 mb-2">PDF</span><h6 class="fw-bold text-dark mb-0">POTMet</h6></div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 doc-item" data-categoria="planeacion">
                <a href="#" class="text-decoration-none" target="_blank" rel="noopener noreferrer">
                    <div class="card tarjeta-plana h-100 p-3"><span class="badge bg-secondary rounded-0 w-25 mb-2">PDF</span><h6 class="fw-bold text-dark mb-0">Atlas Metropolitano de Riesgos</h6></div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 doc-item" data-categoria="consulta">
                <div class="card tarjeta-plana h-100 p-3 opacity-75"><span class="badge bg-dark rounded-0 w-50 mb-2">Por publicar</span><h6 class="fw-bold text-dark mb-0">Convocatoria y pregunta oficial</h6></div>
            </div>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const botonesFiltro = document.querySelectorAll('#filtros-documentos .nav-link');
    const documentos = document.querySelectorAll('.doc-item');
    botonesFiltro.forEach(boton => {
        boton.addEventListener('click', (e) => {
            e.preventDefault();
            botonesFiltro.forEach(btn => { btn.classList.remove('active', 'bg-dark', 'text-white', 'border-dark'); btn.classList.add('bg-light', 'text-dark', 'border-dark-subtle'); });
            const btnActivo = e.target;
            btnActivo.classList.remove('bg-light', 'text-dark', 'border-dark-subtle'); btnActivo.classList.add('active', 'bg-dark', 'text-white', 'border-dark');
            const filtro = btnActivo.getAttribute('data-filtro');
            documentos.forEach(doc => { doc.style.display = (filtro === 'todos' || doc.getAttribute('data-categoria') === filtro) ? 'block' : 'none'; });
        });
    });
});
</script>

<?php 
require_once 'footer.php'; 
?>