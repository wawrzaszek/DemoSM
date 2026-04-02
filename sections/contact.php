<!-- Sekcja Kontaktowa (Contact) -->
<section id="contact-form" class="contact section-padding">
    <div class="container contact-container">
        <div class="contact-text reveal-text">
            <h2 class="text-gradient">Zacznijmy projekt.</h2>
            <p>Napisz do mnie. Odpowiem w ciągu 24 godzin z pomysłem na Twoją obecność w sieci.</p>
        </div>
        
        <div class="contact-form-wrapper reveal-text delay-1">
            <form action="index.php" method="POST" class="contact-form">
                <div class="input-group">
                    <input type="text" name="name" id="name" required placeholder="Twoje imię / Firma">
                </div>
                <div class="input-group">
                    <input type="email" name="email" id="email" required placeholder="Adres E-mail">
                </div>
                <div class="input-group">
                    <textarea name="message" id="message" rows="4" required placeholder="Opisz wizję swojego projektu..."></textarea>
                </div>
                <button type="submit" class="btn-primary magnetic-btn" style="width: 100%; border:none; cursor:pointer;">
                    Wyślij zapytanie
                </button>
            </form>
        </div>
    </div>
</section>
