/**
 * NEXGEN - Główne skrypty i animacje
 * Kontroluje efekty Scroll Reveal ("pojawianie się") i interakcje.
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Inicjalizacja Intersection Observer do efektu "Reveal on Scroll"
    // Efekt ten jest kluczowy dla osiągnięcia "Apple-like feel".
    const revealElements = document.querySelectorAll('.reveal-text');
    
    const revealCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active'); // Dodaj klasę aby odpalić CSS transition
                // Opcjonalnie: odepnij observer jeśli animacja ma zagrać raz
                // observer.unobserve(entry.target); 
            }
        });
    };

    const revealOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15 // 15% elementu musi być widoczne
    };

    const observer = new IntersectionObserver(revealCallback, revealOptions);

    revealElements.forEach(el => {
        observer.observe(el);
    });

    // Wymuś natychmiastowe pokazanie elementów startowych na górze ekranu
    // Żeby Hero wczytało się pięknie z animacją przy starcie.
    setTimeout(() => {
        document.querySelectorAll('.hero .reveal-text').forEach(el => {
            el.classList.add('active');
        });
    }, 100);

    // 2. Magnetyczne przyciski (Hover Effect)
    // Tworzy poczucie "żywego" i zaawansowanego interfejsu
    const magneticBtns = document.querySelectorAll('.magnetic-btn');

    magneticBtns.forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            // Oblicz pozycję kursora względem środka przycisku
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            // Subtelne przesunięcie (mnożnik 0.2 i 0.4)
            btn.style.transform = `translate(${x * 0.2}px, ${y * 0.4}px) scale(1.05)`;
        });

        btn.addEventListener('mouseleave', () => {
            // Zresetuj do oryginalnej pozycji z cssowym transition
            btn.style.transform = '';
        });
    });

});
