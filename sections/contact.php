<!-- Sekcja Kontaktowa (Contact) -->
<section id="contact-form" class="contact section-padding">
    <div class="container contact-container">
        <div class="contact-text reveal-text">
            <h2 class="text-gradient">Zacznijmy projekt.</h2>
            <p>Napisz do mnie. Odpowiem w ciągu 24 godzin z pomysłem na Twoją obecność w sieci.</p>
        </div>
        
        <div class="contact-form-wrapper reveal-text delay-1">
            <?php if ($status === "success"): ?>
                <div class="success-message" style="padding: 40px; text-align: center; background: rgba(0, 255, 136, 0.1); border: 1px solid #00ff88; border-radius: 12px;">
                    <h3 style="color: #00ff88; margin-bottom: 10px;">Dziękuję za wiadomość!</h3>
                    <p>Odezwiemy się w ciągu 24 godzin.</p>
                </div>
            <?php else: ?>
                <?php if ($status === "error"): ?>
                    <p style="color: #ff4444; margin-bottom: 15px;">Proszę wypełnić wszystkie pola formularza.</p>
                <?php endif; ?>
                
                <form action="index.php#contact-form" method="POST" class="contact-form">
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
            <?php endif; ?>
        </div>
    </div>
</section>
