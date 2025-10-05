<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voetbal Site: Eredivisie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="main-header">
        <div class="header-content">
            <h1 class="site-title">Voetbal Site</h1>
            <nav class="main-nav">
                <a href="index.php" class="nav-item">Home</a>
                <a href="hetspel.php" class="nav-item">Het Spel</a>
                <a href="nieuws.php" class="nav-item">Nieuws</a>
                <a href="competities.php" class="nav-item">Competities</a>
                <a href="eredivisie.php" class="nav-item active">Eredivisie</a>
                <a href="contact.php" class="nav-item">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero-section eredivisie-hero">
            <div class="hero-content">
                <h2>Eredivisie</h2>
                <p class="hero-subtitle">Alles over de Nederlandse topcompetitie: uitslagen, nieuws en clubs.</p>
                <a href="nieuws.php" class="hero-button">Bekijk al het nieuws</a>
            </div>
        </section>

        <section class="live-scores-section">
            <div class="info-grid-section">
                <div class="info-grid-item">
                    <i class="icon-live">⚽</i>
                    <h3>Live Uitslagen</h3>
                    <p>Blijf op de hoogte van de scores van alle lopende wedstrijden, minuut na minuut.</p>
                    <a href="#" class="grid-link">Bekijk de scores &rarr;</a>
                </div>
            </div>
        </section>

        <section class="news-section">
            <div class="section-header">
                <h2>Laatste Eredivisie Nieuws</h2>
            </div>
            <div class="news-grid-section">
                
                <article class="news-item">
                    <img src="img/nieuws_ajax_psv.jpg" alt="Ajax-PSV">
                    <div class="news-content">
                        <h3>Klassieker In Zicht: Analyse van de Topvorm</h3>
                        <p>Analisten voorspellen een zinderende strijd nu de topclubs hun beste elftallen opstellen...</p>
                        <a href="nieuws-artikel-1.php" class="news-link">Lees meer &rarr;</a>
                    </div>
                </article>

                <article class="news-item">
                    <img src="img/nieuws_feyenoord.jpg" alt="Feyenoord Speler">
                    <div class="news-content">
                        <h3>Transfergeruchten: Buitenlandse Interesse voor Talent</h3>
                        <p>Een sleutelspeler van Feyenoord staat in de belangstelling van een Premier League club. De clubleiding reageert...</p>
                        <a href="nieuws-artikel-2.php" class="news-link">Lees meer &rarr;</a>
                    </div>
                </article>

                <article class="news-item">
                    <img src="img/nieuws_utrecht.jpg" alt="FC Utrecht Wedstrijd">
                    <div class="news-content">
                        <h3>Verrassende Uitslag: Utrecht Verslaat de Subtop</h3>
                        <p>FC Utrecht heeft een belangrijke zege geboekt in eigen huis tegen de nummer 4 van de ranglijst...</p>
                        <a href="nieuws-artikel-3.php" class="news-link">Lees meer &rarr;</a>
                    </div>
                </article>

            </div>
            <div class="view-all-button">
                 <a href="nieuws.php" class="hero-button">Meer Eredivisie Nieuws</a>
            </div>
        </section>

        <section class="clubs-section">
            <div class="section-header">
                <h2>De Eredivisie Clubs</h2>
                <p>Bekijk de profielen, selecties en laatste wedstrijden van alle 18 teams.</p>
            </div>
            <div class="club-grid-section info-grid-section">
                
                <a href="club_ajax.php" class="club-item info-grid-item">
                    <img src="img/logo_ajax.png" alt="Ajax Logo" class="club-logo">
                    <h3>AFC Ajax</h3>
                    <p>Amsterdam</p>
                </a>
                
                <a href="club_psv.php" class="club-item info-grid-item">
                    <img src="img/logo_psv.png" alt="PSV Logo" class="club-logo">
                    <h3>PSV</h3>
                    <p>Eindhoven</p>
                </a>
                
                <a href="club_feyenoord.php" class="club-item info-grid-item">
                    <img src="img/logo_feyenoord.png" alt="Feyenoord Logo" class="club-logo">
                    <h3>Feyenoord</h3>
                    <p>Rotterdam</p>
                </a>

                <a href="club_az.php" class="club-item info-grid-item">
                    <img src="img/logo_az.png" alt="AZ Logo" class="club-logo">
                    <h3>AZ</h3>
                    <p>Alkmaar</p>
                </a>

                <a href="club_utrecht.php" class="club-item info-grid-item">
                    <img src="img/logo_utrecht.png" alt="FC Utrecht Logo" class="club-logo">
                    <h3>FC Utrecht</h3>
                    <p>Utrecht</p>
                </a>
                
                <a href="club_twente.php" class="club-item info-grid-item">
                    <img src="img/logo_twente.png" alt="FC Twente Logo" class="club-logo">
                    <h3>FC Twente</h3>
                    <p>Enschede</p>
                </a>

                </div>
            <div class="view-all-button">
                 <a href="clubs.php#eredivisie" class="hero-button secondary-button">Alle 18 Clubs &rarr;</a>
            </div>
        </section>

    </main>
    <footer class="main-footer">
        <p>&copy; 2025 Voetbal Site. Alle rechten voorbehouden.</p>
    </footer>
</body>
</html>