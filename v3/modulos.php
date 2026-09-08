<?php 
$es_nivel2 = true;
require_once 'header.php'; 
?>

<main class="container py-5 mt-md-4">
    <div class="mb-5">
        <h1 class="display-6 titulo-seccion mb-3 text-dark">Infórmate antes de decidir</h1>
        <p class="text-muted">La socialización es el periodo previo a la Consulta Popular. En esta etapa puedes conocer el Plan Integral de López Mateos, revisar la información disponible y resolver dudas.</p>
    </div>

    <!-- Etapas (Resumidas para Nivel 2) -->
    <div class="row g-0 mb-5">
        <div class="col-md-6 p-4 border border-dark border-end-0" style="background-color: var(--color-primario); color: white;">
            <h5 class="fw-bold mb-1">1. Socialización — Estás aquí</h5>
            <p class="small mb-0 opacity-75">Estás aquí. Tu acción en esta etapa es el formulario de opinión.</p>
        </div>
        <div class="col-md-6 p-4 border border-dark" style="background-color: var(--color-oscuro); color: white;">
            <h5 class="fw-bold mb-1" style="color: var(--verde-pdf2);">2. Consulta Popular</h5>
            <p class="small mb-0 opacity-75">Fecha por confirmar. Tu acción será votar.</p>
        </div>
    </div>

    <h3 class="fw-bold mb-4 text-dark">Elige cómo informarte</h3>
    <div class="row g-4 mb-5">
        <div class="col-md-3"><div class="tarjeta-plana p-4 h-100"><h6 class="fw-bold text-dark">Módulos informativos</h6><p class="small text-muted mb-0">30 módulos a lo largo del corredor con información general, materiales y atención de dudas.</p></div></div>
        <div class="col-md-3"><div class="tarjeta-plana p-4 h-100"><h6 class="fw-bold text-dark">Página web</h6><p class="small text-muted mb-0">Encontrarás componentes y mapa del Proyecto, preguntas frecuentes y documentos.</p></div></div>
        <div class="col-md-3"><div class="tarjeta-plana p-4 h-100"><h6 class="fw-bold text-dark">Reuniones</h6><p class="small text-muted mb-0">Espacios de diálogo con vecinos, comercios, organizaciones y grupos de interés.</p></div></div>
        <div class="col-md-3"><div class="tarjeta-plana p-4 h-100"><h6 class="fw-bold text-dark">Visitas a viviendas y comercios</h6><p class="small text-muted mb-0">El equipo en campo comparte información y atiende dudas puntuales.</p></div></div>
    </div>

    <!-- MAPA DE MÓDULOS -->
    <div class="border border-dark bg-light" style="height: 600px;">
        <iframe 
            src="../ubicacion-modulos.html" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            title="Mapa de Módulos Informativos">
                
        </iframe>
    </div>
</main>

<?php require_once 'footer.php'; ?>