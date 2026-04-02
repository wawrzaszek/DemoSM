# NexGen - Premium Web Development Agency Demo

Projekt demonstracyjny luksusowej strony internetowej typu "One-Page Portfolio" dla agencji zajmującej się nowoczesnym Web Designem. Projekt wyróżnia się potężną płynnością, dużą ilością przestrzeni, wyrafinowaną typografią (styl Apple / Dolina Krzemowa) i "żywymi", magnetycznymi interfejsami.

## 🚀 Technologie
* **Struktura:** HTML5 / PHP 8.x (dla użycia modułowych sekcji)
* **Style:** CSS3 Variables, Glassmorphism, Advanced Pseudo-selectors
* **Mikrointerakcje:** Czysty JavaScript (ES6+), `IntersectionObserver` 60FPS

## ✨ Główne Funkcje
* **Modularność (PHP):** Cały widok pobiera fragmenty (header, footer, sections) dzięki `include`, tak jak w prawdziwych wielkich projektach.
* **Scroll Reveal:** Każdy element płynnie ukazuje się przy scrollowaniu, wymuszając zaangażowanie uwagi użytkownika.
* **Magnetic UI:** Przyciski z magnetycznym przyciąganiem tworzące wrażenie ultra nowoczesnego interfejsu (tak zwanego "alive feel").
* **Dark Mode Native:** Interfejs mocno stawia na popularne w Web3 i SaaSach "głębokie czernie" przełamane subtelnym gradientem (neon glow).

---

## 🛠️ Jak uruchomić projekt na Windows?

Aby aplikacja odczytała struktury używające PHP (`<?php ... ?>`), potrzebujesz parsera (lokalnego serwera). Zauważyłem, że możesz go nie mieć obecnie zainstalowanego globalnie w Menedżerze Zadań/Terminalu. Masz do wyboru poniższe opcje:

### Opcja 1: Użycie gotowej paczki (Polecane dla szybkich startów)
Zainstaluj oprogramowanie takie jak **[Laragon](https://laragon.org/)** lub **[XAMPP](https://www.apachefriends.org/pl/index.html)**. Wystarczy przenieść folder `DemoSM` do katalogu `laragon/www` lub `xampp/htdocs`.

### Opcja 2: Instalacja PHP w systemie (Dla Terminala)
1. Pobierz czyste pliki binarne **[PHP for Windows](https://windows.php.net/download/)** (wersja Non-Thread Safe z plikiem ZIP).
2. Wypakuj je (np. do `C:\php`).
3. Dodaj ścieżkę (np. `C:\php`) do zmiennych środowiskowych systemów Windows (`Path`).
4. Uruchom w tym folderze polecenie:
   ```bash
   php -S localhost:8000
   ```
5. Zobaczysz działającą stronę pod adresem: `http://localhost:8000`

### Opcja 3: Rozszerzenie w edytorze kodu (PHP Server)
Jeśli korzystasz z Visual Studio Code, zainstaluj wtyczkę o nazwie **"PHP Server"** (autor: brapifra). Będzie ona jednak także wymagać zdefiniowania ścieżki do zainstalowanego przed chwilą programu PHP.

## 📝 Zespół
Zaprojektowano z ogromną pasją przez **Twój Agent AI na platformie Gemini** dla **Szymon Mosor**.
_"Tworzymy rozwiązania z pazurem"_.
