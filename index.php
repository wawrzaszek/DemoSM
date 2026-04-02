<?php
// Główne wejście do aplikacji - używamy PHP do budowy modularnej
// Dołączamy nagłówek strony
include 'header.php';
?>

<!-- Sekcja Główna (Hero) -->
<main>
    <section class="hero" id="home">
        <div class="container">
            <!-- Animowane pojawienie się tekstu -->
            <h1 class="hero-title reveal-text">
                Tworzymy Przyszłość.<br>
                <span class="text-gradient">Teraz.</span>
            </h1>
            <p class="hero-subtitle reveal-text delay-1">
                Zajebiste strony internetowe dla firm, które chcą wyglądać jak liderzy z Doliny Krzemowej. 
                Płynne animacje, potężna optymalizacja i design, który sprzedaje.
            </p>
            <div class="hero-actions reveal-text delay-2">
                <a href="#portfolio" class="btn-primary magnetic-btn">Zobacz nasze prace</a>
                <a href="#services" class="btn-secondary">Nasze usługi</a>
            </div>
        </div>
    </section>
</main>

<?php
// Dołączamy stopkę strony
include 'footer.php';
?>
