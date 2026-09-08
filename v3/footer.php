    <footer class="py-4 border-top border-dark-subtle" style="background-color: var(--color-oscuro); color: white;">
        <div class="container">
            <div class="row g-4 justify-content-between">
                
                <!-- Columna Izquierda: Información y Navegación -->
                <div class="col-lg-5 d-flex flex-column">
                    <!-- <div class="mb-3">
                        <span class="fw-bolder fs-5 text-nowrap lh-1 mb-1 d-block" style="color: var(--verde-pdf);">LÓPEZ MATEOS,</span>
                        <span class="fw-bold fs-6 text-nowrap lh-1 d-block opacity-75" style="color: var(--verde-claro);">TE TOCA A TI</span>
                    </div> -->
                    
                    <h6 class="fw-bold mb-1" style="color: var(--verde-pdf2);">Plan Integral López Mateos</h6>
                    <p class="small text-white-50 mb-3 lh-sm" style="font-size: 0.85rem;">Una estrategia para atender los retos de movilidad, transporte público, drenaje, seguridad vial, conectividad y espacio público del corredor.</p>
                    
                    <h6 class="fw-bold mb-2" style="color: var(--verde-pdf2);">Navegación</h6>
                    <ul class="list-unstyled d-flex flex-column gap-1 mb-4" style="font-size: 0.85rem;">
                        <li><a href="index.php" class="text-white-50 text-decoration-none">Inicio</a></li>
                        <li><a href="proyecto-detalle.php" class="text-white-50 text-decoration-none">El proyecto a detalle</a></li>
                        <li><a href="#socializacion" class="text-white-50 text-decoration-none">Socialización y Consulta</a></li>
                        <li><a href="faq.php" class="text-white-50 text-decoration-none">Preguntas frecuentes</a></li> <!-- faq.php -->
                        <li><a href="documentos.php" class="text-white-50 text-decoration-none">Documentos y antecedentes</a></li>
                    </ul>
                    
                    <p class="text-white-50 mb-0 mt-auto" style="font-size: 0.8rem;">Gobierno del Estado de Jalisco · Plan Integral de López Mateos.</p>
                </div>
                
                <!-- Columna Derecha: Formulario de Contacto (Totalmente plano y sin fondo) -->
                <div class="col-lg-6">
                    <!-- Eliminamos las clases bg-white, border y padding -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <!-- Título unificado con la paleta de la columna izquierda -->
                            <h5 class="fw-bold mb-0" style="color: var(--verde-pdf2); font-size: 1.1rem;">Contacto</h5>
                        </div>
                        <p class="text-white-50 mb-3 lh-sm" style="font-size: 0.75rem;">Para dudas más elaboradas o si quieres sumarte a una reunión, envía tus datos y un comentario.</p>
                        
                        <form action="procesar_contacto.php" method="POST" class="form-plano m-0">
                            <!-- TOKEN CSRF (Seguridad OWASP - Inyección prevenida) -->
                            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?? bin2hex(random_bytes(32)); ?>">

                            <!-- Gaps comprimidos -->
                            <div class="row gy-2 gx-2">
                                <div class="col-md-6">
                                    <!-- Labels pasaron a text-white para que se lean sobre el fondo oscuro -->
                                    <label for="contactoNombre" class="form-label fw-bold mb-0 text-white" style="font-size: 0.75rem;">Nombre</label>
                                    <input type="text" class="form-control rounded-0 border-0 bg-light" style="height: 28px; font-size: 0.8rem; padding: 2px 8px;" id="contactoNombre" name="nombre" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="contactoGrupo" class="form-label fw-bold mb-0 text-white" style="font-size: 0.75rem;">Grupo, asociación (Opcional)</label>
                                    <input type="text" class="form-control rounded-0 border-0 bg-light" style="height: 28px; font-size: 0.8rem; padding: 2px 8px;" id="contactoGrupo" name="grupo">
                                </div>
                                <div class="col-md-6">
                                    <label for="contactoCorreo" class="form-label fw-bold mb-0 text-white" style="font-size: 0.75rem;">Correo electrónico</label>
                                    <input type="email" class="form-control rounded-0 border-0 bg-light" style="height: 28px; font-size: 0.8rem; padding: 2px 8px;" id="contactoCorreo" name="correo" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="contactoTel" class="form-label fw-bold mb-0 text-white" style="font-size: 0.75rem;">Teléfono (Opcional)</label>
                                    <input type="tel" class="form-control rounded-0 border-0 bg-light" style="height: 28px; font-size: 0.8rem; padding: 2px 8px;" id="contactoTel" name="telefono">
                                </div>
                                <div class="col-12">
                                    <label for="contactoComentario" class="form-label fw-bold mb-0 text-white" style="font-size: 0.75rem;">Tu comentario</label>
                                    <textarea class="form-control rounded-0 border-0 bg-light" style="font-size: 0.8rem; padding: 4px 8px;" id="contactoComentario" name="comentario" rows="2" required></textarea>
                                </div>
                                
                                <div class="col-12 mt-1">
                                    <div class="d-flex align-items-center">
                                        <input class="form-check-input rounded-0 shadow-none me-2 mt-0 checkbox-footer" type="checkbox" value="1" id="contactoPrivacidad" required style="width: 1rem; height: 1rem;">
                                        
                                        <!-- Se agregó cursor: pointer al label para mejorar la UX al dar clic -->
                                        <label class="form-check-label text-white lh-1" for="contactoPrivacidad" style="font-size: 0.75rem; cursor: pointer;">
                                            He leído y acepto el aviso de privacidad
                                        </label>
                                    </div>
                                    <div style="padding-left: 1.25rem;">
                                        <a href="privacidad.php" class="text-decoration-underline text-white-50 d-inline-block mt-1 lh-1" style="font-size: 0.7rem;">Mostrar aviso de privacidad completo</a>
                                    </div>
                                </div>
                                
                                <div class="col-12 mt-2">
                                    <button type="submit" class="btn-solido w-100 fs-6 rounded-0 border-0 d-flex justify-content-center align-items-center" style="background-color: var(--color-primario); height: 32px; padding: 0;">Enviar mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- ==========================================
         MODAL: AVISO DE PRIVACIDAD COMPLETO
         ========================================== -->
    <div class="modal fade" id="modalPrivacidad" tabindex="-1" aria-labelledby="modalPrivacidadLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content rounded-4 border-0 shadow">
                
                <!-- Cabecera del Modal -->
                <div class="modal-header border-bottom-0 pb-0 bg-white">
                    <h4 class="modal-title fw-black" id="modalPrivacidadLabel" style="color: var(--verde-oscuro);">Aviso de Privacidad</h4>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                
                <!-- Cuerpo del Modal (Texto íntegro) -->
                <div class="modal-body text-muted p-4 px-md-5" style="font-size: 0.9rem; line-height: 1.6;">
                    
                    <strong class="d-block text-dark mb-1">1. Responsable del tratamiento</strong>
                    <p class="mb-4">Impacto Social Consultores (Impacto Social Consultores, S.C.), con domicilio en Av. José Martí 55, Col. Escandón I, Alcaldía Miguel Hidalgo, CP 11800, CDMX, es responsable del tratamiento de los datos personales que usted proporcione, así como de su protección y uso conforme a la normativa aplicable[cite: 28].</p>
                    
                    <strong class="d-block text-dark mb-1">2. Datos personales que se recaban</strong>
                    <p class="mb-2">Para participar en el proceso de socialización del Plan Integral de López Mateos, a través de los módulos informativos, el formulario de opinión en línea, las reuniones y las visitas casa por casa, se pueden recabar los siguientes datos[cite: 28]:</p>
                    <ul class="mb-3">
                        <li>De identificación y contacto: nombre, correo electrónico y teléfono (estos dos últimos, opcionales)[cite: 28].</li>
                        <li>Sociodemográficos: edad, sexo, ocupación, municipio y colonia de residencia[cite: 28].</li>
                        <li>En las visitas casa por casa: domicilio o ubicación del predio[cite: 28].</li>
                        <li>Sus opiniones y respuestas sobre el proyecto y sus componentes[cite: 28].</li>
                    </ul>
                    <p class="mb-4">No se recaban datos personales sensibles[cite: 28].</p>

                    <strong class="d-block text-dark mb-1">3. Fundamento legal</strong>
                    <p class="mb-4">El tratamiento se realiza con fundamento en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares y en el marco de la Ley del Sistema de Participación Ciudadana y Popular para la Gobernanza del Estado de Jalisco, que regula el proceso de Consulta Popular[cite: 28].</p>
                    
                    <strong class="d-block text-dark mb-1">4. Finalidades del tratamiento</strong>
                    <p class="mb-2"><strong>Finalidades primarias (necesarias para el proceso)[cite: 28]:</strong></p>
                    <ul class="mb-3">
                        <li>Recabar, sistematizar y analizar las opiniones ciudadanas sobre el Plan Integral de López Mateos[cite: 28].</li>
                        <li>Integrar los resultados del proceso de socialización y elaborar reportes y estadísticas[cite: 28].</li>
                        <li>Entregar dichos resultados a XX[cite: 28].</li>
                    </ul>
                    <p class="mb-2"><strong>Finalidades secundarias[cite: 28]:</strong></p>
                    <ul class="mb-4">
                        <li>Contactarlo para dar seguimiento a su opinión o aclarar sus respuestas[cite: 28].</li>
                        <li>Invitarlo a actividades del proceso de socialización[cite: 28].</li>
                    </ul>

                    <strong class="d-block text-dark mb-1">5. Negativa para finalidades no necesarias</strong>
                    <p class="mb-4">Si no desea que sus datos se usen para las finalidades secundarias, puede manifestarlo enviando un correo a <a href="mailto:info@impactosc.com" class="text-decoration-none" style="color: var(--naranja);">info@impactosc.com</a>[cite: 28]. Su negativa no será motivo para negarle la participación en el proceso[cite: 28].</p>

                    <strong class="d-block text-dark mb-1">6. Transferencias de datos</strong>
                    <p class="mb-4">Sus datos podrán transferirse a XX con la finalidad de integrar los resultados del proceso[cite: 28]. Fuera de estas transferencias, y de las excepciones previstas en la ley, no se transferirán sus datos sin su consentimiento[cite: 28].</p>

                    <strong class="d-block text-dark mb-1">7. Derechos ARCO y cómo ejercerlos</strong>
                    <p class="mb-4">Usted tiene derecho a acceder a sus datos personales, rectificarlos, cancelarlos u oponerse a su tratamiento (derechos ARCO)[cite: 28]. Para ejercerlos, envíe su solicitud a <a href="mailto:info@impactosc.com" class="text-decoration-none" style="color: var(--naranja);">info@impactosc.com</a>, indicando nombre, descripción de los datos y medio para recibir respuesta[cite: 28]. El responsable atenderá su solicitud en los plazos que marca la ley[cite: 28].</p>

                    <strong class="d-block text-dark mb-1">8. Contacto para tratamiento de datos personales</strong>
                    <p class="mb-4">Para cualquier duda sobre el tratamiento de sus datos, puede acudir a Av. José Martí 55, Col. Escandón I, Alcaldía Miguel Hidalgo, CP 11800, CDMX o enviar un correo electrónico a <a href="mailto:info@impactosc.com" class="text-decoration-none" style="color: var(--naranja);">info@impactosc.com</a>[cite: 28].</p>

                    <strong class="d-block text-dark mb-1">9. Datos recabados por medios electrónicos</strong>
                    <p class="mb-4">En el formulario de opinión en línea se podrán recabar datos de dirección IP o cookies con la finalidad de asegurar el funcionamiento del sitio y evitar registros duplicados[cite: 28].</p>

                    <strong class="d-block text-dark mb-1">10. Cambios al aviso de privacidad</strong>
                    <p class="mb-4">Cualquier modificación a este aviso se hará de su conocimiento a través de la página de socialización del Proyecto (XX)[cite: 28].</p>

                    <strong class="d-block text-dark mb-1">11. Aceptación y fecha de actualización</strong>
                    <p class="mb-4">Al proporcionar sus datos y continuar con su participación, usted manifiesta haber leído y aceptado el presente aviso de privacidad[cite: 28].</p>
                    
                    <p class="mt-4 mb-0 fst-italic pt-3 border-top border-dark-subtle text-center" style="font-size: 0.8rem;">
                        Última actualización: 16 de junio de 2026[cite: 28].
                    </p>
                </div>
                
                <!-- Pie del Modal -->
                <div class="modal-footer border-top-0 pt-0 bg-white justify-content-center">
                    <button type="button" class="btn rounded-pill text-white px-4 fw-bold shadow-sm" style="background-color: var(--naranja);" data-bs-dismiss="modal">Entendido y Cerrar</button>
                </div>
                
            </div>
        </div>
    </div>

    <!-- ==========================================
         MODAL: CONFIGURACIÓN DE DATOS (Evasión AdBlock)
         ========================================== -->
    <div class="modal fade" id="modalConfiguracion" tabindex="-1" aria-labelledby="modalConfiguracionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow">
                
                <!-- Cabecera -->
                <div class="modal-header border-bottom-0 pb-0 bg-white">
                    <h4 class="modal-title fw-black" id="modalConfiguracionLabel" style="color: var(--verde-oscuro);">Configuración de datos</h4>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                
                <!-- Cuerpo con los Switches -->
                <div class="modal-body p-4 px-md-5">
                    <p class="text-muted small mb-4">Administra tus preferencias sobre las herramientas internas que utilizamos.</p>
                    
                    <!-- Switch: Necesarias (Siempre activo) -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="pe-3">
                            <h6 class="fw-bold mb-1" style="color: var(--verde-oscuro);">Técnicas y necesarias</h6>
                            <p class="text-muted small mb-0 lh-sm">Indispensables para que el sitio sea seguro y funcione correctamente.</p>
                        </div>
                        <div class="form-check form-switch">
                            <!-- Disabled y Checked por defecto -->
                            <input class="form-check-input fs-4 shadow-none" type="checkbox" role="switch" checked disabled>
                        </div>
                    </div>
                    
                    <hr class="border-dark-subtle opacity-25 my-4">
                    
                    <!-- Switch: Analítica (Opcional) -->
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="pe-3">
                            <h6 class="fw-bold mb-1" style="color: var(--verde-oscuro);">Medición y analítica</h6>
                            <p class="text-muted small mb-0 lh-sm">Nos ayudan a entender de forma anónima cómo usas el sitio para mejorarlo.</p>
                        </div>
                        <div class="form-check form-switch">
                            <!-- Toggle interactivo -->
                            <input class="form-check-input fs-4 shadow-none" type="checkbox" role="switch" id="toggleAnalytics" checked>
                        </div>
                    </div>
                </div>
                
                <!-- Botón de Guardar -->
                <div class="modal-footer border-top-0 pt-0 bg-white justify-content-center">
                    <button type="button" class="btn rounded-pill text-white px-4 fw-bold shadow-sm" style="background-color: var(--naranja);" id="btn-save-config">Guardar preferencias</button>
                </div>
                
            </div>
        </div>
    </div>
    <!-- GESTOR DE COOKIES (Oculto - Evasión AdBlockers y OWASP) 
    <div id="cookieConsentBanner" class="cookie-banner-wrapper">
        <button id="btn-cookie-dismiss" class="cookie-btn-dismiss">Continuar sin aceptar</button>
        <div class="p-4 pt-5 pb-3">
            <h3 class="fw-bolder mb-3" style="color: var(--texto-oscuro);">Gestión de cookies</h3>
            <p class="text-muted small mb-3 lh-sm">En este sitio, utilizamos herramientas para medir nuestra audiencia y mostrarte contenidos adaptados a tus necesidades.</p>
        </div>
        <div class="cookie-actions-grid">
            <button id="btn-cookie-settings" class="btn-cookie-action btn-cookie-config">Parametrizar</button>
            <button id="btn-cookie-accept" class="btn-cookie-action btn-cookie-accept">Aceptar</button>
        </div>
    </div>-->

    <!-- Bootstrap JS con SRI -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Script General -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // 1. COMPARADOR DE IMÁGENES
            const slider = document.getElementById('compareSlider');
            const afterImg = document.getElementById('afterImage');
            const sliderHandle = document.getElementById('sliderHandle'); 

            if(slider && afterImg && sliderHandle) {
                function updateSliderPosition(value) {
                    afterImg.style.clipPath = `inset(0 0 0 ${value}%)`;
                    sliderHandle.style.left = `${value}%`; 
                }
                slider.addEventListener('input', (e) => updateSliderPosition(e.target.value));
                updateSliderPosition(slider.value);
            }

            // 2. FORMULARIO KOBOTOOLBOX SEGURO
            const btnCargarForm = document.getElementById('btn-cargar-form');
            const contenedorKobo = document.getElementById('contenedor-kobo');

            if(btnCargarForm && contenedorKobo) {
                btnCargarForm.addEventListener('click', function() {
                    contenedorKobo.innerHTML = `
                        <iframe 
                            src="https://ee.kobotoolbox.org/yCu22I6o" 
                            title="Formulario de Participación Ciudadana"
                            sandbox="allow-scripts allow-same-origin allow-forms allow-popups"
                            allow="geolocation"
                            class="w-100 rounded-0 border bg-white"
                            style="min-height: 750px; overflow-y: auto;">
                        </iframe>
                    `;
                });
            }

            // Evitar anclas previas
            if (window.location.hash === '') {
                window.history.scrollRestoration = 'manual';
                window.scrollTo(0, 0);
            }

            // ==========================================
            // LÓGICA DE AVISO FLOTANTE PERSISTENTE Y CONFIGURACIÓN
            // ==========================================
            const sysLayer = document.getElementById('sysNoticeLayer');
            const btnAccept = document.getElementById('btn-sys-accept');
            const btnDismiss = document.getElementById('btn-sys-dismiss');
            const btnSaveConfig = document.getElementById('btn-save-config');
            const toggleAnalytics = document.getElementById('toggleAnalytics');

            if(sysLayer) {
                // Verificamos si ya hay preferencia guardada
                const userPref = localStorage.getItem('user_site_pref');
                
                if(!userPref) {
                    sysLayer.classList.remove('d-none');
                }

                // Función maestra para guardar la preferencia y ocultar el widget
                const closeSysLayer = (status, analyticsEnabled = false) => {
                    // Guardamos la decisión general
                    localStorage.setItem('user_site_pref', status);
                    // Guardamos la decisión específica de analíticas (OWASP compliance)
                    localStorage.setItem('user_analytics_pref', analyticsEnabled);
                    
                    // Ocultamos el widget flotante
                    sysLayer.classList.add('d-none');
                };

                // 1. Botón ACEPTAR TODO
                btnAccept.addEventListener('click', () => closeSysLayer('accepted_all', true));
                
                // 2. Botón CONTINUAR SIN ACEPTAR (Arriba a la derecha)
                btnDismiss.addEventListener('click', () => closeSysLayer('dismissed_all', false));
                
                // 3. Botón GUARDAR PREFERENCIAS (Dentro del modal de Configuración)
                if(btnSaveConfig) {
                    btnSaveConfig.addEventListener('click', () => {
                        const isAnalyticsOn = toggleAnalytics.checked;
                        closeSysLayer('custom_config', isAnalyticsOn);
                        
                        // Método robusto de Bootstrap 5.3 para cerrar modales
                        const modalConfigEl = document.getElementById('modalConfiguracion');
                        const modalInstance = bootstrap.Modal.getOrCreateInstance(modalConfigEl);
                        modalInstance.hide();
                    });
                }
            }
        });
    </script>
</body>
</html>