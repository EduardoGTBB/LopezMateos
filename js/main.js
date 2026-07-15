/* ==========================================================================
   main.js - Scripts globales del Plan Integral López Mateos
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Inicializamos la detección de anclas al cargar la página
    initDeepLinkCards();
    
    // 2. Escuchamos si el usuario cambia el ancla navegando en la misma página
    window.addEventListener('hashchange', initDeepLinkCards);

    // 3. Lógica para cerrar la tarjeta activa al hacer clic afuera
    document.addEventListener('click', function(event) {
        const activeCards = document.querySelectorAll('.card-is-active');
        
        if (activeCards.length > 0) {
            const clickedInsideActiveCard = event.target.closest('.card-is-active');

            if (!clickedInsideActiveCard) {
                activeCards.forEach(card => {
                    card.classList.remove('card-is-active');
                    
                    const bsCollapseEl = card.querySelector('.collapse.show');
                    if (bsCollapseEl) {
                        const bsCollapse = bootstrap.Collapse.getInstance(bsCollapseEl);
                        if (bsCollapse) {
                            bsCollapse.hide();
                        }
                    }
                });
                
                if (window.location.hash) {
                    history.replaceState(null, null, window.location.pathname + window.location.search);
                }
            }
        }
    });
});

// Función principal de navegación segura
function initDeepLinkCards() {
    const rawHash = window.location.hash;
    
    if (/^#[a-zA-Z0-9_-]+$/.test(rawHash)) {
        
        const targetElement = document.querySelector(rawHash);
        
        if (targetElement) {
            // Siempre limpiamos cualquier tarjeta activa anterior
            document.querySelectorAll('.card-is-active').forEach(card => {
                card.classList.remove('card-is-active');
                const prevCollapseEl = card.querySelector('.collapse.show');
                if(prevCollapseEl){
                     const prevCollapse = bootstrap.Collapse.getInstance(prevCollapseEl);
                     if(prevCollapse) prevCollapse.hide();
                }
            });

            // 1. VERIFICACIÓN ESTRATÉGICA: ¿Es una sección general o una tarjeta específica?
            let targetCard = null;
            
            // REGLA DE ORO: Si el ID apunta a una <section> entera, NO activamos ninguna tarjeta
            if (targetElement.tagName.toLowerCase() !== 'section') {
                // Si el elemento objetivo ya es una tarjeta
                if (targetElement.classList.contains('card')) {
                    targetCard = targetElement;
                } else {
                    // Si es una columna (.col), buscamos la tarjeta que tiene adentro
                    targetCard = targetElement.querySelector('.card');
                }
            }

            // 2. APLICAR MAGIA VISUAL (Solo si se detectó una tarjeta individual)
            if (targetCard) {
                targetCard.classList.add('card-is-active');
                
                // Abrimos su colapso de Bootstrap si lo tiene
                const bsCollapseEl = targetCard.querySelector('.collapse:not(.show)');
                if (bsCollapseEl) {
                     const bsCollapse = bootstrap.Collapse.getOrCreateInstance(bsCollapseEl);
                     bsCollapse.show();
                }
            }

            // 3. SCROLL SUAVE
            // Esperamos un momento para que el colapso (si existe) se abra y el cálculo de altura sea exacto
            setTimeout(() => {
                // Ajustamos el margen dependiendo de si vamos a una tarjeta pequeña (-150) o a una sección grande (-100)
                const yOffset = targetCard ? -150 : -100; 
                const y = targetElement.getBoundingClientRect().top + window.scrollY + yOffset;
                window.scrollTo({top: y, behavior: 'smooth'});
            }, targetCard ? 250 : 50);
        }
    }
}