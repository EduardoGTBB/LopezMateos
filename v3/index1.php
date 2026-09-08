<?php 
// Al no declarar $es_nivel2, el header sabe que es la página principal
require_once 'header.php'; 
?>
    <!-- 2.1 PORTADA -->
    <header id="conoce" class="pb-5 mt-1">
        <div class="container pt-4">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="d-flex flex-column justify-content-center">
                        <h1 class="display-3 titulo-seccion" style="color: var(--verde-oscuro);">López Mateos,</h1>
                        <h1 class="display-3 titulo-seccion" style="color: var(--verde-medio);">te toca a ti</h1>
                    </div>
                    <p class="mb-4">Conoce la propuesta del Plan Integral de López Mateos: una estrategia para atender los retos de movilidad, transporte público, drenaje, seguridad vial, conectividad y espacio público del corredor.</p>
                    <p>Infórmate, resuelve tus dudas y participa en el proceso de socialización.</p>
                </div>
                <div class="col-lg-6">
                    <div class="p-2 bg-dark rounded-0">
                        <div class="ratio ratio-16x9 h-100 overflow-hidden d-flex align-items-center justify-content-center">
                            <iframe src="https://www.youtube.com/embed/199djkIEflw" title="Video explicativo Plan López Mateos" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" sandbox="allow-scripts allow-same-origin allow-presentation" class="border-0 w-100 h-100" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-3">
                    <div class="caja-dato">
                        <span class="fw-bold fs-5 d-block">4 Municipios</span>
                        <span class="text-muted small">Guadalajara, Zapopan, Tlaquepaque y Tlajomulco</span>
                    </div>
                </div>
                <div class="col-3">
                    <div class="caja-dato">
                        <span class="fw-bold fs-5 d-block">2 Tramos</span>
                        <span class="text-muted small">Urbano y suburbano, con intervenciones distintas</span>
                    </div>
                </div>
                <div class="col-3">
                    <div class="caja-dato">
                        <span class="fw-bold fs-5 d-block">7 Componentes</span>
                        <span class="text-muted small">No es sólo un viaducto</span>
                    </div>
                </div>
                <div class="col-3">
                    <div class="caja-dato">
                        <span class="fw-bold fs-5 d-block">Socialización</span>
                        <span class="text-muted small">Consulta: fecha por confirmar</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 2.2 ETAPA ACTUAL -->
    <section class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-md-6 p-4 p-lg-5" style="background-color: var(--color-primario); color: white;">
                <h3 class="fw-bold">1. Ahora · Socialización — Estás aquí</h3>
                <p class="mb-0">Conoce la propuesta, resuelve dudas y comparte tu opinión.</p>
            </div>
            <div class="col-md-6 p-4 p-lg-5" style="background-color: var(--color-oscuro); color: white;">
                <h3 class="fw-bold" style="color: var(--verde-pdf2);">2. Después · Consulta Popular</h3>
                <p class="mb-0">La ciudadanía decidirá sobre el Plan Integral de López Mateos.</p>
            </div>
        </div>
    </section>

    <!-- LÍNEA CONECTORA 1 -->
    <div class="conector-metro d-none d-md-flex">
        <svg viewBox="0 0 1000 220" preserveAspectRatio="none">
            <path class="linea-via" stroke="var(--naranja)" d="M 150 0 L 150 60 Q 150 80 180 80 L 820 80 Q 850 80 850 100 L 850 220" />
            <path class="linea-via" stroke="var(--verde-medio)" d="M 180 0 L 180 80 Q 180 110 210 110 L 790 110 Q 820 110 820 140 L 820 220" />
            <path class="linea-via" stroke="var(--verde-oscuro)" d="M 210 0 L 210 100 Q 210 140 240 140 L 760 140 Q 790 140 790 180 L 790 220" />
            <circle cx="150" cy="20" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
            <circle cx="180" cy="40" r="8" class="estacion-nodo" stroke="var(--verde-medio)"/>
            <circle cx="850" cy="200" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
        </svg>
    </div>

    <!-- 2.3 EL PROBLEMA -->
    <section class="seccion-clara py-5 my-lg-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2">
                    <div class="bg-light rounded-0 h-100 min-vh-50 d-flex align-items-center justify-content-center border" style="min-height: 400px; border-color: var(--color-secundario) !important;">
                        <img src="../images/S11.jpg" alt="Tráfico corredor López Mateos" class="img-fluid rounded-0 w-100 object-fit-cover" style="min-height: 400px;">
                    </div>
                </div>
                <div class="col-lg-7 order-lg-1 pe-lg-5">
                    <h2 class="display-5 titulo-seccion mb-4">López Mateos forma parte de tu día</h2>
                    <p class="mb-5">Por el corredor circulan personas que van a casa, al trabajo, a la escuela o a otros puntos de la ciudad. También conviven transporte público, vehículos particulares, peatones, ciclistas y transporte de carga. Esta concentración genera problemas que afectan los traslados y la vida cotidiana.</p>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="numero-gigante me-4">+160<span class="fs-4">mil</span></div>
                        <div><h4 class="fw-bold mb-1">Vehículos al día</h4></div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <div class="numero-gigante me-4">&lt;10<span class="fs-4">km/h</span></div>
                        <div><h4 class="fw-bold mb-1">Velocidad en hora pico</h4></div>
                    </div>
                    <div class="d-flex align-items-start">
                        <div class="numero-gigante me-4">+50<span class="fs-4">años</span></div>
                        <div><h4 class="fw-bold mb-1">De antigüedad del drenaje</h4></div>
                    </div>
                </div>
            </div>

            <!-- Nuevo Diseño Plano para las Tarjetas de Problemas -->
            <div class="row mt-5 pt-4">
                <div class="col-md-4 mb-4">
                    <div class="tarjeta-plana bg-light">
                        <h5 class="fw-bold fs-5" style="color: var(--color-primario);">Traslados poco previsibles</h5>
                        <p class="text-muted mb-0 small">Viajes locales, de paso, transporte público y carga comparten una misma avenida.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="tarjeta-plana bg-light">
                        <h5 class="fw-bold fs-5" style="color: var(--color-primario);">Transporte público atrapado</h5>
                        <p class="text-muted mb-0 small">Los autobuses circulan entre el tráfico general y pierden velocidad y regularidad.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="tarjeta-plana bg-light">
                        <h5 class="fw-bold fs-5" style="color: var(--color-primario);">Dificultad para cruzar seguro</h5>
                        <p class="text-muted mb-0 small">El corredor funciona como barrera entre colonias y aumenta el riesgo para peatones y ciclistas.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="tarjeta-plana bg-light">
                        <h5 class="fw-bold fs-5" style="color: var(--color-primario);">Inundaciones recurrentes</h5>
                        <p class="text-muted mb-0 small">El drenaje actual no responde a la demanda ni a los episodios de lluvia.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="tarjeta-plana bg-light">
                        <h5 class="fw-bold fs-5" style="color: var(--color-primario);">Conectividad limitada</h5>
                        <p class="text-muted mb-0 small">Cuando López Mateos se satura, también se complica el acceso al sur de la metrópoli.</p>
                    </div>
                </div>
                <div class="col-12 text-center mt-3">
                    <h4 class="fw-bold" style="color: var(--color-primario);">Estos problemas están relacionados entre sí. Por eso, atender López Mateos requiere una solución integral y no una sola intervención.</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- LÍNEA CONECTORA 2 -->
    <div class="conector-metro d-none d-md-flex">
        <svg viewBox="0 0 1000 220" preserveAspectRatio="none">
            <path class="linea-via" stroke="var(--naranja)" d="M 850 0 L 850 60 Q 850 90 820 90 L 180 90 Q 150 90 150 120 L 150 220" />
            <path class="linea-via" stroke="var(--verde-claro)" d="M 820 0 L 820 80 Q 820 120 790 120 L 210 120 Q 180 120 180 160 L 180 220" />
            <circle cx="850" cy="20" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
            <circle cx="150" cy="200" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
        </svg>
    </div>

    <!-- 2.4 EVIDENCIA -->
    <section class="seccion-oscura py-5 border-bottom border-dark-subtle">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="display-5 titulo-seccion mb-3">Una propuesta construida con evidencia y participación</h2>
                    <p class="contenedor-lectura text-white-50">El Plan no se diseñó desde un escritorio: se integraron estudios técnicos, información territorial y la experiencia de más de 64 mil personas que participaron entre 2022 y 2025.</p>
                </div>
            </div>

            <!-- Línea de Tiempo (Lista Horizontal Ultra Compacta) -->
            <div class="row justify-content-center">
                <!-- Limitamos el ancho para mantener la densidad visual de la imagen -->
                <div class="col-lg-8">
                    
                    <!-- 1. 2022 -->
                    <div class="card border-0 mb-2 shadow-none" style="background-color: #ffffff; border-radius: 16px;">
                        <div class="card-body d-flex flex-row align-items-center py-2 px-3 px-md-4">
                            <!-- Ancho estricto para la columna de fecha -->
                            <div style="width: 120px; min-width: 120px;">
                                <span class="fs-5" style="color: var(--verde-oscuro); font-weight: 900;">2022</span>
                            </div>
                            <!-- Textos comprimidos sin márgenes -->
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="fw-bold mb-0 lh-1" style="color: var(--verde-oscuro); padding-bottom: 4px;">Radiografía del área</h6>
                                <span class="text-muted lh-1" style="font-size: 0.8rem;">Información territorial · IIEG</span>
                            </div>
                        </div>
                    </div>

                    <!-- 2. 2022-23 -->
                    <div class="card border-0 mb-2 shadow-none" style="background-color: #ffffff; border-radius: 16px;">
                        <div class="card-body d-flex flex-row align-items-center py-2 px-3 px-md-4">
                            <div style="width: 120px; min-width: 120px;">
                                <span class="fs-5" style="color: var(--verde-oscuro); font-weight: 900;">2022–23</span>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="fw-bold mb-0 lh-1" style="color: var(--verde-oscuro); padding-bottom: 4px;">Diálogos por la Movilidad</h6>
                                <span class="text-muted lh-1" style="font-size: 0.8rem;">58,856 participantes</span>
                            </div>
                        </div>
                    </div>

                    <!-- 3. 2024 -->
                    <div class="card border-0 mb-2 shadow-none" style="background-color: #ffffff; border-radius: 16px;">
                        <div class="card-body d-flex flex-row align-items-center py-2 px-3 px-md-4">
                            <div style="width: 120px; min-width: 120px;">
                                <span class="fs-5" style="color: var(--verde-oscuro); font-weight: 900;">2024</span>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="fw-bold mb-0 lh-1" style="color: var(--verde-oscuro); padding-bottom: 4px;">PIMUS y POTMet</h6>
                                <span class="text-muted lh-1" style="font-size: 0.8rem;">Estudios técnicos</span>
                            </div>
                        </div>
                    </div>

                    <!-- 4. 2025 -->
                    <div class="card border-0 mb-2 shadow-none" style="background-color: #ffffff; border-radius: 16px;">
                        <div class="card-body d-flex flex-row align-items-center py-2 px-3 px-md-4">
                            <div style="width: 120px; min-width: 120px;">
                                <span class="fs-5" style="color: var(--verde-oscuro); font-weight: 900;">2025</span>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="fw-bold mb-0 lh-1" style="color: var(--verde-oscuro); padding-bottom: 4px;">Mesas de Diálogo</h6>
                                <span class="text-muted lh-1" style="font-size: 0.8rem;">6,083 participantes</span>
                            </div>
                        </div>
                    </div>

                    <!-- 5. Estamos Aquí -->
                    <div class="card border-0 mb-2 shadow-none" style="background-color: var(--naranja); border-radius: 16px;">
                        <div class="card-body d-flex flex-row align-items-center py-2 px-3 px-md-4">
                            <div class="lh-1" style="width: 120px; min-width: 120px;">
                                <span class="text-white text-uppercase" style="font-size: 0.95rem; font-weight: 900;">ESTAMOS<br>AQUÍ</span>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="fw-bold text-white mb-0 lh-1" style="padding-bottom: 4px;">Socialización</h6>
                                <span class="text-white opacity-75 lh-1" style="font-size: 0.8rem;">Módulos, sitio web y reuniones</span>
                            </div>
                        </div>
                    </div>

                    <!-- 6. Después -->
                    <div class="card border-0 mb-4 shadow-none" style="background-color: var(--verde-oscuro); border-radius: 16px;">
                        <div class="card-body d-flex flex-row align-items-center py-2 px-3 px-md-4">
                            <div style="width: 120px; min-width: 120px;">
                                <span class="text-uppercase" style="font-size: 0.95rem; color: var(--verde-claro); font-weight: 900;">DESPUÉS</span>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="fw-bold text-white mb-0 lh-1" style="padding-bottom: 4px;">Consulta Popular</h6>
                                <span class="text-white opacity-75 lh-1" style="font-size: 0.8rem;">Fecha por confirmar</span>
                            </div>
                        </div>
                    </div>

                    <!-- Botón centrado debajo de las tarjetas -->
                    <div class="text-center mt-4 mb-2">
                        <a href="documentos.php" class="btn rounded-0 shadow-none d-inline-block transition-all" style="background-color: transparent; border: 2px solid var(--verde-claro); color: var(--verde-claro); padding: 12px 24px; max-width: 850px; line-height: 1.5;">
                            <span class="fw-bold" style="font-size: 1rem;">Documentos y antecedentes</span> 
                            <span class="fw-normal" style="font-size: 0.8rem;">· PIMUS, POTMet, resultados de los Diálogos y de las Mesas, diagnósticos y convocatoria.</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LÍNEA CONECTORA 3 -->
    <div class="conector-metro d-none d-md-flex">
        <svg viewBox="0 0 1000 220" preserveAspectRatio="none">
            <path class="linea-via" stroke="var(--naranja)" d="M 500 0 L 500 60 Q 500 80 530 80 L 820 80 Q 850 80 850 100 L 850 220" />
            <path class="linea-via" stroke="var(--verde-medio)" d="M 470 0 L 470 80 Q 470 110 500 110 L 790 110 Q 820 110 820 140 L 820 220" />
            <path class="linea-via" stroke="var(--verde-claro)" d="M 440 0 L 440 100 Q 440 140 470 140 L 760 140 Q 790 140 790 180 L 790 220" />
            <circle cx="500" cy="20" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
            <circle cx="850" cy="200" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
        </svg>
    </div>

    <!-- 2.5 LA PROPUESTA -->
    <section class="seccion-gris py-5 border-bottom border-dark-subtle">
        <div class="container py-lg-5">
            <div class="text-center mx-auto mb-5 contenedor-lectura">
                <h2 class="display-5 titulo-seccion mb-3">Siete componentes, no una sola obra</h2>
                <p>El Plan propone intervenciones distintas en el tramo urbano y en el suburbano, conectadas como parte de una misma estrategia. Esto es todo lo que incluye:</p>
            </div>

            <!-- Rediseño de componentes para aligerar texto -->
            <div class="row g-4 justify-content-center mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="tarjeta-plana text-center">
                        <div class="fs-1 mb-3">🚇</div>
                        <h6 class="fw-bold mb-2">Viaducto subterráneo</h6>
                        <p class="text-muted small mb-2 fw-semibold">Tramo urbano · 6.28 km</p>
                        <p class="small text-muted mb-3">Mueve el tráfico de paso bajo tierra para liberar la superficie.</p>
                        <a href="proyecto-detalle.php#viaducto-subterraneo" class="text-decoration-underline small fw-bold text-dark">Ver ficha completa</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="tarjeta-plana text-center">
                        <div class="fs-1 mb-3">🚌</div>
                        <h6 class="fw-bold mb-2">Transporte público</h6>
                        <p class="text-muted small mb-2 fw-semibold">Ambos tramos</p>
                        <p class="small text-muted mb-3">4.3 km de carril exclusivo, 7 estaciones y 1 ruta exprés.</p>
                        <a href="proyecto-detalle.php#transporte-publico" class="text-decoration-underline small fw-bold text-dark">Ver ficha completa</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="tarjeta-plana text-center">
                        <div class="fs-1 mb-3">🚲</div>
                        <h6 class="fw-bold mb-2">Ciclovía</h6>
                        <p class="text-muted small mb-2 fw-semibold">Tramo urbano · 6.01 km</p>
                        <p class="small text-muted mb-3">Carril confinado conectado con la red ciclista existente.</p>
                        <a href="proyecto-detalle.php#ciclovia" class="text-decoration-underline small fw-bold text-dark">Ver ficha completa</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="tarjeta-plana text-center">
                        <div class="fs-1 mb-3">🚶</div>
                        <h6 class="fw-bold mb-2">Cruces seguros</h6>
                        <p class="text-muted small mb-2 fw-semibold">Tramo urbano</p>
                        <p class="small text-muted mb-3">Cruces a nivel de calle con accesibilidad universal.</p>
                        <a href="proyecto-detalle.php#cruces-seguros" class="text-decoration-underline small fw-bold text-dark">Ver ficha completa</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="tarjeta-plana text-center">
                        <div class="fs-1 mb-3">🌳</div>
                        <h6 class="fw-bold mb-2">Espacios públicos</h6>
                        <p class="text-muted small mb-2 fw-semibold">Tramo urbano</p>
                        <p class="small text-muted mb-3">Dos parques lineales, arbolado y zonas de convivencia.</p>
                        <a href="proyecto-detalle.php#espacios-publicos" class="text-decoration-underline small fw-bold text-dark">Ver ficha completa</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="tarjeta-plana text-center">
                        <div class="fs-1 mb-3">💧</div>
                        <h6 class="fw-bold mb-2">Drenaje</h6>
                        <p class="text-muted small mb-2 fw-semibold">Tramo urbano · 4.6 km</p>
                        <p class="small text-muted mb-3">Colectores separados con 20% más capacidad.</p>
                        <a href="proyecto-detalle.php#drenaje" class="text-decoration-underline small fw-bold text-dark">Ver ficha completa</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="tarjeta-plana text-center">
                        <div class="fs-1 mb-3">🌉</div>
                        <h6 class="fw-bold mb-2">Viaducto elevado</h6>
                        <p class="text-muted small mb-2 fw-semibold">Tramo suburbano · 11.84 km</p>
                        <p class="small text-muted mb-3">Separa viajes largos manteniendo los accesos a nivel.</p>
                        <a href="proyecto-detalle.php#viaducto-elevado" class="text-decoration-underline small fw-bold text-dark">Ver ficha completa</a>
                    </div>
                </div>
            </div>

            <!-- Esquema de Peaje -->
            <div class="tarjeta-plana bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-4 border-end border-dark-subtle text-center text-lg-start mb-4 mb-lg-0">
                        <h4 class="fw-bold mb-0" style="color: var(--color-primario);">Esquema de peaje</h4>
                    </div>
                    <div class="col-lg-4 border-end border-dark-subtle px-lg-4 mb-4 mb-lg-0">
                        <h6 class="fw-bold text-dark">Tramo urbano · libre de peaje</h6>
                        <p class="small text-muted mb-0">4.53 km, con acceso al viaducto subterráneo y a todos los componentes de superficie.</p>
                    </div>
                    <div class="col-lg-4 px-lg-4">
                        <h6 class="fw-bold text-dark">Tramo suburbano · con esquema de peaje</h6>
                        <p class="small text-muted mb-0">15.74 km. El monto y la estructura de las tarifas están por definirse.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LÍNEA CONECTORA 4 -->
    <div class="conector-metro d-none d-md-flex">
        <svg viewBox="0 0 1000 220" preserveAspectRatio="none">
            <path class="linea-via" stroke="var(--verde-oscuro)" d="M 150 0 L 150 80 Q 150 110 180 110 L 470 110 Q 500 110 500 140 L 500 220" />
            <circle cx="150" cy="20" r="8" class="estacion-nodo" stroke="var(--verde-oscuro)"/>
            <circle cx="500" cy="200" r="8" class="estacion-nodo" stroke="var(--verde-oscuro)"/>
        </svg>
    </div>

    <!-- 2.6 MAPA DEL CORREDOR -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="display-6 titulo-seccion mb-4">Explora el corredor tramo por tramo</h2>
            <p class="mb-4">Recorre el mapa para ubicar cada componente e identificar qué pasa cerca de donde vives, trabajas o estudias.</p>
            <div class="bg-light border border-dark-subtle d-flex align-items-center justify-content-center w-100" style="height: 450px;">
                <iframe src="../mapa-interactivo/index.html" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" title="Mapa Interactivo del Plan Integral"></iframe>
            </div>
        </div>
    </section>

    <!-- 2.7 QUÉ CAMBIARÍA -->
    <section class="seccion-clara py-5 border-top border-bottom bg-light">
        <div class="container py-lg-4">
            <div class="contenedor-lectura text-center mb-5">
                <span class="text-uppercase fw-bold mb-2 d-inline-block px-3 py-1 bg-white border border-dark-subtle" style="color: var(--color-oscuro);">Hoy vs con el Plan</span>
                <h2 class="display-5 titulo-seccion mb-4">Así podría cambiar López Mateos</h2>
            </div>

            <div class="before-after-wrapper position-relative mx-auto rounded-0 mb-5 border-dark-subtle" style="max-width: 1000px; height: 55vh; min-height: 400px;">
                <img src="../images/S.1.jpg" alt="López Mateos Hoy" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0">
                <img src="../images/diapositiva_29.png" alt="López Mateos con el Plan" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0 overlay-img" id="afterImage">
                <div class="slider-handle" id="sliderHandle">
                    <div class="slider-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="var(--naranja)" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8ZM7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2ZM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10Z"/></svg>
                    </div>
                </div>
                <input type="range" min="0" max="100" value="50" class="position-absolute top-0 start-0 w-100 h-100 slider-input" id="compareSlider" aria-label="Comparador interactivo de imágenes">
            </div>

            <!-- Retícula de 6 Beneficios Planos -->
            <div class="row g-4 mx-auto" style="max-width: 1000px;">
                <div class="col-md-4">
                    <div class="card rounded-0 border-0 shadow-sm h-100">
                        <img src="../images/diapositiva21_LPM.jpg" class="card-img-top rounded-0 border-bottom" alt="Traslados más previsibles">
                        <div class="card-body bg-white p-4">
                            <h6 class="fw-bold" style="color: var(--color-primario);">Traslados más previsibles</h6>
                            <p class="small text-muted mb-0">Tiempos de recorrido más regulares al separar tipos de viaje.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded-0 border-0 shadow-sm h-100">
                        <img src="../images/inicio_26diap.png" class="card-img-top rounded-0 border-bottom" alt="Transporte público más eficiente">
                        <div class="card-body bg-white p-4">
                            <h6 class="fw-bold" style="color: var(--color-primario);">Transporte público más eficiente</h6>
                            <p class="small text-muted mb-0">Mayor velocidad y regularidad en el tramo urbano.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded-0 border-0 shadow-sm h-100">
                        <img src="../images/diapositiva_29.png" class="card-img-top rounded-0 border-bottom" alt="Una alternativa en bicicleta">
                        <div class="card-body bg-white p-4">
                            <h6 class="fw-bold" style="color: var(--color-primario);">Una alternativa en bicicleta</h6>
                            <p class="small text-muted mb-0">Una opción más segura para recorridos cotidianos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded-0 border-0 shadow-sm h-100">
                        <img src="../images/diapositiva50_LPM.jpg" class="card-img-top rounded-0 border-bottom" alt="Cruces más accesibles">
                        <div class="card-body bg-white p-4">
                            <h6 class="fw-bold" style="color: var(--color-primario);">Cruces más accesibles</h6>
                            <p class="small text-muted mb-0">Recorridos más fáciles para peatones, personas mayores y con discapacidad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded-0 border-0 shadow-sm h-100">
                        <img src="../images/diapositiva_25_via_express.png" class="card-img-top rounded-0 border-bottom" alt="Más espacios para las personas">
                        <div class="card-body bg-white p-4">
                            <h6 class="fw-bold" style="color: var(--color-primario);">Más espacios para las personas</h6>
                            <p class="small text-muted mb-0">Recuperar zonas hoy difíciles de utilizar por el tráfico.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded-0 border-0 shadow-sm h-100">
                        <img src="../images/diapositiva56_LPM_D.jpg" class="card-img-top rounded-0 border-bottom" alt="Mejor capacidad de drenaje">
                        <div class="card-body bg-white p-4">
                            <h6 class="fw-bold" style="color: var(--color-primario);">Mejor capacidad de drenaje</h6>
                            <p class="small text-muted mb-0">Menos afectaciones durante la temporada de lluvias.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LÍNEA CONECTORA 5 (De Derecha a Izquierda) -->
    <div class="conector-metro d-none d-md-flex">
        <svg viewBox="0 0 1000 220" preserveAspectRatio="none">
            <!-- Vía Verde Oscuro -->
            <path class="linea-via" stroke="var(--verde-oscuro)" d="M 850 0 L 850 60 Q 850 90 820 90 L 180 90 Q 150 90 150 120 L 150 220" />
            <!-- Vía Naranja paralela -->
            <path class="linea-via" stroke="var(--naranja)" d="M 820 0 L 820 80 Q 820 120 790 120 L 210 120 Q 180 120 180 160 L 180 220" />
            
            <!-- Nodos/Estaciones -->
            <circle cx="850" cy="20" r="8" class="estacion-nodo" stroke="var(--verde-oscuro)"/>
            <circle cx="150" cy="200" r="8" class="estacion-nodo" stroke="var(--verde-oscuro)"/>
            <circle cx="820" cy="40" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
            <circle cx="180" cy="200" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
        </svg>
    </div>

    <!-- 2.8 QUÉ IMPLICA -->
    <section class="py-5 bg-white border-bottom">
        <div class="container py-lg-4">
            <div class="contenedor-lectura text-center mb-5">
                <h2 class="display-5 titulo-seccion mb-4 text-dark">Una transformación de esta escala tendría impactos temporales</h2>
                <p class="text-muted">Si el proyecto avanza, durante la construcción podrían presentarse cambios temporales. La información sobre etapas, desvíos, horarios y zonas afectadas se publicará conforme avance la planeación.</p>
            </div>
        
            <div class="row g-4 mx-auto" style="max-width: 1000px;">
                <div class="col-md-4">
                    <div class="card rounded-0 border-0 shadow-sm h-100 border-top border-4" style="border-top-color: var(--naranja) !important;">
                        <div class="card-body bg-white p-4">
                            <h6 class="fw-bold" style="color: var(--naranja);">Circulación</h6>
                            <p class="small text-muted mb-0">Podrían presentarse ajustes temporales, desvíos y cambios en rutas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded-0 border-0 shadow-sm h-100 border-top border-4" style="border-top-color: var(--naranja) !important;">
                        <div class="card-body bg-white p-4">
                            <h6 class="fw-bold" style="color: var(--naranja);">Viviendas y comercios</h6>
                            <p class="small text-muted mb-0">Algunos accesos o actividades podrían modificarse durante los frentes de obra.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded-0 border-0 shadow-sm h-100 border-top border-4" style="border-top-color: var(--naranja) !important;">
                        <div class="card-body bg-white p-4">
                            <h6 class="fw-bold" style="color: var(--naranja);">Ruido y polvo</h6>
                            <p class="small text-muted mb-0">Los trabajos podrían generar molestias en las zonas cercanas a la obra.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded-0 border-0 shadow-sm h-100 border-top border-4" style="border-top-color: var(--naranja) !important;">
                        <div class="card-body bg-white p-4">
                            <h6 class="fw-bold" style="color: var(--naranja);">Transporte público</h6>
                            <p class="small text-muted mb-0">Algunas rutas o paradas podrían cambiar temporalmente.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded-0 border-0 shadow-sm h-100 border-top border-4" style="border-top-color: var(--naranja) !important;">
                        <div class="card-body bg-white p-4">
                            <h6 class="fw-bold" style="color: var(--naranja);">Servicios</h6>
                            <p class="small text-muted mb-0">Las obras hidráulicas o la reubicación de infraestructura podrían requerir afectaciones temporales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card rounded-0 border-0 shadow-sm h-100 border-top border-4" style="border-top-color: var(--naranja) !important;">
                        <div class="card-body bg-white p-4">
                            <h6 class="fw-bold" style="color: var(--naranja);">Arbolado</h6>
                            <p class="small text-muted mb-0">Sería necesario retirar algunos ejemplares, con reposición de al menos dos árboles por cada uno retirado.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LÍNEA CONECTORA 6 (De Izquierda a Centro) -->
    <div class="conector-metro d-none d-md-flex">
        <svg viewBox="0 0 1000 220" preserveAspectRatio="none">
            <!-- Vía Verde PDF2 (Acento) -->
            <path class="linea-via" stroke="var(--verde-pdf2)" d="M 150 0 L 150 60 Q 150 90 180 90 L 470 90 Q 500 90 500 120 L 500 220" />
            
            <circle cx="150" cy="20" r="8" class="estacion-nodo" stroke="var(--verde-pdf2)"/>
            <circle cx="500" cy="200" r="8" class="estacion-nodo" stroke="var(--verde-pdf2)"/>
        </svg>
    </div>

    <!-- 2.9 SOCIALIZACIÓN Y CONSULTA -->
    <section id="socializacion" class="seccion-gris py-5">
        <div class="container py-lg-5 text-center">
            <h2 class="display-5 titulo-seccion mb-4">Infórmate antes de decidir</h2>
            <p class="contenedor-lectura mb-5">La socialización es el periodo previo a la Consulta Popular. Puedes informarte por cuatro vías:</p>
            
            <div class="row g-4 justify-content-center mb-5 pb-4">
                <div class="col-6 col-md-3">
                    <h5 class="fw-bold" style="color: var(--verde-oscuro:);">📍 Módulos</h5>
                    <p class="small">30 módulos a lo largo del corredor con materiales y atención.</p>
                </div>
                <div class="col-6 col-md-3">
                    <h5 class="fw-bold" style="color: var(--verde-oscuro:);">💻 Página web</h5>
                    <p class="small">Componentes, mapa del Proyecto, dudas y documentos.</p>
                </div>
                <div class="col-6 col-md-3">
                    <h5 class="fw-bold" style="color: var(--verde-oscuro:);">🗣️ Reuniones</h5>
                    <p class="small">Espacios de diálogo con vecinos y grupos de interés.</p>
                </div>
                <div class="col-6 col-md-3">
                    <h5 class="fw-bold" style="color: var(--verde-oscuro:);">🏠 Visitas</h5>
                    <p class="small">El equipo en campo comparte información y atiende dudas.</p>
                </div>
            </div>

            <!-- ¿Qué es la Consulta Popular? (Diseño Plano Integrado) -->
            <div class="mx-auto text-start bg-white p-4 p-md-5 border border-dark-subtle" style="max-width: 900px;">
                <span class="d-inline-block px-3 py-1 bg-dark text-white text-uppercase fw-bold small mb-3">Siguiente etapa · fecha por confirmar</span>
                <h4 class="fw-bold mb-3" style="color: var(--color-oscuro);">¿Qué es la Consulta Popular?</h4>
                <p class="mb-4">Es el mecanismo de participación directa mediante el cual la ciudadanía podrá decidir sobre el Plan Integral de López Mateos. Es una etapa distinta de la socialización: <strong>aquí no se opina, se vota.</strong></p>
                
                <div class="row g-4 border-top pt-3">
                    <div class="col-md-4">
                        <strong class="d-block mb-1" style="color: var(--color-primario);">¿Quién puede participar?</strong>
                        <span class="small text-muted">Personas mayores de 18 años con credencial para votar vigente. Municipios por confirmar.</span>
                    </div>
                    <div class="col-md-4">
                        <strong class="d-block mb-1" style="color: var(--color-primario);">¿Cómo se participa?</strong>
                        <span class="small text-muted">En línea o de forma presencial en los módulos que se habiliten.</span>
                    </div>
                    <div class="col-md-4">
                        <strong class="d-block mb-1" style="color: var(--color-primario);">¿Cuándo será?</strong>
                        <span class="small text-muted">Fecha por confirmar. Se anunciará en la convocatoria oficial.</span>
                    </div>
                    <div class="col-12 mt-4">
                        <strong class="d-block mb-1" style="color: var(--color-primario);">¿Cuándo será vinculante?</strong>
                        <span class="small text-muted">Con al menos 33% de la Lista Nominal y más del 50% de los votos válidos por una opción.</span>
                    </div>
                </div>

                <!-- <div class="mt-4 pt-3 border-top border-dark-subtle text-center">
                    <a href="modulos.php" class="btn-solido">Dónde informarte en persona</a>
                </div> -->
                <!-- PUERTA AL NIVEL 2: Módulos (Outline Button) -->
                <div class="mt-4 pt-4 border-top border-dark-subtle text-center">
                    <a href="modulos.php" class="btn rounded-0 shadow-none d-inline-block transition-all" style="background-color: transparent; border: 2px solid var(--color-primario); color: var(--color-primario); padding: 12px 24px; max-width: 850px; line-height: 1.5;">
                        <span class="fw-bold" style="font-size: 1rem;">Dónde informarte en persona</span> 
                        <span class="fw-normal" style="font-size: 0.85rem;">· Mapa de los 30 módulos con direcciones, días y horarios.</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- LÍNEA CONECTORA 7 (De Centro a Derecha) -->
    <div class="conector-metro d-none d-md-flex">
        <svg viewBox="0 0 1000 220" preserveAspectRatio="none">
            <!-- Vía Naranja -->
            <path class="linea-via" stroke="var(--naranja)" d="M 500 0 L 500 60 Q 500 90 530 90 L 820 90 Q 850 90 850 120 L 850 220" />
            <!-- Vía Verde Claro -->
            <path class="linea-via" stroke="var(--verde-claro)" d="M 470 0 L 470 80 Q 470 120 500 120 L 790 120 Q 820 120 820 160 L 820 220" />
            
            <circle cx="500" cy="20" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
            <circle cx="850" cy="200" r="8" class="estacion-nodo" stroke="var(--naranja)"/>
        </svg>
    </div>

    <!-- 2.10 PARTICIPA -->
    <section id="participa" class="seccion-clara py-5">
        <div class="container py-5 text-center contenedor-lectura">
            <h2 class="display-5 titulo-seccion mb-4">Tu opinión es parte del futuro de López Mateos</h2>
            <p class="mb-5">Después de conocer el Plan Integral de López Mateos, comparte tu opinión sobre el proyecto. Responder el cuestionario te tomará pocos minutos. <br><br><strong style="color: var(--color-oscuro);">Este formulario forma parte de la etapa de socialización y no corresponde a la votación de la Consulta Popular.</strong></p>
            
            <div class="border p-4 p-md-5 text-center rounded-0 shadow-none" style="background-color: var(--color-secundario);" id="contenedor-kobo">
                <div id="kobo-prompt">
                    <div class="fs-1 mb-3">📋</div>
                    <h4 class="fw-bold mb-4" style="color: var(--color-oscuro);">Formulario de Participación</h4>
                    <button class="btn-acento" id="btn-cargar-form">
                        Hacer clic para llenar el formulario
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- LÍNEA CONECTORA 8 (De Derecha a Centro) -->
    <div class="conector-metro d-none d-md-flex">
        <svg viewBox="0 0 1000 220" preserveAspectRatio="none">
            <!-- Vía Verde Medio -->
            <path class="linea-via" stroke="var(--verde-medio)" d="M 850 0 L 850 60 Q 850 90 820 90 L 530 90 Q 500 90 500 120 L 500 220" />
            
            <circle cx="850" cy="20" r="8" class="estacion-nodo" stroke="var(--verde-medio)"/>
            <circle cx="500" cy="200" r="8" class="estacion-nodo" stroke="var(--verde-medio)"/>
        </svg>
    </div>

    <!-- 2.11 RESUELVE TUS DUDAS -->
    <section id="dudas" class="py-5">
        <div class="container py-lg-4 contenedor-lectura">
            <h2 class="display-6 titulo-seccion text-center mb-5">Respuestas claras para tomar una decisión informada</h2>
            
            <div class="accordion mb-5" id="accordionFaq">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            ¿El Plan consiste únicamente en un viaducto?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                        <div class="accordion-body text-muted bg-white">
                            No. El Plan combina siete componentes: viaducto subterráneo, transporte público, ciclovía, cruces seguros, espacios públicos, drenaje y viaducto elevado.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            ¿Por qué es necesario este proyecto?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                        <div class="accordion-body text-muted bg-white">
                            Porque los problemas del corredor —saturación, transporte público lento, cruces inseguros e inundaciones— están relacionados entre sí y requieren una solución integral.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            ¿En qué etapa se encuentra actualmente?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                        <div class="accordion-body text-muted bg-white">
                           En socialización: la etapa previa a la Consulta Popular, en la que puedes conocer la propuesta, resolver dudas y compartir tu opinión.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            ¿Qué pasará con los puentes peatonales?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                        <div class="accordion-body text-muted bg-white">
                           La propuesta contempla el retiro de siete puentes peatonales y su sustitución por cruces a nivel de calle con accesibilidad universal.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                            ¿Las obras afectarán la circulación mientras se construyen?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                        <div class="accordion-body text-muted bg-white">
                           Sí, podrían presentarse ajustes temporales, desvíos y cambios en rutas. La información sobre etapas, horarios y zonas afectadas se publicará conforme avance la planeación.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                            ¿Quién puede participar en la Consulta Popular?
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                        <div class="accordion-body text-muted bg-white">
                           Personas mayores de 18 años con credencial para votar vigente. Los municipios participantes están por confirmar.
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Botón de Dudas Original -->
            <div class="text-center pt-4 mt-3 border-top border-dark-subtle">
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="faq.php" class="btn rounded-0 shadow-none d-inline-block transition-all" style="background-color: transparent; border: 2px solid var(--color-primario); color: var(--color-primario); padding: 12px 24px; max-width: 850px; line-height: 1.5;">
                        <span class="fw-bold" style="font-size: 1rem;">¿Tienes otra duda?</span> 
                        <span class="fw-normal" style="font-size: 0.85rem;">· Antecedentes, componentes y Consulta Popular.</span>
                    </a>
                    <a href="https://wa.me/TUMERO_AQUI" target="_blank" rel="noopener noreferrer" class="btn-solido">Resolver dudas por WhatsApp</a>
                </div>                
            </div>
        </div>
    </section>

<?php 
// Requerimos el pie de página global
require_once 'footer.php'; 
?>