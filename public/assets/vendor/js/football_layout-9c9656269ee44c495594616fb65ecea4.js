document.addEventListener('DOMContentLoaded', function () {
    const formationSelect = document.getElementById('formationSelect');
    const pitch = document.querySelector('.pitch');
    const playerList = document.getElementById('playerList');

    // Formation definitions: { formation: [{ role, top%, left% }]}
    const formations = {
        '4-4-2': [
            { role: 'GK', top: 90, left: 50 },
            { role: 'RB', top: 70, left: 20 },
            { role: 'CB', top: 70, left: 40 },
            { role: 'CB', top: 70, left: 60 },
            { role: 'LB', top: 70, left: 80 },
            { role: 'RM', top: 50, left: 20 },
            { role: 'CM', top: 50, left: 40 },
            { role: 'CM', top: 50, left: 60 },
            { role: 'LM', top: 50, left: 80 },
            { role: 'ST', top: 30, left: 40 },
            { role: 'ST', top: 30, left: 60 }
        ],
        '4-2-3-1': [
            { role: 'GK', top: 90, left: 50 },
            { role: 'RB', top: 70, left: 20 },
            { role: 'CB', top: 70, left: 40 },
            { role: 'CB', top: 70, left: 60 },
            { role: 'LB', top: 70, left: 80 },
            { role: 'CDM', top: 55, left: 40 },
            { role: 'CDM', top: 55, left: 60 },
            { role: 'CAM', top: 40, left: 50 },
            { role: 'RW', top: 40, left: 20 },
            { role: 'LW', top: 40, left: 80 },
            { role: 'ST', top: 20, left: 50 }
        ],
        '4-3-3': [
            { role: 'GK', top: 90, left: 50 },
            { role: 'RB', top: 70, left: 20 },
            { role: 'CB', top: 70, left: 40 },
            { role: 'CB', top: 70, left: 60 },
            { role: 'LB', top: 70, left: 80 },
            { role: 'CM', top: 50, left: 30 },
            { role: 'CM', top: 50, left: 50 },
            { role: 'CM', top: 50, left: 70 },
            { role: 'RW', top: 30, left: 20 },
            { role: 'ST', top: 30, left: 50 },
            { role: 'LW', top: 30, left: 80 }
        ],
        '3-5-2': [
            { role: 'GK', top: 90, left: 50 },
            { role: 'CB', top: 70, left: 30 },
            { role: 'CB', top: 70, left: 50 },
            { role: 'CB', top: 70, left: 70 },
            { role: 'RWB', top: 50, left: 20 },
            { role: 'CM', top: 50, left: 40 },
            { role: 'CM', top: 50, left: 60 },
            { role: 'LWB', top: 50, left: 80 },
            { role: 'CAM', top: 30, left: 50 },
            { role: 'ST', top: 20, left: 40 },
            { role: 'ST', top: 20, left: 60 }
        ],
        '5-3-2': [
            { role: 'GK', top: 90, left: 50 },
            { role: 'CB', top: 70, left: 20 },
            { role: 'CB', top: 70, left: 40 },
            { role: 'CB', top: 70, left: 60 },
            { role: 'RWB', top: 60, left: 10 },
            { role: 'LWB', top: 60, left: 90 },
            { role: 'CM', top: 50, left: 30 },
            { role: 'CM', top: 50, left: 50 },
            { role: 'CM', top: 50, left: 70 },
            { role: 'ST', top: 30, left: 40 },
            { role: 'ST', top: 30, left: 60 }
        ]
    };

    // Role mappings: Map poste to formation roles
    const roleMappings = {
        'GK': ['GK'],
        'RB': ['RB', 'RWB'],
        'LB': ['LB', 'LWB'],
        'CB': ['CB', 'SW'],
        'DM': ['CDM'],
        'CM': ['CM', 'CAM'],
        'RM': ['RM', 'RW'],
        'LM': ['LM', 'LW'],
        'ST': ['ST']
    };

    // Load formation on page load
    renderFormation(formationSelect.value);

    // Handle formation change
    formationSelect.addEventListener('change', function () {
        renderFormation(this.value);
    });

    // Render formation on pitch
    function renderFormation(formation) {
        pitch.innerHTML = ''; // Clear previous positions
        const positions = formations[formation];

        // Get available players
        const players = Array.from(playerList.querySelectorAll('.list-group-item')).map(item => ({
            id: item.dataset.id,
            poste: item.dataset.poste,
            name: item.textContent.split('(')[0].trim()
        }));

        positions.forEach(pos => {
            // Find a matching player
            let player = null;
            for (let poste in roleMappings) {
                if (roleMappings[poste].includes(pos.role)) {
                    player = players.find(p => p.poste === poste && !p.used);
                    if (player) {
                        player.used = true; // Mark as used
                        break;
                    }
                }
            }

            // Create position element
            const positionDiv = document.createElement('div');
            positionDiv.className = 'position';
            positionDiv.style.top = `${pos.top}%`;
            positionDiv.style.left = `${pos.left}%`;
            positionDiv.textContent = player ? player.name : pos.role;
            positionDiv.dataset.role = pos.role;
            pitch.appendChild(positionDiv);
        });
    }

    // Handle player selection (optional drag-and-drop)
    playerList.addEventListener('click', function (e) {
        const item = e.target.closest('.list-group-item');
        if (!item) return;

        const playerPoste = item.dataset.poste;
        const playerName = item.textContent.split('(')[0].trim();

        // Highlight positions that match player's poste
        const positions = pitch.querySelectorAll('.position');
        positions.forEach(pos => {
            const role = pos.dataset.role;
            let isMatch = false;
            for (let poste in roleMappings) {
                if (poste === playerPoste && roleMappings[poste].includes(role)) {
                    isMatch = true;
                    break;
                }
            }
            pos.style.backgroundColor = isMatch ? 'rgba(0, 128, 0, 0.7)' : 'rgba(0, 0, 0, 0.7)';
        });
    });
});