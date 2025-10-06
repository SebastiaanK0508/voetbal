<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De Voetbal Site: Hoofdpagina</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="main-header">
        <div class="header-content">
            <h1 class="site-title">De Voetbal Site</h1>
            <nav class="main-nav">
                <a href="index.php" class="nav-item active">Home</a>
                <a href="hetspel.php" class="nav-item">Het Spel</a>
                <a href="nieuws.php" class="nav-item">Nieuws</a>
                <a href="competities.php" class="nav-item">Competities</a>
                <a href="eredivisie.php" class="nav-item">Eredivisie</a>
                <a href="contact.php" class="nav-item">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero-section">
            <div class="hero-content">
                <h2>De Passie van Voetbal</h2>
                <p>Volg het laatste nieuws, uitslagen en de grootste competities, van de Eredivisie tot de Champions League.</p>
                <a href="nieuws.php" class="hero-button">Bekijk al het nieuws</a>
            </div>
        </section>

        <section class="info-grid-section">
            <div class="info-grid-item">
                <i class="icon-live">⚽</i>
                <h3>Live Uitslagen</h3>
                <p>Blijf op de hoogte van de scores van alle lopende wedstrijden, minuut na minuut.</p>
                <a href="#" class="grid-link">Bekijk de scores &rarr;</a>
            </div>
            <div class="info-grid-item">
                <i class="icon-news">📰</i>
                <h3>Topverhalen</h3>
                <p>Lees de meest besproken verhalen van dit moment, inclusief interviews en analyses.</p>
                <a href="#" class="grid-link">Naar de topverhalen &rarr;</a>
            </div>
            <div class="info-grid-item">
                <i class="icon-standings">🏆</i>
                <h3>Standen</h3>
                <p>De actuele standen en statistieken van de Eredivisie en andere competities.</p>
                <a href="#" class="grid-link">Bekijk de standen &rarr;</a>
            </div>
        </section>
        
        <section class="featured-articles-section">
            <h2 class="section-title">Uitgelichte Artikelen</h2>
            <div class="articles-grid">
                <article class="article-card">
                    <img class="article-img" src="images/goal.jpg" alt="Een voetballer die een doelpunt viert.">
                    <div class="article-content">
                        <h3>Sensatie in de Eredivisie: Nieuwe topfavoriet?</h3>
                        <p>Lees meer over de verrassende prestaties van dit seizoen en wie de titelrace gaat domineren.</p>
                        <a href="#" class="read-more">Lees verder →</a>
                    </div>
                </article>
                <article class="article-card">
                    <img class="article-img" src="images/transfer.jpg" alt="Twee handen schudden om een contract te bezegelen.">
                    <div class="article-content">
                        <h3>Transfergeruchten: Grote namen op de radar</h3>
                        <p>We duiken in de meest besproken transferverhalen en de spelers die op het punt staan van club te wisselen.</p>
                        <a href="#" class="read-more">Lees verder →</a>
                    </div>
                </article>
            </div>
        </section>

    </main>

    <footer class="main-footer">
        <p>&copy; 2025 Voetbal Site. Alle rechten voorbehouden.</p>
    </footer>

</body>
</html>