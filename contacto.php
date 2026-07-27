<?php include 'head.php'; ?>
<header class="section-brand-dark py-5">
    <div class="container py-4 py-md-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <!-- <span class="badge text-warning border border-warning px-3 py-2 mb-3 rounded-pill fw-semibold text-uppercase tracking-wide"> -->
                <span class="badge badge-section-outline-orange px-3 py-2 mb-3 rounded-pill fw-semibold text-uppercase tracking-wide">
                    Contacto
                </span>
                <h1 class="display-4 fw-bolder mb-4">
                    ¿Tienes dudas sobre López Mateos?
                </h1>
                <p class="lead text-light opacity-75 mb-5">
                    Consulta las preguntas frecuentes, visita un módulo informativo o envía tus dudas a través de este formulario. La información recibida ayudará a identificar temas de interés ciudadano durante la etapa de socialización. 
                </p>
            </div>
            <div class="col-lg-8"></div>
        </div>
    </div>
</header>

<section class="py-5 section-white">
    <div class="container py-4">
        <div class="row g-4" id="contact">
            
            <div class="col-lg-7">
                <div class="card border-0 bg-light p-4 rounded-4 shadow-sm">
                    <h5 class="fw-bold text-brand-dark mb-4">Envía tu mensaje o duda</h5>
                    <form action="procesar-contacto.php" method="POST" class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Nombre</label>
                                <input type="text" name="nombre" class="form-control rounded-3" placeholder="Tu nombre completo" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Municipio / Colonia</label>
                                <input type="text" name="colonia" class="form-control rounded-3" placeholder="Jardines del Sol, etc." required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label small fw-bold text-muted">Grupo, asociación a la que pertenece (opcional)</label>
                                <input type="text" name="grup_asociacion" class="form-control rounded-3" placeholder="Asociación de Vecinos, etc.">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Correo electrónico</label>
                                <input type="email" name="email" class="form-control rounded-3" placeholder="tu@correo.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Teléfono (opcional)</label>
                                <input type="tel" name="telefono" class="form-control rounded-3" placeholder="33 3333 3333">
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold text-muted">Pregunta o comentario</label>
                                <textarea name="mensaje" rows="4" class="form-control rounded-3" placeholder="Cuéntanos qué necesitas..." required></textarea>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="acepto_terminos" id="terminos" required>
                                    <label class="form-check-label small text-muted" for="terminos">
                                        He leído y acepto el <a href="#" id="linkPrivacidadContacto" data-bs-toggle="modal" data-bs-target="#modalPrivacidad" class="text-success text-decoration-none fw-semibold">aviso de privacidad</a> y los términos y condiciones.
                                    </label>
                                    <div class="invalid-feedback">
                                        Debes aceptar el aviso de privacidad para continuar.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-success w-100 rounded-pill py-2 fw-semibold shadow-sm">Enviar mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <!-- <div class="card border-0 bg-dark text-white p-4 rounded-4 shadow-sm mb-4">
                    <h6 class="fw-bold text-warning mb-3"><i class="bi bi-clock me-2"></i>Horarios de atención</h6>
                    <div class="d-flex justify-content-between border-bottom border-light border-opacity-25 py-2 small">
                        <span>Lunes a viernes</span><span class="fw-semibold">9:00 - 18:00</span>
                    </div>
                    <div class="d-flex justify-content-between border-bottom border-light border-opacity-25 py-2 small">
                        <span>Sábado</span><span class="fw-semibold">10:00 - 14:00</span>
                    </div>
                    <div class="d-flex justify-content-between py-2 small">
                        <span>Domingo</span><span class="fw-semibold text-danger text-uppercase">Cerrado</span>
                    </div>
                </div> -->

                <div class="card border-0 bg-light p-4 rounded-4 shadow-sm text-center">
                    <i class="bi bi-whatsapp text-success display-4 mb-2"></i>
                    <h6 class="fw-bold text-brand-dark mb-1">Resuelve dudas por WhatsApp</h6>
                    <p class="text-muted small mb-3">Atención directa e inmediata.</p>
                    <a href="#" class="btn btn-outline-success rounded-pill fw-semibold shadow-sm w-100">Chatear ahora</a>
                </div>
            </div>

        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modalPrivacidad = document.getElementById('modalPrivacidad');
        const checkboxTerminos = document.getElementById('terminos');
        const linkContacto = document.getElementById('linkPrivacidadContacto');

        // Nos aseguramos de que existan los elementos antes de actuar
        if (modalPrivacidad && checkboxTerminos && linkContacto) {
            
            // Seleccionamos los botones globales usando sus clases
            const btnAceptar = modalPrivacidad.querySelector('.btn-success');
            const btnRechazar = modalPrivacidad.querySelector('.btn-outline-secondary');
            
            let vieneDelFormulario = false;

            // 1. Detectar quién disparó el modal de Bootstrap
            modalPrivacidad.addEventListener('show.bs.modal', function(event) {
                // event.relatedTarget contiene el elemento HTML que recibió el clic
                if (event.relatedTarget === linkContacto) {
                    vieneDelFormulario = true;
                } else {
                    vieneDelFormulario = false;
                }
            });

            // 2. Interceptar el botón "Aceptar"
            if (btnAceptar) {
                btnAceptar.addEventListener('click', function(event) {
                    if (vieneDelFormulario) {
                        // Bloqueamos el enlace externo a KoboToolbox de forma segura (OWASP)
                        event.preventDefault(); 
                        
                        // Activamos la casilla
                        checkboxTerminos.checked = true; 
                        
                        // Cerramos el modal
                        const modalInstance = bootstrap.Modal.getInstance(modalPrivacidad) || bootstrap.Modal.getOrCreateInstance(modalPrivacidad);
                        modalInstance.hide();
                    }
                    // Si vieneDelFormulario es false (ej. clic desde la barra superior), se comportará normal y abrirá la pestaña.
                });
            }

            // 3. Interceptar el botón "Rechazar"
            if (btnRechazar) {
                btnRechazar.addEventListener('click', function(event) {
                    if (vieneDelFormulario) {
                        // Bloqueamos la redirección a index.php que tiene el footer global
                        event.preventDefault(); 
                        
                        // Desactivamos la casilla
                        checkboxTerminos.checked = false; 
                        
                        // Cerramos el modal
                        const modalInstance = bootstrap.Modal.getInstance(modalPrivacidad) || bootstrap.Modal.getOrCreateInstance(modalPrivacidad);
                        modalInstance.hide();
                    }
                });
            }
        }
    });
</script>

<?php include 'footer.php'; ?>