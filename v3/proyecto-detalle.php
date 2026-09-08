<?php 
$es_nivel2 = true;
require_once 'header.php'; 
?>
<main class="container py-5 mt-md-4">
    <div class="text-center mb-5">
        <h1 class="display-6 titulo-seccion mb-3 text-dark">Los siete componentes, ficha por ficha</h1>
        <p class="text-muted">Toda la información de cada obra: dónde se ubica, qué problema atiende y qué contempla.</p>
    </div>

    <!-- 1. Viaducto subterráneo (IMAGEN IZQUIERDA) -->
    <div id="viaducto-subterraneo" class="card tarjeta-plana p-0 mb-5 border-dark-subtle overflow-hidden">
        <div class="row g-0">
            <div class="col-lg-5 bg-light border-end border-dark-subtle d-flex">
                <img src="../images/viaducto-subterraneo.jpg" alt="Render del Viaducto subterráneo" class="img-fluid w-100 object-fit-cover" style="min-height: 250px;" loading="lazy">
            </div>
            <div class="col-lg-7">
                <div class="card-body p-4 p-lg-5">
                    <h3 class="fw-bold" style="color: var(--color-primario);">Viaducto subterráneo</h3>
                    <span class="badge bg-dark rounded-0 mb-3">Tramo urbano · 6.28 km totales</span>
                    <p class="text-muted">Busca mover parte del tráfico por debajo del nivel de calle para separar los viajes locales de los de paso, liberando espacio en superficie para transporte público, peatones, ciclistas y entorno urbano.</p>
                    <hr class="border-dark-subtle my-4">
                    <div class="row g-4">
                        <div class="col-md-6"><strong class="d-block text-dark">Dónde:</strong><span class="text-muted small">4.53 km entre Periférico y Av. Tizoc, más 1.75 km en Mariano Otero, desde la glorieta hasta Av. de las Rosas.</span></div>
                        <div class="col-md-6"><strong class="d-block text-dark">Qué atiende:</strong><span class="text-muted small">La mezcla de tráfico local y viajes de paso en el tramo urbano.</span></div>
                        <div class="col-12"><strong class="d-block text-dark mb-2">Qué contempla:</strong><ul class="text-muted small ps-3 mb-0"><li>Tres secciones de viaducto subterráneo</li><li>Rampas de entrada y salida en puntos estratégicos</li><li>Conexión con Mariano Otero mediante incorporación subterránea</li></ul></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. Transporte público (IMAGEN DERECHA) -->
    <div id="transporte-publico" class="card tarjeta-plana p-0 mb-5 border-dark-subtle overflow-hidden">
        <div class="row g-0">
            <!-- El texto pasa a ser el primer elemento en escritorio (order-lg-1) pero el segundo en móvil (order-2) -->
            <div class="col-lg-7 order-2 order-lg-1">
                <div class="card-body p-4 p-lg-5">
                    <h3 class="fw-bold" style="color: var(--color-primario);">Transporte público</h3>
                    <span class="badge bg-dark rounded-0 mb-3">Ambos tramos · 4.3 km de carril exclusivo, 7 estaciones y 1 ruta exprés</span>
                    <p class="text-muted">Combina carril exclusivo y estaciones en el tramo urbano con una ruta exprés en el suburbano. Busca mejorar tiempos, regularidad y conexión con otros sistemas.</p>
                    <hr class="border-dark-subtle my-4">
                    <div class="row g-4">
                        <div class="col-md-12"><strong class="d-block text-dark">Qué atiende:</strong><span class="text-muted small">Los autobuses comparten espacio con los vehículos particulares y quedan atrapados en el tráfico.</span></div>
                        <div class="col-md-6"><strong class="d-block text-dark mb-2">En el tramo urbano:</strong><ul class="text-muted small ps-3 mb-0"><li>4.3 km de carril confinado</li><li>Siete estaciones en puntos de conexión</li><li>Conexión con Mi Macro Periférico</li><li>Conexión con Línea 1 y futura Línea 5</li><li>Integración con rutas troncales</li></ul></div>
                        <div class="col-md-6"><strong class="d-block text-dark mb-2">En el tramo suburbano:</strong><ul class="text-muted small ps-3 mb-0"><li>Ruta exprés sobre el viaducto elevado</li><li>Sin estaciones sobre la estructura</li><li>Pensada para recorridos largos desde el sur</li></ul></div>
                    </div>
                </div>
            </div>
            <!-- La imagen pasa a ser el segundo elemento en escritorio (order-lg-2) pero el primero en móvil (order-1) -->
            <!-- Nota: Cambiamos border-end por border-start para mantener la separación correcta -->
            <div class="col-lg-5 bg-light border-start border-dark-subtle d-flex order-1 order-lg-2">
                <img src="../images/transporte-publico.jpg" alt="Render del Transporte público" class="img-fluid w-100 object-fit-cover" style="min-height: 250px;" loading="lazy">
            </div>
        </div>
    </div>

    <!-- 3. Ciclovía (IMAGEN IZQUIERDA) -->
    <div id="ciclovia" class="card tarjeta-plana p-0 mb-5 border-dark-subtle overflow-hidden">
        <div class="row g-0">
            <div class="col-lg-5 bg-light border-end border-dark-subtle d-flex">
                <img src="../images/ciclovia.jpg" alt="Render de la Ciclovía" class="img-fluid w-100 object-fit-cover" style="min-height: 250px;" loading="lazy">
            </div>
            <div class="col-lg-7">
                <div class="card-body p-4 p-lg-5">
                    <h3 class="fw-bold" style="color: var(--color-primario);">Ciclovía</h3>
                    <span class="badge bg-dark rounded-0 mb-3">Tramo urbano · 6.01 km de infraestructura ciclista</span>
                    <hr class="border-dark-subtle my-4">
                    <div class="row g-4">
                        <div class="col-md-6"><strong class="d-block text-dark">Dónde:</strong><span class="text-muted small">4.26 km en López Mateos y 1.75 km en Mariano Otero.</span></div>
                        <div class="col-md-6"><strong class="d-block text-dark">Qué atiende:</strong><span class="text-muted small">La falta de infraestructura ciclista segura.</span></div>
                        <div class="col-12"><strong class="d-block text-dark mb-2">Qué contempla:</strong><ul class="text-muted small ps-3 mb-0"><li>Carril confinado y separado del tráfico vehicular</li><li>Conexión con ciclovías existentes</li><li>Integración con otros componentes del tramo urbano</li></ul></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. Cruces seguros (IMAGEN DERECHA) -->
    <div id="cruces-seguros" class="card tarjeta-plana p-0 mb-5 border-dark-subtle overflow-hidden">
        <div class="row g-0">
            <div class="col-lg-7 order-2 order-lg-1">
                <div class="card-body p-4 p-lg-5">
                    <h3 class="fw-bold" style="color: var(--color-primario);">Cruces seguros</h3>
                    <span class="badge bg-dark rounded-0 mb-3">Tramo urbano · 9 cruces mejorados y 4 nuevos</span>
                    <hr class="border-dark-subtle my-4">
                    <div class="row g-4">
                        <div class="col-12"><strong class="d-block text-dark mb-2">Qué contempla:</strong><ul class="text-muted small ps-3 mb-0"><li>Nuevos cruces: Las Fuentes, Galileo, Orión y Conchita</li><li>Mejoras en nueve cruces: Lázaro Cárdenas, De las Rosas, 12 de Diciembre, Cubilete, Plaza del Sol, Moctezuma, Mariano Otero, Patria y Copérnico</li><li>Retiro de siete puentes peatonales</li><li>Criterios de accesibilidad universal</li></ul></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 bg-light border-start border-dark-subtle d-flex order-1 order-lg-2">
                <img src="../images/cruces-seguros.jpg" alt="Render de Cruces seguros" class="img-fluid w-100 object-fit-cover" style="min-height: 250px;" loading="lazy">
            </div>
        </div>
    </div>

    <!-- 5. Espacios públicos (IMAGEN IZQUIERDA) -->
    <div id="espacios-publicos" class="card tarjeta-plana p-0 mb-5 border-dark-subtle overflow-hidden">
        <div class="row g-0">
            <div class="col-lg-5 bg-light border-end border-dark-subtle d-flex">
                <img src="../images/espacios-publicos.jpg" alt="Render de Espacios públicos" class="img-fluid w-100 object-fit-cover" style="min-height: 250px;" loading="lazy">
            </div>
            <div class="col-lg-7">
                <div class="card-body p-4 p-lg-5">
                    <h3 class="fw-bold" style="color: var(--color-primario);">Espacios públicos y áreas verdes</h3>
                    <span class="badge bg-dark rounded-0 mb-3">Tramo urbano · 780 m en López Mateos y 1.6 km en Mariano Otero</span>
                    <hr class="border-dark-subtle my-4">
                    <div class="row g-4">
                        <div class="col-md-12"><strong class="d-block text-dark">Qué atiende:</strong><span class="text-muted small">La falta de espacios públicos articulados y de calidad.</span></div>
                        <div class="col-12"><strong class="d-block text-dark mb-2">Qué contempla:</strong><ul class="text-muted small ps-3 mb-0"><li>Parque lineal en Jardines del Sol</li><li>Parque lineal en Mariano Otero</li><li>Mobiliario urbano, iluminación y arbolado</li><li>Conexión con senderos existentes</li></ul></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 6. Drenaje (IMAGEN DERECHA) -->
    <div id="drenaje" class="card tarjeta-plana p-0 mb-5 border-dark-subtle overflow-hidden">
        <div class="row g-0">
            <div class="col-lg-7 order-2 order-lg-1">
                <div class="card-body p-4 p-lg-5">
                    <h3 class="fw-bold" style="color: var(--color-primario);">Drenaje</h3>
                    <span class="badge bg-dark rounded-0 mb-3">Tramo urbano · 4.6 km de nuevos colectores</span>
                    <hr class="border-dark-subtle my-4">
                    <div class="row g-4">
                        <div class="col-md-6"><strong class="d-block text-dark">Dónde:</strong><span class="text-muted small">Entre Galileo Galilei y Av. Cubilete.</span></div>
                        <div class="col-md-6"><strong class="d-block text-dark">Qué atiende:</strong><span class="text-muted small">Inundaciones ligadas a un drenaje de más de 50 años.</span></div>
                        <div class="col-12"><strong class="d-block text-dark mb-2">Qué contempla:</strong><ul class="text-muted small ps-3 mb-0"><li>Un colector sanitario y uno pluvial</li><li>20% más capacidad que el colector actual</li></ul></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 bg-light border-start border-dark-subtle d-flex order-1 order-lg-2">
                <img src="../images/drenaje.jpg" alt="Esquema del Drenaje" class="img-fluid w-100 object-fit-cover" style="min-height: 250px;" loading="lazy">
            </div>
        </div>
    </div>

    <!-- 7. Viaducto elevado (IMAGEN IZQUIERDA) -->
    <div id="viaducto-elevado" class="card tarjeta-plana p-0 mb-5 border-dark-subtle overflow-hidden">
        <div class="row g-0">
            <div class="col-lg-5 bg-light border-end border-dark-subtle d-flex">
                <img src="../images/viaducto-elevado.jpg" alt="Render del Viaducto elevado" class="img-fluid w-100 object-fit-cover" style="min-height: 250px;" loading="lazy">
            </div>
            <div class="col-lg-7">
                <div class="card-body p-4 p-lg-5">
                    <h3 class="fw-bold" style="color: var(--color-primario);">Viaducto elevado</h3>
                    <span class="badge bg-dark rounded-0 mb-3">Tramo suburbano · 11.84 km</span>
                    <p class="text-muted">Busca separar los viajes largos, los vehículos de paso y el transporte de carga del tránsito local, manteniendo a nivel de calle los accesos y recorridos locales.</p>
                    <hr class="border-dark-subtle my-4">
                    <div class="row g-4">
                        <div class="col-md-6"><strong class="d-block text-dark">Dónde:</strong><span class="text-muted small">Entre Camino Real a Colima y Periférico.</span></div>
                        <div class="col-md-6"><strong class="d-block text-dark">Qué atiende:</strong><span class="text-muted small">La saturación por falta de alternativas norte-sur en el tramo suburbano.</span></div>
                        <div class="col-12"><strong class="d-block text-dark mb-2">Qué contempla:</strong><ul class="text-muted small ps-3 mb-0"><li>Separación del tránsito de paso y el flujo suburbano</li><li>Circulación de vehículos particulares y transporte de carga</li><li>Circulación de la ruta exprés de transporte público</li><li>Mantenimiento de accesos y recorridos locales a nivel de calle</li></ul></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php 
require_once 'footer.php'; 
?>