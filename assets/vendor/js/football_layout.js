const ASSET_URL = '/Uploads/profile_pictures/';

let $stage = null;
let $world = null;
let $terrain = null;
let $team = null;
let $players = null;
let $heading = null;
let $subHeading = null;
let $loading = null;
let $switchBtn = null;
let $switcher = null;
let $saveBtn = null;

const formations = {
    '4-4-2': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'RB', x: -200, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -70, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 70, y: 300 },
        { role: 'Défenseur', roleDetail: 'LB', x: 200, y: 300 },
        { role: 'Milieu', roleDetail: 'RM', x: -200, y: 80 },
        { role: 'Milieu', roleDetail: 'CM', x: -70, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 70, y: 150 },
        { role: 'Milieu', roleDetail: 'LM', x: 200, y: 80 },
        { role: 'Attaquant', roleDetail: 'ST', x: -70, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: 70, y: 20 }
    ],
    '4-3-3': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'RB', x: -200, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -70, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 70, y: 300 },
        { role: 'Défenseur', roleDetail: 'LB', x: 200, y: 300 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 0, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 150 },
        { role: 'Attaquant', roleDetail: 'LW', x: -200, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: 0, y: 20 },
        { role: 'Attaquant', roleDetail: 'RW', x: 200, y: 20 }
    ],
    '3-5-2': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'CB', x: -100, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 0, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 100, y: 300 },
        { role: 'Milieu', roleDetail: 'RM', x: -250, y: 120 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 0, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 150 },
        { role: 'Milieu', roleDetail: 'LM', x: 250, y: 120 },
        { role: 'Attaquant', roleDetail: 'ST', x: -70, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: 70, y: 20 }
    ],
    '3-1-4-2': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'CB', x: -100, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 0, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 100, y: 300 },
        { role: 'Milieu', roleDetail: 'DM', x: 0, y: 220 },
        { role: 'Milieu', roleDetail: 'RM', x: -250, y: 120 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 120 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 120 },
        { role: 'Milieu', roleDetail: 'LM', x: 250, y: 120 },
        { role: 'Attaquant', roleDetail: 'ST', x: -70, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: 70, y: 20 }
    ],
    '3-4-1-2': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'CB', x: -100, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 0, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 100, y: 300 },
        { role: 'Milieu', roleDetail: 'RM', x: -250, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 150 },
        { role: 'Milieu', roleDetail: 'LM', x: 250, y: 150 },
        { role: 'Milieu', roleDetail: 'AM', x: 0, y: 80 },
        { role: 'Attaquant', roleDetail: 'ST', x: -70, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: 70, y: 20 }
    ],
    '3-4-2-1': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'CB', x: -100, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 0, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 100, y: 300 },
        { role: 'Milieu', roleDetail: 'RM', x: -250, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 150 },
        { role: 'Milieu', roleDetail: 'LM', x: 250, y: 150 },
        { role: 'Attaquant', roleDetail: 'SS', x: -100, y: 80 },
        { role: 'Attaquant', roleDetail: 'SS', x: 100, y: 80 },
        { role: 'Attaquant', roleDetail: 'ST', x: 0, y: 20 }
    ],
    '3-4-3': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'CB', x: -100, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 0, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 100, y: 300 },
        { role: 'Milieu', roleDetail: 'RM', x: -250, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 150 },
        { role: 'Milieu', roleDetail: 'LM', x: 250, y: 150 },
        { role: 'Attaquant', roleDetail: 'LW', x: -200, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: 0, y: 20 },
        { role: 'Attaquant', roleDetail: 'RW', x: 200, y: 20 }
    ],
    '3-5-1-1': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'CB', x: -100, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 0, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 100, y: 300 },
        { role: 'Milieu', roleDetail: 'RM', x: -250, y: 120 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 0, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 150 },
        { role: 'Milieu', roleDetail: 'LM', x: 250, y: 120 },
        { role: 'Milieu', roleDetail: 'AM', x: 0, y: 80 },
        { role: 'Attaquant', roleDetail: 'ST', x: 0, y: 20 }
    ],
    '4-1-2-1-2': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'RB', x: -200, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -70, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 70, y: 300 },
        { role: 'Défenseur', roleDetail: 'LB', x: 200, y: 300 },
        { role: 'Milieu', roleDetail: 'DM', x: 0, y: 220 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 150 },
        { role: 'Milieu', roleDetail: 'AM', x: 0, y: 80 },
        { role: 'Attaquant', roleDetail: 'ST', x: -70, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: 70, y: 20 }
    ],
    '4-1-2-3': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'RB', x: -200, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -70, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 70, y: 300 },
        { role: 'Défenseur', roleDetail: 'LB', x: 200, y: 300 },
        { role: 'Milieu', roleDetail: 'DM', x: 0, y: 220 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 150 },
        { role: 'Attaquant', roleDetail: 'LW', x: -200, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: 0, y: 20 },
        { role: 'Attaquant', roleDetail: 'RW', x: 200, y: 20 }
    ],
    '4-1-3-2': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'RB', x: -200, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -70, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 70, y: 300 },
        { role: 'Défenseur', roleDetail: 'LB', x: 200, y: 300 },
        { role: 'Milieu', roleDetail: 'DM', x: 0, y: 220 },
        { role: 'Milieu', roleDetail: 'CM', x: -150, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 0, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 150, y: 150 },
        { role: 'Attaquant', roleDetail: 'ST', x: -70, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: 70, y: 20 }
    ],
    '4-1-4-1': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'RB', x: -200, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -70, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 70, y: 300 },
        { role: 'Défenseur', roleDetail: 'LB', x: 200, y: 300 },
        { role: 'Milieu', roleDetail: 'DM', x: 0, y: 220 },
        { role: 'Milieu', roleDetail: 'RM', x: -250, y: 120 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 120 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 120 },
        { role: 'Milieu', roleDetail: 'LM', x: 250, y: 120 },
        { role: 'Attaquant', roleDetail: 'ST', x: 0, y: 20 }
    ],
    '4-2-1-3': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'RB', x: -200, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -70, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 70, y: 300 },
        { role: 'Défenseur', roleDetail: 'LB', x: 200, y: 300 },
        { role: 'Milieu', roleDetail: 'DM', x: -100, y: 200 },
        { role: 'Milieu', roleDetail: 'DM', x: 100, y: 200 },
        { role: 'Milieu', roleDetail: 'AM', x: 0, y: 120 },
        { role: 'Attaquant', roleDetail: 'LW', x: -200, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: 0, y: 20 },
        { role: 'Attaquant', roleDetail: 'RW', x: 200, y: 20 }
    ],
    '4-2-2-2': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'RB', x: -200, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -70, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 70, y: 300 },
        { role: 'Défenseur', roleDetail: 'LB', x: 200, y: 300 },
        { role: 'Milieu', roleDetail: 'DM', x: -100, y: 200 },
        { role: 'Milieu', roleDetail: 'DM', x: 100, y: 200 },
        { role: 'Milieu', roleDetail: 'AM', x: -100, y: 120 },
        { role: 'Milieu', roleDetail: 'AM', x: 100, y: 120 },
        { role: 'Attaquant', roleDetail: 'ST', x: -70, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: 70, y: 20 }
    ],
    '4-2-3-1': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'RB', x: -200, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -70, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 70, y: 300 },
        { role: 'Défenseur', roleDetail: 'LB', x: 200, y: 300 },
        { role: 'Milieu', roleDetail: 'DM', x: -100, y: 200 },
        { role: 'Milieu', roleDetail: 'DM', x: 100, y: 200 },
        { role: 'Milieu', roleDetail: 'AM', x: -150, y: 120 },
        { role: 'Milieu', roleDetail: 'AM', x: 0, y: 120 },
        { role: 'Milieu', roleDetail: 'AM', x: 150, y: 120 },
        { role: 'Attaquant', roleDetail: 'ST', x: 0, y: 20 }
    ],
    '4-2-4': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'RB', x: -200, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -70, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 70, y: 300 },
        { role: 'Défenseur', roleDetail: 'LB', x: 200, y: 300 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 150 },
        { role: 'Attaquant', roleDetail: 'LW', x: -250, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: -70, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: 70, y: 20 },
        { role: 'Attaquant', roleDetail: 'RW', x: 250, y: 20 }
    ],
    '4-3-1-2': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'RB', x: -200, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -70, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 70, y: 300 },
        { role: 'Défenseur', roleDetail: 'LB', x: 200, y: 300 },
        { role: 'Milieu', roleDetail: 'CM', x: -150, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 0, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 150, y: 150 },
        { role: 'Milieu', roleDetail: 'AM', x: 0, y: 80 },
        { role: 'Attaquant', roleDetail: 'ST', x: -70, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: 70, y: 20 }
    ],
    '4-3-2-1': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'RB', x: -200, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -70, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 70, y: 300 },
        { role: 'Défenseur', roleDetail: 'LB', x: 200, y: 300 },
        { role: 'Milieu', roleDetail: 'CM', x: -150, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 0, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 150, y: 150 },
        { role: 'Attaquant', roleDetail: 'SS', x: -100, y: 80 },
        { role: 'Attaquant', roleDetail: 'SS', x: 100, y: 80 },
        { role: 'Attaquant', roleDetail: 'ST', x: 0, y: 20 }
    ],
    '4-4-1-1': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'RB', x: -200, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -70, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 70, y: 300 },
        { role: 'Défenseur', roleDetail: 'LB', x: 200, y: 300 },
        { role: 'Milieu', roleDetail: 'RM', x: -250, y: 120 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 120 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 120 },
        { role: 'Milieu', roleDetail: 'LM', x: 250, y: 120 },
        { role: 'Attaquant', roleDetail: 'SS', x: 0, y: 80 },
        { role: 'Attaquant', roleDetail: 'ST', x: 0, y: 20 }
    ],
    '4-5-1': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'RB', x: -200, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -70, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 70, y: 300 },
        { role: 'Défenseur', roleDetail: 'LB', x: 200, y: 300 },
        { role: 'Milieu', roleDetail: 'RM', x: -250, y: 120 },
        { role: 'Milieu', roleDetail: 'CM', x: -150, y: 120 },
        { role: 'Milieu', roleDetail: 'CM', x: 0, y: 120 },
        { role: 'Milieu', roleDetail: 'CM', x: 150, y: 120 },
        { role: 'Milieu', roleDetail: 'LM', x: 250, y: 120 },
        { role: 'Attaquant', roleDetail: 'ST', x: 0, y: 20 }
    ],
    '5-2-1-2': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'CB', x: -150, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -50, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 50, y: 300 },
        { role: 'Défenseur', roleDetail: 'RWB', x: -250, y: 250 },
        { role: 'Défenseur', roleDetail: 'LWB', x: 250, y: 250 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 150 },
        { role: 'Milieu', roleDetail: 'AM', x: 0, y: 80 },
        { role: 'Attaquant', roleDetail: 'ST', x: -70, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: 70, y: 20 }
    ],
    '5-2-2-1': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'CB', x: -150, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -50, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 50, y: 300 },
        { role: 'Défenseur', roleDetail: 'RWB', x: -250, y: 250 },
        { role: 'Défenseur', roleDetail: 'LWB', x: 250, y: 250 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 150 },
        { role: 'Attaquant', roleDetail: 'SS', x: -100, y: 80 },
        { role: 'Attaquant', roleDetail: 'SS', x: 100, y: 80 },
        { role: 'Attaquant', roleDetail: 'ST', x: 0, y: 20 }
    ],
    '5-2-3': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'CB', x: -150, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -50, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 50, y: 300 },
        { role: 'Défenseur', roleDetail: 'RWB', x: -250, y: 250 },
        { role: 'Défenseur', roleDetail: 'LWB', x: 250, y: 250 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 150 },
        { role: 'Attaquant', roleDetail: 'LW', x: -200, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: 0, y: 20 },
        { role: 'Attaquant', roleDetail: 'RW', x: 200, y: 20 }
    ],
    '5-3-2': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'CB', x: -150, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -50, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 50, y: 300 },
        { role: 'Défenseur', roleDetail: 'RWB', x: -250, y: 250 },
        { role: 'Défenseur', roleDetail: 'LWB', x: 250, y: 250 },
        { role: 'Milieu', roleDetail: 'CM', x: -150, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 0, y: 150 },
        { role: 'Milieu', roleDetail: 'CM', x: 150, y: 150 },
        { role: 'Attaquant', roleDetail: 'ST', x: -70, y: 20 },
        { role: 'Attaquant', roleDetail: 'ST', x: 70, y: 20 }
    ],
    '5-4-1': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'CB', x: -150, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: -50, y: 300 },
        { role: 'Défenseur', roleDetail: 'CB', x: 50, y: 300 },
        { role: 'Défenseur', roleDetail: 'RWB', x: -250, y: 250 },
        { role: 'Défenseur', roleDetail: 'LWB', x: 250, y: 250 },
        { role: 'Milieu', roleDetail: 'RM', x: -250, y: 120 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 120 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 120 },
        { role: 'Milieu', roleDetail: 'LM', x: 250, y: 120 },
        { role: 'Attaquant', roleDetail: 'ST', x: 0, y: 20 }
    ]
};

const state = {
    selectedFormation: document.getElementById('formationSelect') ? document.getElementById('formationSelect').value : '4-4-2',
    assignedPlayers: new Map(),
    home: true,
    curSide: function() {
        return this.home ? 'home' : 'away';
    },
    swapSides: function() {
        this.home = !this.home;
    }
};

const dom = {
    preloadImages: function(preload) {
        const promises = [];
        for (let i = 0; i < preload.length; i++) {
            ((url, promise) => {
                const img = new Image();
                img.onload = () => promise.resolve();
                img.onerror = () => promise.resolve();
                img.src = url;
            })(preload[i], promises[i] = $.Deferred());
        }
        $.when.apply($, promises).done(() => {
            console.log('Images preloaded, ending loading animation');
            scenes.endLoading();
            scenes.loadIn(1600);
        });
    },
    displayNone: function($el) {
        $el.css('display', 'none');
    },
    updatePlayerListVisibility: function() {
        $('.player-item').each(function() {
            const $player = $(this);
            const playerSide = $player.data('side');
            if (playerSide === state.curSide()) {
                $player.show();
            } else {
                $player.hide();
            }
        });
    }
};

const events = {
    attachAll: function() {
        const validPositions = {
            'gk': ['gk'],
            'rb': ['rb'],
            'lb': ['lb'],
            'cb': ['cb'],
            'rwb': ['rwb'],
            'lwb': ['lwb'],
            'sw': ['sw'],
            'dm': ['dm'],
            'cm': ['cm'],
            'am': ['am'],
            'rm': ['rm'],
            'lm': ['lm'],
            'rw': ['rw'],
            'lw': ['lw'],
            'cf': ['cf'],
            'st': ['st', 'cf', 'ss'],
            'ss': ['ss']
        };

        $('.player-item').on('dragstart', function(e) {
            const playerId = $(this).data('player-id');
            e.originalEvent.dataTransfer.setData('text/plain', playerId);
            console.log('Dragging player with ID:', playerId);
        });

        $players.on('dragover', function(e) {
            e.preventDefault();
            const $target = $(this);
            const playerId = e.originalEvent.dataTransfer.getData('text/plain');
            const $playerItem = $(`.player-item[data-player-id="${playerId}"]`);
            
            if (!$playerItem.length) {
                console.error('Dragover: Player item not found for ID:', playerId);
                $target.removeClass('drag-over');
                e.originalEvent.dataTransfer.dropEffect = 'none';
                return;
            }

            const targetRoleDetail = $target.data('role-detail') || '';
            const playerPosition = $playerItem.data('position') || '';
            const playerSide = $playerItem.data('side');

            if (playerSide !== state.curSide()) {
                $target.removeClass('drag-over');
                e.originalEvent.dataTransfer.dropEffect = 'none';
                return;
            }

            const normalizedTargetRoleDetail = targetRoleDetail.toLowerCase().trim();
            const normalizedPlayerPosition = playerPosition.toLowerCase().trim();

            const isValidPosition = validPositions[normalizedTargetRoleDetail] && 
                                   validPositions[normalizedTargetRoleDetail].includes(normalizedPlayerPosition);

            console.log('Dragover:', {
                playerId,
                playerPosition,
                targetRoleDetail,
                isValidPosition,
                validPositionsForTarget: validPositions[normalizedTargetRoleDetail],
                normalizedPlayerPosition,
                normalizedTargetRoleDetail
            });

            if (isValidPosition) {
                $target.addClass('drag-over');
                e.originalEvent.dataTransfer.dropEffect = 'move';
            } else {
                $target.removeClass('drag-over');
                e.originalEvent.dataTransfer.dropEffect = 'none';
            }
        });

        $players.on('dragleave', function(e) {
            $(this).removeClass('drag-over');
        });

        $players.on('drop', function(e) {
            e.preventDefault();
            console.log('Drop event triggered for target:', $(this).data('role-detail'));
            const $target = $(this);
            const playerId = e.originalEvent.dataTransfer.getData('text/plain');
            const $playerItem = $(`.player-item[data-player-id="${playerId}"]`);

            if (!$playerItem.length) {
                console.error('Drop: Player item not found for ID:', playerId);
                $target.removeClass('drag-over');
                return;
            }

            const targetRole = $target.data('role') || '';
            const targetRoleDetail = $target.data('role-detail') || '';
            const playerPosition = $playerItem.data('position') || '';
            const playerName = $playerItem.data('name') || 'Unknown Player';
            const playerSide = $playerItem.data('side');

            if (playerSide !== state.curSide()) {
                console.warn('Invalid drop: Player side does not match current side');
                $target.removeClass('drag-over');
                return;
            }

            const normalizedTargetRoleDetail = targetRoleDetail.toLowerCase().trim();
            const normalizedPlayerPosition = playerPosition.toLowerCase().trim();

            const isValidPosition = validPositions[normalizedTargetRoleDetail] && 
                                   validPositions[normalizedTargetRoleDetail].includes(normalizedPlayerPosition);

            console.log('Drop:', {
                playerId,
                playerPosition,
                targetRole,
                targetRoleDetail,
                isValidPosition,
                validPositionsForTarget: validPositions[normalizedTargetRoleDetail],
                normalizedPlayerPosition,
                normalizedTargetRoleDetail
            });

            if (isValidPosition) {
                const imgSrc = $playerItem.data('img');
                const goals = $playerItem.data('goals');
                const matches = $playerItem.data('matches');
                const height = $playerItem.data('height');

                $target.removeClass('empty drag-over');
                $target.find('.player__img img').attr('src', imgSrc).show();
                $target.find('.player__label span').text(playerName);
                $target.find('.player__card h3').text(playerName);
                $target.find('.player__card__list').html(`
                    <li><span>Poste</span><br>${playerPosition}</li>
                    <li><span>Taille</span><br>${height}</li>
                    <li><span>Origine</span><br>N/A</li>
                `);
                $target.find('.player__card__list--last').html(`
                    <li><span>Buts</span><br>${goals}</li>
                    <li><span>Matchs</span><br>${matches}</li>
                `);

                $playerItem.addClass('assigned');
                state.assignedPlayers.set(playerId, $target.data('index'));

                state.assignedPlayers.forEach((slotIndex, pId) => {
                    if (slotIndex === $target.data('index') && pId !== playerId) {
                        const $prevPlayerItem = $(`.player-item[data-player-id="${pId}"]`);
                        $prevPlayerItem.removeClass('assigned');
                        state.assignedPlayers.delete(pId);
                    }
                });
            } else {
                console.warn('Invalid drop:', {
                    playerPosition,
                    targetRole,
                    targetRoleDetail
                });
                const toastBody = document.querySelector('#invalidDropToast .toast-body');
                const toastTimestamp = document.querySelector('#invalidDropToast .toast-header small');
                toastBody.textContent = `Cannot assign ${playerName} (${playerPosition}) to ${targetRoleDetail}. Expected one of: ${validPositions[normalizedTargetRoleDetail]?.join(', ') || 'N/A'}.`;
                toastTimestamp.textContent = 'Just now';
                toast.show();
                $target.removeClass('drag-over');
            }
        });

        $players.on('click', function(e) {
            e.preventDefault();
            const $el = $(this);
            if ($el.hasClass('empty') || $('.active').length) return false;
            $el.addClass('active');
            scenes.focusPlayer($el);
            setTimeout(() => events.attachClose(), 1);
        });

        $players.on('dblclick', function(e) {
            e.preventDefault();
            const $el = $(this);
            if ($el.hasClass('empty')) return;
        
            const playerId = Array.from(state.assignedPlayers.entries()).find(([pId, slotIndex]) => slotIndex === $el.data('index'))?.[0];
            if (playerId) {
                const $playerItem = $(`.player-item[data-player-id="${playerId}"]`);
                $playerItem.removeClass('assigned');
                state.assignedPlayers.delete(playerId);
        
                $el.addClass('empty');
                $el.find('.player__img img').hide();
                // Set label to role-detail or role, ensuring it’s never empty
                const labelText = $el.data('role-detail') || $el.data('role') || 'Unknown';
                $el.find('.player__label span').text(labelText);
                $el.find('.player__card h3').text('');
                $el.find('.player__card__list').html('');
                $el.find('.player__card__list--last').html('');
                // Ensure label is visible
                anim.fadeInDir($el.find('.player__label'), 200, 0);
            }
        });

        $switchBtn.on('click', function(e) {
            e.preventDefault();
            const $el = $(this);
            if ($el.hasClass('disabled')) return;
            scenes.switchSides();
            $switchBtn.removeClass('disabled');
            $el.addClass('disabled');
        });

        $saveBtn.on('click', function(e) {
            e.preventDefault();
            const format = $(this).data('format');
            if (format === 'json') {
                scenes.saveAsJson();
            } else {
                console.error('Unsupported save format:', format);
            }
        });
    },
    attachClose: function() {
        $stage.one('click', function(e) {
            e.preventDefault();
            scenes.unfocusPlayer();
        });
    }
};

const scenes = {
    preLoad: function() {
        $players.velocity({ opacity: 0 }, 0);
        $heading.velocity({ opacity: 0 }, 0);
        $subHeading.velocity({ opacity: 0 }, 0);
        $switcher.velocity({ opacity: 0 }, 0);
        $world.velocity({ opacity: 0, translateZ: -200, translateY: -60 }, 0);
        $('main').velocity({ opacity: 1 }, 0);
        $terrain.css('background', 'url(/path/to/field-image.jpg) no-repeat center/cover'); // Add a default field image
    },
    loadIn: function(delay = 0) {
        console.log('loadIn called with delay:', delay);
        $world.velocity({ opacity: 1, translateY: 0, translateZ: -200 }, { duration: 1000, delay: delay, easing: 'spring' });
        anim.fadeInDir($heading, 300, delay + 600, 0, 30);
        anim.fadeInDir($subHeading, 300, delay + 800, 0, 30);
        anim.fadeInDir($switcher, 300, delay + 900, 0, 30);

        delay += 1200;
        const delayInc = 30;
        anim.dropPlayers($players, delay, delayInc);
        dom.updatePlayerListVisibility();
    },
    startLoading: function() {
        console.log('startLoading called');
        anim.fadeInDir($loading, 300, 0, 0, -20);
        const images = [];
        $('.player-item').each(function() {
            const imgSrc = $(this).find('img').attr('src');
            if (imgSrc) images.push(imgSrc);
        });
        images.push('/path/to/field-image.jpg'); // Add field image to preload
        console.log('Images to preload:', images);
        dom.preloadImages(images);
    },
    endLoading: function() {
        console.log('endLoading called');
        anim.fadeOutDir($loading, 300, 1000, 0, -20);
    },
    arrangePlayers: function() {
        $players.each(function() {
            const $el = $(this);
            const y = parseInt($el.attr('data-y'));
            const adjustedZ = y < 0 ? y - 100 : y;
            console.log('Arranging player:', $el.data('role'), 'at x:', $el.attr('data-x'), 'z:', adjustedZ);
            $el.velocity("stop").velocity({
                translateX: parseInt($el.attr('data-x')),
                translateZ: adjustedZ
            });
        });
    },
    updateFormation: function(formation) {
        $team.empty();
        state.assignedPlayers.clear();
        $('.player-item').removeClass('assigned');
    
        formations[formation].forEach((pos, index) => {
            const $playerDiv = $(`
                <div class="js-player player empty" 
                     data-role="${pos.role}" 
                     data-role-detail="${pos.roleDetail}" 
                     data-index="${index}" 
                     data-x="${pos.x}" 
                     data-y="${pos.y}">
                    <div class="player__label"><span>${pos.roleDetail || pos.role}</span></div>
                    <div class="player__img">
                        <img src="" style="display: none;">
                    </div>
                    <div class="player__card">
                        <h3></h3>
                        <ul class="player__card__list"></ul>
                        <ul class="player__card__list player__card__list--last"></ul>
                    </div>
                    <div class="player__placeholder"></div>
                </div>
            `);
            $team.append($playerDiv);
        });
    
        $players = $('.js-player');
        scenes.arrangePlayers();
        events.attachAll();
        dom.updatePlayerListVisibility();
    },
    focusPlayer: function($el) {
        const data = $el.data();
        let shiftY = data.y;

        if (shiftY > 0) shiftY = data.y / 2;

        $(`.js-player`).not('.active').each(function() {
            const $unfocus = $(this);
            anim.fadeOutDir($unfocus, 300, 0, 0, 0, 0, null, 0.2);
        });

        $world.velocity({
            translateX: 0 - data.x,
            translateY: 0,
            translateZ: -200 - shiftY
        }, 600);

        $terrain.velocity({ opacity: 0.66 }, 600);

        this.showPlayerCard($el, 600, 600);
    },
    unfocusPlayer: function() {
        const $el = $('.js-player.active');
        const data = $el.data();
        anim.fadeInDir($(`.js-player`).not('.active'), 300, 300, 0, 0, 0, null, 0.2);
        $el.removeClass('active');
        $world.velocity({
            translateX: 0,
            translateY: 0,
            translateZ: -200
        }, 600);

        $terrain.velocity({ opacity: 1 }, 600);

        this.hidePlayerCard($el, 600, 600);
    },
    hidePlayerCard: function($el, dur, delay) {
        const $card = $el.find('.player__card');
        const $image = $el.find('.player__img');
        $image.velocity({ translateY: 0 }, 300);
        // If the slot is empty, use role-detail or role; otherwise, use player name
        const isEmpty = $el.hasClass('empty');
        let labelText;
        if (isEmpty) {
            labelText = $el.data('role-detail') || $el.data('role') || 'Unknown';
        } else {
            const playerId = Array.from
    
    (state.assignedPlayers.entries()).find(([pId, slotIndex]) => slotIndex === $el.data('index'))?.[0];
            const $playerItem = playerId ? $(`.player-item[data-player-id="${playerId}"]`) : null;
            labelText = $playerItem ? $playerItem.data('name') : ($el.data('role-detail') || $el.data('role') || 'Unknown');
        }
        $el.find('.player__label span').text(labelText);
        anim.fadeInDir($el.find('.player__label'), 200, delay);
        anim.fadeOutDir($card, 300, 0, 0, -100);
    },
    showPlayerCard: function($el, dur, delay) {
        const $card = $el.find('.player__card');
        const $image = $el.find('.player__img');
        $image.velocity({ translateY: '-=150px' }, 300);
        anim.fadeOutDir($el.find('.player__label'), 200, delay);
        anim.fadeInDir($card, 300, 200, 0, 100);
    },
    switchSides: function() {
        const delay = 0;
        const delayInc = 20;

        state.swapSides();
        state.assignedPlayers.clear();
        $('.player-item').removeClass('assigned');
        $players.each(function() {
            const $el = $(this);
            $el.addClass('empty');
            $el.find('.player__img img').hide();
            $el.find('.player__label span').text($el.data('role-detail') || $el.data('role'));
            $el.find('.player__card h3').text('');
            $el.find('.player__card__list').html('');
            $el.find('.player__card__list--last').html('');
        });

        $players.each(function() {
            const $el = $(this);
            anim.fadeOutDir($el, 200, delay, 0, -60, 0);
            anim.fadeOutDir($el.find('.player__label'), 200, delay + 700);
        });

        $terrain.velocity({ rotateY: '+=180deg' }, { delay: 150, duration: 1200 });
        $world.toggleClass('flipped');
        dom.updatePlayerListVisibility();

        setTimeout(() => {
            anim.dropPlayers($players, 1500, 30);
        }, 1500);
    },
    apply2DStyles: function() {
        const originalStyles = {
            stage: $stage.attr('style') || '',
            world: $world.attr('style') || '',
            terrain: $terrain.attr('style') || '',
            field: $('.field').attr('style') || '',
            players: []
        };

        $stage.css({
            perspective: 'none',
            'perspective-origin': '50% 50%',
            width: '1008px',
            height: '720px',
            position: 'relative'
        });

        $world.css({
            transform: 'none',
            'transform-style': 'flat',
            top: '0',
            left: '0',
            margin: '0',
            width: '1008px',
            height: '720px',
            position: 'relative'
        });

        $terrain.css({
            transform: 'none',
            'transform-style': 'flat',
            width: '1008px',
            height: '720px',
            position: 'absolute',
            top: '0',
            left: '0',
            'background': 'url(/path/to/field-image.jpg) no-repeat center/cover'
        });

        $('.field').css({
            transform: 'none',
            'transform-origin': '50% 50%',
            top: '0',
            left: '0',
            width: '1008px',
            height: '720px',
            position: 'absolute',
            zIndex: 1
        });

        $players.each(function() {
            const $player = $(this);
            const x = parseFloat($player.data('x'));
            const y = parseFloat($player.data('y'));
            const left = (1008 / 2) + x;
            const top = y;

            $player.css({
                transform: 'none',
                left: `${left}px`,
                top: `${top}px`,
                bottom: 'auto',
                'margin-left': '0',
                'transform-style': 'flat',
                position: 'absolute',
                zIndex: 2
            });
        });

        return originalStyles;
    },
    restore3DStyles: function(originalStyles) {
        $stage.attr('style', originalStyles.stage);
        $world.attr('style', originalStyles.world);
        $terrain.attr('style', originalStyles.terrain);
        $('.field').attr('style', originalStyles.field);

        originalStyles.players.forEach(({ element, transform }) => {
            const x = parseFloat(element.data('x'));
            const y = parseFloat(element.data('y'));
            element.css({
                transform: `translateX(${x}px) translateZ(${y}px)`,
                left: '',
                top: '',
                bottom: '',
                'margin-left': ''
            });
        });

        $world.velocity("stop").velocity({
            translateX: 0,
            translateY: 0,
            translateZ: -200
        }, { duration: 300 });
    },
    saveAsJson: function() {
        const formationData = {
            formation: state.selectedFormation,
            teamSide: state.curSide(),
            players: []
        };

        $players.each(function(index) {
            const $player = $(this);
            const playerId = Array.from(state.assignedPlayers.entries()).find(([pId, slotIndex]) => slotIndex === index)?.[0];
            const $playerItem = playerId ? $(`.player-item[data-player-id="${playerId}"]`) : null;

            formationData.players.push({
                role: $player.data('role'),
                roleDetail: $player.data('role-detail'),
                x: $player.data('x'),
                y: $player.data('y'),
                player: $playerItem ? {
                    id: $playerItem.data('player-id'),
                    name: $playerItem.data('name'),
                    position: $playerItem.data('position'),
                    goals: $playerItem.data('goals'),
                    matches: $playerItem.data('matches'),
                    height: $playerItem.data('height'),
                    side: $playerItem.data('side')
                } : null
            });
        });

        const jsonString = JSON.stringify(formationData, null, 2);
        const blob = new Blob([jsonString], { type: 'application/json' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `formation_${state.curSide()}_${state.selectedFormation}_${new Date().toISOString().split('T')[0]}.json`;
        a.click();
        URL.revokeObjectURL(url);
    }
};

const anim = {
    fadeInDir: function($el, dur, delay, deltaX = 0, deltaY = 0, deltaZ = 0, easing = null, opacity = 0) {
        $el.css('display', 'block');
        $el.velocity({ translateX: `-=${deltaX}`, translateY: `-=${deltaY}`, translateZ: `-=${deltaZ}` }, 0);
        $el.velocity({
            opacity: 1,
            translateX: `+=${deltaX}`,
            translateY: `+=${deltaY}`,
            translateZ: `+=${deltaZ}`
        }, { easing: easing, delay: delay, duration: dur });
    },
    fadeOutDir: function($el, dur, delay, deltaX = 0, deltaY = 0, deltaZ = 0, easing = null, opacity = 0) {
        const display = opacity ? 'block' : 'none';
        $el.velocity({
            opacity: opacity,
            translateX: `+=${deltaX}`,
            translateY: `+=${deltaY}`,
            translateZ: `+=${deltaZ}`
        }, { easing: easing, delay: delay, duration: dur }).velocity({
            opacity: opacity,
            translateX: `-=${deltaX}`,
            translateY: `-=${deltaY}`,
            translateZ: `-=${deltaZ}`
        }, { duration: 0, display: display });
    },
    dropPlayers: function($els, delay, delayInc) {
        $els.each(function() {
            const $el = $(this);
            $el.css({ display: 'block', opacity: 0 });
            anim.fadeInDir($el, 800, delay, 0, 50, 0, 'spring');
            anim.fadeInDir($el.find('.player__label'), 200, delay + 250);
            delay += delayInc;
        });
    }
};

const init = function() {
    console.log('Football layout script loaded');
    $stage = $('.js-stage');
    $world = $('.js-world');
    $heading = $('.js-heading');
    $subHeading = $('.js-subheading');
    $terrain = $('.js-terrain');
    $team = $('.js-team');
    $loading = $('.js-loading');
    $switchBtn = $('.js-switch');
    $switcher = $('.js-switcher');
    $players = $('.js-player');
    $saveBtn = $('.js-save-btn');

    if (!$terrain.length) {
        console.error('Terrain element not found, creating fallback');
        $world.append('<div class="js-terrain" style="position: absolute; width: 1008px; height: 720px; background: url(/path/to/field-image.jpg) no-repeat center/cover;"></div>');
        $terrain = $('.js-terrain');
    }

    if (!$stage.length || !$world.length || !$terrain.length) {
        console.error('Critical elements missing, forcing 2D fallback');
        $('body').append(`
            <div class="js-stage" style="position: relative; width: 1008px; height: 720px;">
                <div class="js-world" style="position: relative; width: 1008px; height: 720px;">
                    <div class="js-terrain field" style="position: absolute; width: 1008px; height: 720px; background: url(/path/to/field-image.jpg) no-repeat center/cover;"></div>
                    <div class="js-team"></div>
                </div>
            </div>
        `);
        $stage = $('.js-stage');
        $world = $('.js-world');
        $terrain = $('.js-terrain');
        $team = $('.js-team');
    }

    $('.player-item').each(function() {
        const $player = $(this);
        const playerId = $player.data('player-id');
        $player.data('side', playerId % 2 === 0 ? 'home' : 'away');
        $player.attr('data-side', playerId % 2 === 0 ? 'home' : 'away');
    });

    scenes.preLoad();
    scenes.updateFormation(state.selectedFormation);
    scenes.startLoading();
};

$(document).ready(function() {  
    console.log('Document ready, initializing...');
    init();
});