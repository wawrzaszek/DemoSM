<?php
// Główne wejście do aplikacji - używamy PHP do budowy modularnej

// Obsługa formularza kontaktowego
$status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    if (!empty($name) && !empty($email) && !empty($message)) {
        // Zapis do lokalnego pliku (fallback/logi)
        $log_entry = "[" . date("Y-m-d H:i:s") . "] Name: $name, Email: $email, Message: $message\n";
        file_put_contents("submissions.log", $log_entry, FILE_APPEND);
        
        // TODO: Tutaj trafi funkcja wysyłająca powiadomienie po podaniu przez użytkownika adresu
        // notify_user($name, $email, $message);
        
        $status = "success";
    } else {
        $status = "error";
    }
}

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
                Super strony internetowe dla firm, które chcą wyglądać jak liderzy z Doliny Krzemowej. 
                Płynne animacje, potężna optymalizacja i design, który sprzedaje.
            </p>
            <div class="hero-actions reveal-text delay-2">
                <a href="#portfolio" class="btn-primary magnetic-btn">Zobacz moje prace</a>
                <a href="#services" class="btn-secondary">Moje usługi</a>
            </div>
        </div>
    </section>

    <?php include 'sections/services.php'; ?>
    <?php include 'sections/portfolio.php'; ?>
    <?php include 'sections/contact.php'; ?>
</main>

<?php
// Dołączamy stopkę strony
include 'footer.php';
?>
