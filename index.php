<?php
include "data/artworks.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artist Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts (example) -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Inter:wght@300;400&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- ================= NAVBAR ================= -->
<nav class="navbar">
    <div class="logo">VLKA ART</div>

    <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#featured">Featured</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>

</nav>

<!-- ================= HERO ================= -->
<section class="hero" id="home">

    <div class="hero-media">
        <img src="images/hero1.jpg" class="hero-image active" alt="">
        <img src="images/hero2.jpg" class="hero-image" alt="">
        <img src="images/hero3.jpg" class="hero-image" alt="">
    </div>

    <div class="hero-content">
        <h1>VLKA ART</h1>
        <p>Contemporary Visual Artist</p>
        <a href="#portfolio" class="btn">View Portfolio</a>
    </div>

    <div class="scroll-down">↓</div>
</section>


<!-- ================= FEATURED WORKS ================= -->
<section class="featured" id="featured">
    <h2>Featured Works</h2>

    <div class="gallery">
        <?php foreach ($artworks as $art): ?>
            <div class="art-card">
                <img src="<?= $art['image']; ?>" alt="<?= $art['title']; ?>">
                <div class="overlay">
                    <h3><?= $art['title']; ?></h3>
                    <span><?= $art['year']; ?> · <?= $art['category']; ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- ================= PORTFOLIO ================= -->
<section class="portfolio" id="portfolio">
    <h2>Portfolio</h2>

    <div class="filters">
        <button data-filter="all">All</button>
        <button data-filter="Painting">Painting</button>
        <button data-filter="Digital">Digital</button>
        <button data-filter="Photography">Photography</button>
    </div>

    <div class="gallery">
        <?php foreach ($artworks as $art): ?>
            <div class="art-card" data-category="<?= $art['category']; ?>">
                <img src="<?= $art['image']; ?>" alt="<?= $art['title']; ?>">
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- ================= ABOUT ================= -->
<section class="about" id="about">
    <div class="about-image">
        <img src="images/artist.jpg" alt="Artist portrait">
    </div>

    <div class="about-content">
        <h2>About the Artist</h2>
        <p>
            This is the artist statement. A short, poetic description of inspiration,
            philosophy, and creative direction. Keep it human and timeless.
        </p>
        <p>
            Education, exhibitions, awards, and background can be listed here.
        </p>
    </div>
</section>

<!-- ================= EXHIBITIONS ================= -->
<section class="exhibitions">
    <h2>Selected Exhibitions</h2>
    <ul>
        <li><strong>2024</strong> — Modern Forms, Berlin</li>
        <li><strong>2023</strong> — Abstract Lines, Paris</li>
        <li><strong>2022</strong> — Digital Horizons, Tokyo</li>
    </ul>
</section>

<!-- ================= CONTACT ================= -->
<section class="contact" id="contact">
    <h2>Contact</h2>

    <form method="post" action="#">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>

    <div class="contact-links">
        <a href="#">Instagram</a>
        <a href="#">Behance</a>
        <a href="#">ArtStation</a>
    </div>
</section>

<!-- ================= FOOTER ================= -->
<footer class="footer">
    <p>© 2025 VLKA ART</p>
    <p class="signature">“Art is the silence between forms.”</p>
</footer>

<!-- Scripts -->
<script src="js/main.js"></script>
</body>
</html>
