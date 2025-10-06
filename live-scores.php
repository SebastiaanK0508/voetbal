<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Voetbal Scores & Recente Uitslagen</title>
    <!-- Tailwind CSS voor mooie en responsieve styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Custom styles voor een sportieve look */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }
        .card {
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .status-live {
            color: #ef4444; /* Rood */
            font-weight: 600;
        }
        .status-finished {
            color: #4b5563; /* Grijs */
            font-size: 0.9em;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            padding: 12px 0;
            border-bottom: 1px dashed #e5e7eb;
        }
        li:last-child {
            border-bottom: none;
        }
    </style>
</head>
    <header class="main-header">
        <div class="header-content">
            <h1 class="site-title">De Voetbal Site</h1>
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
    <div class="max-w-3xl mx-auto">

        <div class="card p-6 rounded-   ">
            <div id="livescores">
                <p class="text-center text-gray-500">Laden van voetbaldata...</p>
            </div>
        </div>
            <script src="script.js"></script>
    </div>
</body>
</html>
