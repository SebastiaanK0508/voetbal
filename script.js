const API_KEY = '8c3951f1f91b458292b208c7c32a74bc'; 
const API_BASE_URL = 'https://api.football-data.org/v4/competitions/DED/matches'; 

async function fetchFinishedResults() {
    
    const scoresDiv = document.getElementById('livescores');
    // Laadbericht tonen
    scoresDiv.innerHTML = '<p class="text-center text-green-600 font-semibold py-4">Uitslagen worden geladen...</p>';
    
    const STATUS_FILTERS = 'FINISHED'; 
    const API_URL_RESULTS = `${API_BASE_URL}?status=${STATUS_FILTERS}`;

    const options = {
        method: 'GET',
        headers: {
            'X-Auth-Token': API_KEY,
        }
    };
    try {
        const response = await fetch(API_URL_RESULTS, options);

        if (!response.ok) {
            const errorText = await response.text();
            throw new Error(`HTTP fout! Status: ${response.status}. ${errorText || 'Onbekende fout.'}`);
        }

        const data = await response.json(); 
        displayResults(data); 

    } catch (error) {
        scoresDiv.innerHTML = 
            `<div class="p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                <h3 class="font-bold">Fout bij het laden van Uitslagen</h3>
                <p>Er ging iets mis met de API-verbinding. Controleer de API-sleutel en het abonnement.</p>
                <p class="mt-2 text-sm">Foutdetails: ${error.message}</p>
            </div>`;
        console.error('Er is een API fout opgetreden:', error);
    }
}

function displayResults(apiData) {
    const scoresDiv = document.getElementById('livescores');
    let finishedMatches = apiData.matches || [];
    
    if (finishedMatches.length === 0) {
        scoresDiv.innerHTML = `<p class="text-center py-8 text-gray-500">Er zijn (nog) geen afgeronde Eredivisie-wedstrijden gevonden.</p>`;
        return;
    }

    const matchesByMatchday = finishedMatches.reduce((acc, match) => {
        const matchday = match.matchday || 'Onbekende Speelronde'; 
        
        if (!acc[matchday]) {
            acc[matchday] = [];
        }
        acc[matchday].push(match);
        return acc;
    }, {});

    const sortedMatchdays = Object.keys(matchesByMatchday)
        .sort((a, b) => parseInt(b) - parseInt(a)); 
    let finishedHtml = '<h2 class="text-xl font-extrabold text-gray-800 mb-4 pt-2">Definitieve Uitslagen</h2>';
    sortedMatchdays.forEach(matchday => {
        const matches = matchesByMatchday[matchday];
        matches.sort((a, b) => new Date(b.utcDate) - new Date(a.utcDate));
        finishedHtml += `
            <div class="mt-6 mb-2">
                <h3 class="text-lg font-bold text-gray-700 bg-gray-100 p-2 rounded-md border-l-4 border-green-600">
                    Speelronde ${matchday}
                </h3>
            </div>
            <ul class="divide-y divide-gray-100 border border-gray-200 rounded-lg">
        `;
        
        matches.forEach(match => {
            const homeTeam = match.homeTeam?.name || 'Thuis';
            const awayTeam = match.awayTeam?.name || 'Uit';
            // Scores
            const homeScore = match.score?.fullTime?.home !== null ? match.score.fullTime.home : '0';
            const awayScore = match.score?.fullTime?.away !== null ? match.score.fullTime.away : '0';
            // Datum/Tijd voor extra duidelijkheid
            const matchTime = new Date(match.utcDate).toLocaleDateString('nl-NL', { day: 'numeric', month: 'short' });

            finishedHtml += `
                <li class="flex items-center py-3 px-3 hover:bg-gray-50 transition duration-150">
                    <span class="w-2/5 text-gray-600 truncate">${homeTeam}</span>
                    <span class="w-1/5 text-center text-xl font-extrabold text-gray-900">
                        ${homeScore} - ${awayScore}
                    </span>
                    <span class="w-2/5 text-right text-gray-600 truncate">
                        ${awayTeam}
                        <span class="text-xs block text-gray-400 mt-0.5">${matchTime}</span>
                    </span>
                </li>
            `;
        });
        finishedHtml += '</ul>';
    });
    scoresDiv.innerHTML = finishedHtml;
}

window.onload = function() {
    fetchFinishedResults();
    setInterval(fetchFinishedResults, 900000); 
}