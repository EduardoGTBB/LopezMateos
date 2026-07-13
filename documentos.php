<?php include 'head.php'; ?>
<header class="section-brand-dark py-5">
    <div class="container py-4 py-md-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <!-- <span class="badge text-warning border border-warning px-3 py-2 mb-3 rounded-pill fw-semibold text-uppercase tracking-wide"> -->
                <span class="badge badge-section-outline-orange px-3 py-2 mb-3 rounded-pill fw-semibold text-uppercase tracking-wide">
                    Documentos
                </span>
                <h1 class="display-4 fw-bolder mb-4">
                    Conoce los documentos del proceso
                </h1>
                <p class="lead text-light opacity-75 mb-5">
                    Aquí encontrarás materiales técnicos, resultados de participación, diagnósticos y documentos de referencia relacionados con el Plan Integral de López Mateos.
                </p>
            </div>
            <div class="col-lg-8"></div>
        </div>
    </div>
</header>

<section class="py-5 section-white">
    <div class="container py-4" style="max-width: 1000px;">

        <div class="mb-4 position-relative">
            <span class="position-absolute top-50 start-0 translate-middle-y ps-3 text-muted"><i class="bi bi-search"></i></span>
            <input type="text" id="searchDocInput" class="form-control rounded-pill py-3 ps-5 border-0 shadow-sm" placeholder="Busca un documento por nombre o palabra clave...">
        </div>
        
        <div class="d-flex flex-wrap gap-2 mb-4" id="filter-menu">
            <button class="btn btn-success text-white rounded-pill px-3 py-1 btn-sm fw-semibold shadow-sm filter-btn active" data-filter="all">Todos</button>
            <button class="btn btn-white border rounded-pill px-3 py-1 btn-sm fw-semibold text-muted shadow-sm filter-btn" data-filter="participacion">Participación ciudadana</button>
            <button class="btn btn-white border rounded-pill px-3 py-1 btn-sm fw-semibold text-muted shadow-sm filter-btn" data-filter="planeacion">Planeación metropolitana</button>
            <button class="btn btn-white border rounded-pill px-3 py-1 btn-sm fw-semibold text-muted shadow-sm filter-btn" data-filter="consulta">Consulta Popular</button>
        </div>

        <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-light p-3">
            <div class="d-flex flex-column gap-2" id="document-list">
                
                <div class="doc-item all p-3 bg-white rounded-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center g-3 border border-light transition-fade">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-file-earmark-pdf text-danger fs-2 me-3"></i>
                        <div>
                            <h6 class="fw-bold text-brand-dark mb-1">Plan Integral Distrito López Mateos — Documento maestro</h6>
                            <span class="text-muted small"><i class="bi bi-tag me-1"></i> General · PDF (12.4 MB)</span>
                        </div>
                    </div>
                    <button class="btn btn-success rounded-pill px-4 fw-semibold btn-sm mt-2 mt-md-0"><i class="bi bi-download me-2"></i>Descargar</button>
                </div>

                <div class="doc-item participacion p-3 bg-white rounded-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center g-3 border border-light transition-fade">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-file-earmark-pdf text-danger fs-2 me-3"></i>
                        <div>
                            <h6 class="fw-bold text-brand-dark mb-1">Resultados de Diálogos por la Movilidad Sustentable 2022 – 2023</h6>
                            <span class="text-muted small"><i class="bi bi-tag me-1"></i> Participación ciudadana · PDF</span>
                        </div>
                    </div>
                    <button class="btn btn-success rounded-pill px-4 fw-semibold btn-sm mt-2 mt-md-0"><i class="bi bi-download me-2"></i>Descargar</button>
                </div>

                <div class="doc-item participacion p-3 bg-white rounded-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center g-3 border border-light transition-fade">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-file-earmark-pdf text-danger fs-2 me-3"></i>
                        <div>
                            <h6 class="fw-bold text-brand-dark mb-1">Resultados Mesas de Diálogo 2025</h6>
                            <span class="text-muted small"><i class="bi bi-tag me-1"></i> Participación ciudadana · PDF</span>
                        </div>
                    </div>
                    <button class="btn btn-success rounded-pill px-4 fw-semibold btn-sm mt-2 mt-md-0"><i class="bi bi-download me-2"></i>Descargar</button>
                </div>

                <div class="doc-item participacion p-3 bg-white rounded-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center g-3 border border-light transition-fade">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-file-earmark-pdf text-danger fs-2 me-3"></i>
                        <div>
                            <h6 class="fw-bold text-brand-dark mb-1">Proceso y resultados de los Diálogos y la Consulta por la Movilidad Sustentable</h6>
                            <span class="text-muted small"><i class="bi bi-tag me-1"></i> Participación ciudadana · PDF</span>
                        </div>
                    </div>
                    <button class="btn btn-success rounded-pill px-4 fw-semibold btn-sm mt-2 mt-md-0"><i class="bi bi-download me-2"></i>Descargar</button>
                </div>

                <div class="doc-item participacion p-3 bg-white rounded-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center g-3 border border-light transition-fade">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-file-earmark-pdf text-danger fs-2 me-3"></i>
                        <div>
                            <h6 class="fw-bold text-brand-dark mb-1">Diagnóstico de problemáticas</h6>
                            <span class="text-muted small"><i class="bi bi-tag me-1"></i> Participación ciudadana · PDF</span>
                        </div>
                    </div>
                    <button class="btn btn-success rounded-pill px-4 fw-semibold btn-sm mt-2 mt-md-0"><i class="bi bi-download me-2"></i>Descargar</button>
                </div>

                <div class="doc-item planeacion p-3 bg-white rounded-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center g-3 border border-light transition-fade">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-file-earmark-pdf text-danger fs-2 me-3"></i>
                        <div>
                            <h6 class="fw-bold text-brand-dark mb-1">Plan Integral de Movilidad Urbana Sustentable (PIMUS)</h6>
                            <span class="text-muted small"><i class="bi bi-tag me-1"></i> Planeación metropolitana · PDF</span>
                        </div>
                    </div>
                    <button class="btn btn-success rounded-pill px-4 fw-semibold btn-sm mt-2 mt-md-0"><i class="bi bi-download me-2"></i>Descargar</button>
                </div>

                <div class="doc-item planeacion p-3 bg-white rounded-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center g-3 border border-light transition-fade">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-file-earmark-pdf text-danger fs-2 me-3"></i>
                        <div>
                            <h6 class="fw-bold text-brand-dark mb-1">Plan de Ordenamiento Territorial Metropolitano (POTMet)</h6>
                            <span class="text-muted small"><i class="bi bi-tag me-1"></i> Planeación metropolitana · PDF</span>
                        </div>
                    </div>
                    <button class="btn btn-success rounded-pill px-4 fw-semibold btn-sm mt-2 mt-md-0"><i class="bi bi-download me-2"></i>Descargar</button>
                </div>

                <div class="doc-item planeacion p-3 bg-white rounded-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center g-3 border border-light transition-fade">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-file-earmark-pdf text-danger fs-2 me-3"></i>
                        <div>
                            <h6 class="fw-bold text-brand-dark mb-1">Atlas Metropolitano de Riesgos</h6>
                            <span class="text-muted small"><i class="bi bi-tag me-1"></i> Planeación metropolitana · PDF</span>
                        </div>
                    </div>
                    <button class="btn btn-success rounded-pill px-4 fw-semibold btn-sm mt-2 mt-md-0"><i class="bi bi-download me-2"></i>Descargar</button>
                </div>

                <div class="doc-item consulta p-3 bg-white rounded-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center g-3 border border-light transition-fade">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-file-earmark-pdf text-danger fs-2 me-3"></i>
                        <div>
                            <h6 class="fw-bold text-brand-dark mb-1">Convocatoria oficial</h6>
                            <span class="text-muted small"><i class="bi bi-tag me-1"></i> Consulta Popular · PDF</span>
                        </div>
                    </div>
                    <button class="btn btn-success rounded-pill px-4 fw-semibold btn-sm mt-2 mt-md-0"><i class="bi bi-download me-2"></i>Descargar</button>
                </div>

                <div class="doc-item consulta p-3 bg-white rounded-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center g-3 border border-light transition-fade">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-file-earmark-pdf text-danger fs-2 me-3"></i>
                        <div>
                            <h6 class="fw-bold text-brand-dark mb-1">Pregunta oficial</h6>
                            <span class="text-muted small"><i class="bi bi-tag me-1"></i> Consulta Popular · PDF</span>
                        </div>
                    </div>
                    <button class="btn btn-success rounded-pill px-4 fw-semibold btn-sm mt-2 mt-md-0"><i class="bi bi-download me-2"></i>Descargar</button>
                </div>

                <div class="doc-item consulta p-3 bg-white rounded-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center g-3 border border-light transition-fade">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-file-earmark-pdf text-danger fs-2 me-3"></i>
                        <div>
                            <h6 class="fw-bold text-brand-dark mb-1">Sedes y mecanismos</h6>
                            <span class="text-muted small"><i class="bi bi-tag me-1"></i> Consulta Popular · PDF</span>
                        </div>
                    </div>
                    <button class="btn btn-success rounded-pill px-4 fw-semibold btn-sm mt-2 mt-md-0"><i class="bi bi-download me-2"></i>Descargar</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const docItems = document.querySelectorAll('.doc-item');
    const searchInput = document.getElementById('searchDocInput');
    
    let currentCategory = 'all';

    function filterDocuments() {
        const searchTerm = searchInput ? searchInput.value.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "") : '';

        docItems.forEach(item => {
            const textContent = item.textContent.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");
            const matchesCategory = (currentCategory === 'all' || item.classList.contains(currentCategory));
            const matchesSearch = textContent.includes(searchTerm);

            if (matchesCategory && matchesSearch) {
                item.style.setProperty('display', 'flex', 'important');
            } else {
                item.style.setProperty('display', 'none', 'important');
            }
        });
    }

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            filterButtons.forEach(btn => {
                btn.classList.remove('btn-success', 'text-white', 'active');
                btn.classList.add('btn-white', 'text-muted');
            });
            this.classList.remove('btn-white', 'text-muted');
            this.classList.add('btn-success', 'text-white', 'active');

            currentCategory = this.getAttribute('data-filter');
            filterDocuments();
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', filterDocuments);
    }
});
</script>