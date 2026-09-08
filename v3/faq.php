<?php 
$es_nivel2 = true;
require_once 'header.php'; 
?>

<main class="container py-5 mt-md-4">

    <style>
        /* Forzar a los párrafos y listas del FAQ a heredar el tamaño pequeño y no usar el global */
        #accordionNivel2 .accordion-body p,
        #accordionNivel2 .accordion-body ul {
            font-size: inherit; /* Hereda el tamaño de la clase 'small' del contenedor */
            line-height: 1.5;   /* Interlineado cómodo para lectura */
            color: inherit;     /* Asegura que tome el gris text-muted */
        }
        
        #accordionNivel2 .accordion-body p:last-child,
        #accordionNivel2 .accordion-body ul:last-child {
            margin-bottom: 0;   /* Elimina márgenes extra al final de la respuesta */
        }
    </style>



    <div class="mb-5">
        <h1 class="display-6 titulo-seccion mb-3 text-dark">Respuestas claras para tomar una opinión informada</h1>
        <p class="text-muted">Consulta respuestas claras sobre el proyecto, sus componentes y la Consulta Popular.</p>
    </div>

    <!-- Buscador y Filtros -->
    <div class="bg-light p-3 border border-dark-subtle mb-4 d-flex flex-column flex-md-row gap-3">
        <input type="text" id="buscadorFaq" class="form-control rounded-0 border-dark-subtle w-100 w-md-50" placeholder="Buscar preguntas...">
        
        <div class="nav nav-pills gap-2 flex-nowrap overflow-x-auto w-100" id="filtrosFaq">
            <!-- Botón activo inicial con text-white explícito -->
            <button class="btn btn-sm btn-dark text-white rounded-0 filtro-btn active" data-filtro="todas">Todas</button>
            <!-- Botones inactivos con text-dark explícito -->
            <button class="btn btn-sm btn-outline-dark text-dark bg-white border-dark-subtle rounded-0 filtro-btn text-nowrap" data-filtro="plan">Plan Integral</button>
            <button class="btn btn-sm btn-outline-dark text-dark bg-white border-dark-subtle rounded-0 filtro-btn text-nowrap" data-filtro="antecedentes">Antecedentes</button>
            <button class="btn btn-sm btn-outline-dark text-dark bg-white border-dark-subtle rounded-0 filtro-btn text-nowrap" data-filtro="consulta">Consulta Popular</button>
        </div>
    </div>

    <!-- Acordeón de Preguntas -->
    <div class="accordion" id="accordionNivel2">
        
        <!-- ==========================================
             CATEGORÍA: PLAN INTEGRAL LÓPEZ MATEOS 
             ========================================== -->
             
        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="plan">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1">¿Qué es el Plan Integral López Mateos?</button></h2>
            <div id="faq-1" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Es una estrategia integral para mejorar la movilidad, la conectividad y la calidad de vida en uno de los principales corredores metropolitanos del Área Metropolitana de Guadalajara, mediante acciones que combinan infraestructura, transporte público, movilidad activa, conectividad local, obras hidráulicas y gestión del tránsito.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="plan">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2">¿Por qué es necesario este proyecto?</button></h2>
            <div id="faq-2" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Actualmente López Mateos presenta altos niveles de congestionamiento, bajas velocidades de circulación, afectaciones al transporte público, problemas de conectividad local, conflictos con el transporte de carga, inundaciones recurrentes y retos de seguridad vial, derivados del crecimiento urbano y del aumento en la demanda de viajes.</div>
            </div>
        </div>
        
        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="plan">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-3">¿El Plan Integral López Mateos consiste únicamente en un viaducto?</button></h2>
            <div id="faq-3" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">No. El proyecto contempla una intervención integral que combina infraestructura vial, transporte público, ciclovías, espacios públicos, drenaje, cruces seguros, gestión del tránsito y mejoras para peatones y ciclistas.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="plan">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-4">¿Por qué el proyecto combina distintas obras y no una sola solución?</button></h2>
            <div id="faq-4" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Porque los estudios técnicos y los procesos de participación ciudadana han mostrado que la problemática de López Mateos tiene múltiples causas, por lo que requiere una estrategia integral que atienda movilidad, infraestructura, transporte público, seguridad vial y desarrollo urbano de manera coordinada.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="plan">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-5">¿En qué etapa se encuentra actualmente el proyecto?</button></h2>
            <div id="faq-5" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Actualmente el Plan Integral López Mateos se encuentra en etapa de socialización y preparación de la Consulta Popular. Durante este periodo la ciudadanía puede conocer la propuesta, resolver dudas e informarse antes de expresar su opinión en la Consulta Popular organizada por el Instituto Electoral y de Participación Ciudadana de Jalisco.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="plan">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-6">¿Qué municipios forman parte del proyecto?</button></h2>
            <div id="faq-6" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">El corredor conecta principalmente a Guadalajara, Zapopan, Tlajomulco de Zúñiga y San Pedro Tlaquepaque, beneficiando a miles de personas que diariamente utilizan esta vialidad para trasladarse dentro del Área Metropolitana.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="plan">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-7">¿El proyecto que hoy se presenta es el mismo que se planteó originalmente?</button></h2>
            <div id="faq-7" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">No. El proyecto ha evolucionado a partir de los estudios técnicos y de los procesos de participación ciudadana realizados desde 2022. Entre los principales cambios se encuentran la reducción del viaducto subterráneo en el tramo urbano, la incorporación de ciclovías confinadas, la separación del drenaje sanitario y pluvial, y la creación de nuevos cruces seguros y parques lineales.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="plan">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-8">¿Qué beneficios busca generar el Plan Integral de López Mateos?</button></h2>
            <div id="faq-8" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">El proyecto busca reducir tiempos de traslado, mejorar la movilidad del transporte público, incrementar la conectividad local, fortalecer la seguridad vial, mejorar la infraestructura para peatones y ciclistas, disminuir afectaciones por inundaciones y elevar la calidad de vida de quienes utilizan el corredor.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="plan">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-9">¿Se contemplan acciones para peatones y ciclistas?</button></h2>
            <div id="faq-9" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Sí. Dentro de la estrategia integral se consideran intervenciones para mejorar la movilidad peatonal, la infraestructura ciclista, los cruces seguros y la accesibilidad universal.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="plan">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-10">¿Se contemplan acciones para el transporte público?</button></h2>
            <div id="faq-10" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Sí. El proyecto considera acciones orientadas a fortalecer el transporte público y mejorar su eficiencia e integración con la movilidad metropolitana.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="plan">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-11">¿Qué pasará con los puentes peatonales existentes?</button></h2>
            <div id="faq-11" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">La propuesta contempla sustituir algunos puentes peatonales por cruces seguros a nivel de calle, aprovechando la disminución del tráfico superficial derivada del viaducto subterráneo y priorizando la accesibilidad universal.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="plan">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-12">¿Se contemplan acciones para reducir las inundaciones?</button></h2>
            <div id="faq-12" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Sí. El Plan Integral incorpora obras hidráulicas y la separación del drenaje sanitario y pluvial con el objetivo de mejorar el funcionamiento del sistema y disminuir las afectaciones por lluvias en el corredor.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="plan">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-13">¿Por qué se incluye infraestructura para bicicletas?</button></h2>
            <div id="faq-13" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Actualmente el corredor carece de infraestructura ciclista segura. El proyecto incorpora más de 6 kilómetros de ciclovías confinadas conectadas con la red existente para ofrecer una alternativa adicional de movilidad cotidiana.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="plan">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-14">¿Cómo mejorará la seguridad vial?</button></h2>
            <div id="faq-14" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">El proyecto contempla nuevos cruces seguros, mejor iluminación, infraestructura peatonal accesible, reorganización del tránsito y espacios públicos que buscan reducir los riesgos para peatones, ciclistas y automovilistas.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="plan">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-15">¿Las obras afectarán la circulación durante su construcción?</button></h2>
            <div id="faq-15" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Como en cualquier proyecto de infraestructura de gran escala, las obras requerirán una planeación por etapas para minimizar las afectaciones a la movilidad y mantener la operación del corredor durante su ejecución.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="plan">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-16">¿Dónde puedo consultar más información?</button></h2>
            <div id="faq-16" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">En este portal podrás consultar los antecedentes del proyecto, documentos técnicos, resultados de los procesos participativos y demás información relacionada con el Plan Integral de López Mateos y la Consulta Popular.</div>
            </div>
        </div>

        <!-- ==========================================
             CATEGORÍA: ANTECEDENTES DEL PLAN
             ========================================== -->

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="antecedentes">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-17">¿Este proyecto surgió recientemente?</button></h2>
            <div id="faq-17" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">No. El Plan Integral de López Mateos es resultado de un proceso de análisis y participación ciudadana que se ha desarrollado durante varios años.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="antecedentes">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-18">¿Qué fueron los Diálogos por la Movilidad Sustentable 2022-2023?</button></h2>
            <div id="faq-18" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Fueron un ejercicio de participación ciudadana mediante el cual se recopilaron propuestas, opiniones y experiencias sobre la movilidad en el corredor, registrando <strong>58,856 participaciones ciudadanas</strong> a través de distintos mecanismos como encuestas, mesas de diálogo, activaciones ciudadanas y herramientas digitales.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="antecedentes">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-19">¿Qué fueron las Mesas de Trabajo 2025?</button></h2>
            <div id="faq-19" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Fueron espacios de diálogo técnico y ciudadano en los que participaron autoridades, especialistas, academia, organizaciones civiles, sector empresarial y habitantes del corredor para analizar las principales problemáticas y construir propuestas de solución. El proceso registró <strong>403 participantes presenciales y 5,683 participaciones digitales.</strong></div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="antecedentes">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-20">¿Qué aportaron estos procesos al proyecto?</button></h2>
            <div id="faq-20" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Permitieron construir un diagnóstico compartido sobre la problemática del corredor, identificar prioridades ciudadanas y generar propuestas que sirvieron como insumo para el desarrollo del Plan Integral de López Mateos.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="antecedentes">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-21">¿Cuál fue la principal conclusión de los ejercicios de participación?</button></h2>
            <div id="faq-21" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Que la problemática de López Mateos es estructural y requiere una estrategia integral que combine transporte público, infraestructura, movilidad activa, conectividad local, logística de carga, ordenamiento territorial y gestión del tránsito.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="antecedentes">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-22">¿Qué soluciones fueron las más mencionadas por la ciudadanía?</button></h2>
            <div id="faq-22" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Entre las principales propuestas destacan el fortalecimiento del transporte público, la regulación del transporte de carga, una mejor planeación urbana, la gestión inteligente del tránsito, la mejora de la conectividad local y el impulso a sistemas de transporte masivo.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="antecedentes">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-23">¿Quién analizó técnicamente los resultados de los procesos participativos?</button></h2>
            <div id="faq-23" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Los resultados de los procesos participativos fueron sistematizados y analizados técnicamente por el Instituto Metropolitano de Planeación (IMEPLAN), como parte de la construcción del diagnóstico del corredor.</div>
            </div>
        </div>

        <!-- ==========================================
             CATEGORÍA: CONSULTA POPULAR
             ========================================== -->

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="consulta">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-24">¿Qué es la Consulta Popular?</button></h2>
            <div id="faq-24" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Es un mecanismo de participación ciudadana mediante el cual la población puede expresar su opinión sobre un tema de interés público, contribuyendo al fortalecimiento de las decisiones públicas.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="consulta">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-25">¿Por qué se realiza una Consulta Popular sobre López Mateos?</button></h2>
            <div id="faq-25" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Porque se trata de un proyecto estratégico para la movilidad y el desarrollo urbano del Área Metropolitana de Guadalajara, por lo que se busca promover la participación ciudadana en esta etapa del proceso.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="consulta">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-26">¿La Consulta Popular sustituye los ejercicios de participación realizados anteriormente?</button></h2>
            <div id="faq-26" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">No. Los procesos desarrollados entre 2022 y 2025 permitieron construir un diagnóstico y recopilar propuestas ciudadanas. La Consulta Popular representa una nueva etapa de participación dentro del desarrollo del proyecto.</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="consulta">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-27">¿Quién puede participar?</button></h2>
            <div id="faq-27" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">Pueden participar las personas mayores de 18 años que cuenten con credencial para votar vigente y estén registradas en alguno de los municipios participantes de la Consulta Popular: [municipios por confirmar]</div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="consulta">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-28">¿Cómo puedo participar?</button></h2>
            <div id="faq-28" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">
                    <p class="mb-2">La ciudadanía puede participar en distintas etapas del proceso del Plan Integral de López Mateos. Durante la etapa de socialización del proyecto, se habilitarán diversos espacios para conocer la propuesta y compartir opiniones:</p>
                    <ul class="mb-2 ps-3">
                        <li>Reuniones con actores de interés: de las fechas por confirmar</li>
                        <li>Visitas a comercios y viviendas más próximas al corredor: de las fechas por confirmar</li>
                        <li>Módulos informativos: de las fechas por confirmar, donde la población podrá recibir información sobre el proyecto y resolver sus dudas.</li>
                    </ul>
                    <p class="mb-0">Posteriormente, las fechas por confirmar se llevará a cabo la Consulta Popular, mediante la cual la ciudadanía podrá expresar su opinión conforme a las modalidades, sedes y mecanismos establecidos en la convocatoria oficial.</p>
                </div>
            </div>
        </div>

        <div class="accordion-item faq-item border-dark-subtle rounded-0" data-categoria="consulta">
            <h2 class="accordion-header"><button class="accordion-button collapsed fw-bold text-dark bg-light rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#faq-29">¿Cuándo será vinculante el resultado de la Consulta Popular?</button></h2>
            <div id="faq-29" class="accordion-collapse collapse" data-bs-parent="#accordionNivel2">
                <div class="accordion-body text-muted bg-white small">
                    <p class="mb-2">De acuerdo con la legislación aplicable, el resultado de la Consulta Popular será vinculante cuando participe al menos el 33% de las personas inscritas en la Lista Nominal correspondiente y una de las opciones obtenga más del 50% de los votos válidos emitidos.</p>
                    <p class="mb-0">Una vez concluida la jornada, las autoridades competentes realizarán el cómputo y darán a conocer los resultados oficiales conforme a la normatividad aplicable.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección Inferior (No encuentras tu pregunta) -->
    <div class="text-center pt-5 mt-4 border-top border-dark-subtle">
        <p class="fw-bold mb-3 text-dark">¿No encuentras tu pregunta?</p>
        <p class="small text-muted mb-4">Escríbenos por WhatsApp para resolver una duda puntual o usa el formulario de contacto si quieres enviar un comentario más amplio o sumarte a una reunión.</p>
        <a href="https://wa.me/TUNUMERO" target="_blank" rel="noopener noreferrer" class="btn btn-dark rounded-0 fw-bold px-4 py-2">Escríbenos por WhatsApp</a>
    </div>
</main>

<!-- Lógica Vainilla JS para Filtrar y Buscar (Seguro y ligero) -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const buscador = document.getElementById('buscadorFaq');
    const botones = document.querySelectorAll('.filtro-btn');
    const items = document.querySelectorAll('.faq-item');
    
    // Filtros por categoría
    botones.forEach(btn => {
        btn.addEventListener('click', (e) => {
            // 1. Resetear todos los botones visualmente (forzando texto oscuro)
            botones.forEach(b => { 
                b.classList.remove('btn-dark', 'text-white', 'active'); 
                b.classList.add('btn-outline-dark', 'bg-white', 'text-dark', 'border-dark-subtle'); 
            });
            
            // 2. Activar solo el botón seleccionado (forzando texto blanco)
            e.target.classList.remove('btn-outline-dark', 'bg-white', 'text-dark', 'border-dark-subtle'); 
            e.target.classList.add('btn-dark', 'text-white', 'active');
            
            // Ocultar/Mostrar según data-categoria
            const filtro = e.target.getAttribute('data-filtro');
            items.forEach(item => { 
                item.style.display = (filtro === 'todas' || item.getAttribute('data-categoria') === filtro) ? 'block' : 'none'; 
            });
            
            // Limpiar buscador al hacer clic en un filtro
            buscador.value = '';
        });
    });

    // Buscador en tiempo real (Protección XSS vía textContent)
    buscador.addEventListener('input', (e) => {
        const query = e.target.value.toLowerCase().trim();
        
        // Si el usuario busca algo, reseteamos los botones visualmente a "Todas"
        if(query !== '') {
            botones.forEach(b => { 
                b.classList.remove('btn-dark', 'text-white', 'active'); 
                b.classList.add('btn-outline-dark', 'bg-white', 'text-dark', 'border-dark-subtle'); 
            });
            const btnTodas = document.querySelector('[data-filtro="todas"]');
            btnTodas.classList.remove('btn-outline-dark', 'bg-white', 'text-dark', 'border-dark-subtle');
            btnTodas.classList.add('btn-dark', 'text-white', 'active');
        }

        items.forEach(item => { 
            // textContent es vital aquí: lee texto puro y evita ejecución de etiquetas HTML
            item.style.display = item.textContent.toLowerCase().includes(query) ? 'block' : 'none'; 
        });
    });
});
</script>
<?php require_once 'footer.php'; ?>