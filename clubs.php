<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voetbal Site: Competities</title>
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
                <a href="competities.php" class="nav-item active">Competities</a>
                <a href="eredivisie.php" class="nav-item">Eredivisie</a>
                <a href="contact.php" class="nav-item">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero-section competities-hero">
            <div class="hero-content">
                <h2>...-Clubs</h2>
                <a href="#nationaal" class="hero-button">Bekijk de Clubs</a>
            </div>
        </section>

        <section class="clubs-section" id="eredivisie_clubs">
            <div class="section-header">
                <h2>Alle Eredivisie Clubs</h2>
                <p>Bekijk de profielen, selecties en laatste wedstrijden van alle 18 teams in één overzicht.</p>
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
                 <a href="#nationaal" class="hero-button secondary-button">Terug naar Competities &uarr;</a>
            </div>
        </section>
        
    </main>
    <footer class="main-footer">
        <p>&copy; 2025 Voetbal Site. Alle rechten voorbehouden.</p>
    </footer>
</body>
</html>