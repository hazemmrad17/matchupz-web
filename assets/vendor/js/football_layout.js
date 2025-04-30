const ASSET_URL = '/Uploads/profile_pictures/';

let $stage = null;
let $world = null;
let $terrain = null;
let $team = null;
let $players = null;
let $heading = null;
let $subHeading = null;
let $loading = null;

// Formation configurations (x, y coordinates in the 3D field space: x ranges from -336 to 336, y from -420 to 420)
const formations = {
    '4-4-2': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'RB', x: -200, y: 180 },
        { role: 'Défenseur', roleDetail: 'CB', x: -70, y: 180 },
        { role: 'Défenseur', roleDetail: 'CB', x: 70, y: 180 },
        { role: 'Défenseur', roleDetail: 'LB', x: 200, y: 180 },
        { role: 'Milieu', roleDetail: 'RM', x: -200, y: 50 },
        { role: 'Milieu', roleDetail: 'CM', x: -70, y: 50 },
        { role: 'Milieu', roleDetail: 'CM', x: 70, y: 50 },
        { role: 'Milieu', roleDetail: 'LM', x: 200, y: 50 },
        { role: 'Attaquant', roleDetail: 'ST', x: -70, y: -190 },
        { role: 'Attaquant', roleDetail: 'ST', x: 70, y: -190 }
    ],
    '4-3-3': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'RB', x: -200, y: 180 },
        { role: 'Défenseur', roleDetail: 'CB', x: -70, y: 180 },
        { role: 'Défenseur', roleDetail: 'CB', x: 70, y: 180 },
        { role: 'Défenseur', roleDetail: 'LB', x: 200, y: 180 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 50 },
        { role: 'Milieu', roleDetail: 'CM', x: 0, y: 50 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 50 },
        { role: 'Attaquant', roleDetail: 'LW', x: -200, y: -190 },
        { role: 'Attaquant', roleDetail: 'ST', x: 0, y: -190 },
        { role: 'Attaquant', roleDetail: 'RW', x: 200, y: -190 }
    ],
    '3-5-2': [
        { role: 'Gardien', roleDetail: 'GK', x: 0, y: 410 },
        { role: 'Défenseur', roleDetail: 'CB', x: -100, y: 180 },
        { role: 'Défenseur', roleDetail: 'CB', x: 0, y: 180 },
        { role: 'Défenseur', roleDetail: 'CB', x: 100, y: 180 },
        { role: 'Milieu', roleDetail: 'RM', x: -250, y: 100 },
        { role: 'Milieu', roleDetail: 'CM', x: -100, y: 50 },
        { role: 'Milieu', roleDetail: 'CM', x: 0, y: 50 },
        { role: 'Milieu', roleDetail: 'CM', x: 100, y: 50 },
        { role: 'Milieu', roleDetail: 'LM', x: 250, y: 100 },
        { role: 'Attaquant', roleDetail: 'ST', x: -70, y: -190 },
        { role: 'Attaquant', roleDetail: 'ST', x: 70, y: -190 }
    ]
};

const state = {
    selectedFormation: document.getElementById('formationSelect') ? document.getElementById('formationSelect').value : '4-4-2',
    assignedPlayers: new Map(), // Tracks player assignments
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
    }
};

const events = {
    attachAll: function() {
        // Helper function to log raw bytes of a string
        function logStringBytes(str, label) {
            const encoder = new TextEncoder();
            const bytes = encoder.encode(str);
            console.log(`${label} bytes:`, Array.from(bytes).map(b => b.toString(16).padStart(2, '0')).join(' '));
        }

        // Initialize the toast
        const toastElement = document.getElementById('invalidDropToast');
        if (!toastElement) {
            console.error('Toast element #invalidDropToast not found in the DOM');
            return;
        }
        const toast = new bootstrap.Toast(toastElement, {
            autohide: true,
            delay: 5000 // Hide after 5 seconds
        });
        console.log('Toast initialized:', toast);

        // Drag-and-drop setup
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

            const targetRole = $target.data('role') || '';
            const targetRoleDetail = $target.data('role-detail') || '';
            const playerPosition = $playerItem.data('position') || '';
            const playerCategory = $playerItem.data('category') || '';

            console.log('Dragover:', {
                playerId,
                playerPosition,
                playerCategory,
                targetRole,
                targetRoleDetail,
                playerPositionLower: playerPosition.toLowerCase(),
                targetRoleDetailLower: targetRoleDetail.toLowerCase(),
                playerCategoryLower: playerCategory.toLowerCase(),
                targetRoleLower: targetRole.toLowerCase()
            });

            logStringBytes(playerCategory, 'playerCategory');
            logStringBytes(targetRole, 'targetRole');

            const validPositions = {
                'st': ['st', 'cf', 'ss'],
                'lw': ['lw'],
                'rw': ['rw'],
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
                'lm': ['lm']
            };

            const normalizedTargetRoleDetail = targetRoleDetail.toLowerCase().trim();
            const normalizedPlayerPosition = playerPosition.toLowerCase().trim();
            const normalizedPlayerCategory = playerCategory.toLowerCase().trim();
            const normalizedTargetRole = targetRole.toLowerCase().trim();

            const isValidPosition = validPositions[normalizedTargetRoleDetail] && 
                                   validPositions[normalizedTargetRoleDetail].includes(normalizedPlayerPosition);
            const isValidCategory = normalizedPlayerCategory === normalizedTargetRole;
            const isValidDrop = isValidPosition && isValidCategory;

            console.log('Dragover Validation:', {
                isValidPosition,
                isValidCategory,
                isValidDrop,
                validPositionsForTarget: validPositions[normalizedTargetRoleDetail]
            });

            if (isValidDrop) {
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
            const playerCategory = $playerItem.data('category') || '';
            const playerName = $playerItem.data('name') || 'Unknown Player';

            console.log('Drop:', {
                playerId,
                playerPosition,
                playerCategory,
                targetRole,
                targetRoleDetail,
                playerPositionLower: playerPosition.toLowerCase(),
                targetRoleDetailLower: targetRoleDetail.toLowerCase(),
                playerCategoryLower: playerCategory.toLowerCase(),
                targetRoleLower: targetRole.toLowerCase()
            });

            logStringBytes(playerCategory, 'playerCategory');
            logStringBytes(targetRole, 'targetRole');

            const validPositions = {
                'st': ['st', 'cf', 'ss'],
                'lw': ['lw'],
                'rw': ['rw'],
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
                'lm': ['lm']
            };

            const normalizedTargetRoleDetail = targetRoleDetail.toLowerCase().trim();
            const normalizedPlayerPosition = playerPosition.toLowerCase().trim();
            const normalizedPlayerCategory = playerCategory.toLowerCase().trim();
            const normalizedTargetRole = targetRole.toLowerCase().trim();

            const isValidPosition = validPositions[normalizedTargetRoleDetail] && 
                                   validPositions[normalizedTargetRoleDetail].includes(normalizedPlayerPosition);
            const isValidCategory = normalizedPlayerCategory === normalizedTargetRole;
            const isValidDrop = isValidPosition && isValidCategory;

            console.log('Drop Validation:', {
                isValidPosition,
                isValidCategory,
                isValidDrop,
                validPositionsForTarget: validPositions[normalizedTargetRoleDetail]
            });

            if (isValidDrop) {
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
                    playerCategory,
                    targetRole,
                    targetRoleDetail,
                    normalizedPlayerPosition,
                    normalizedTargetRoleDetail,
                    normalizedPlayerCategory,
                    normalizedTargetRole
                });
                const toastBody = document.querySelector('#invalidDropToast .toast-body');
                const toastTimestamp = document.querySelector('#invalidDropToast .toast-header small');
                toastBody.textContent = `Cannot assign ${playerName} (${playerPosition}, ${playerCategory}) to this position. It requires a ${targetRole} (${targetRoleDetail}).`;
                toastTimestamp.textContent = 'Just now'; // Update timestamp
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
                $el.find('.player__label span').text($el.data('role-detail') || $el.data('role'));
                $el.find('.player__card h3').text('');
                $el.find('.player__card__list').html('');
                $el.find('.player__card__list--last').html('');
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
        $world.velocity({ opacity: 0, translateZ: -200, translateY: -60 }, 0);
        $('main').velocity({ opacity: 1 }, 0);
    },
    loadIn: function(delay = 0) {
        console.log('loadIn called with delay:', delay);
        $world.velocity({ opacity: 1, translateY: 0, translateZ: -200 }, { duration: 1000, delay: delay, easing: 'spring' });
        anim.fadeInDir($heading, 300, delay + 600, 0, 30);
        anim.fadeInDir($subHeading, 300, delay + 800, 0, 30);

        delay += 1200;
        const delayInc = 30;
        anim.dropPlayers($players, delay, delayInc);
    },
    startLoading: function() {
        console.log('startLoading called');
        anim.fadeInDir($loading, 300, 0, 0, -20);
        const images = [];
        $('.player-item').each(function() {
            const imgSrc = $(this).find('img').attr('src');
            if (imgSrc) images.push(imgSrc);
        });
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
            console.log('Arranging player:', $el.data('role'), 'at x:', $el.attr('data-x'), 'y:', $el.attr('data-y'));
            $el.velocity({
                translateX: parseInt($el.attr('data-x')),
                translateZ: parseInt($el.attr('data-y'))
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
        anim.fadeInDir($el.find('.player__label'), 200, delay);
        anim.fadeOutDir($card, 300, 0, 0, -100);
    },
    showPlayerCard: function($el, dur, delay) {
        const $card = $el.find('.player__card');
        const $image = $el.find('.player__img');
        $image.velocity({ translateY: '-=150px' }, 300);
        anim.fadeOutDir($el.find('.player__label'), 200, delay);
        anim.fadeInDir($card, 300, 200, 0, 100);
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
    $stage = $('.js-stage');
    $world = $('.js-world');
    $heading = $('.js-heading');
    $subHeading = $('.js-subheading');
    $terrain = $('.js-terrain');
    $team = $('.js-team');
    $loading = $('.js-loading');
    $players = $('.js-player');

    scenes.preLoad();
    scenes.updateFormation(state.selectedFormation);
    scenes.startLoading();

    // Attach toast color selector event
    const toastElement = document.getElementById('invalidDropToast');
    const toastColorSelect = document.getElementById('toastColorSelect');
    if (toastColorSelect && toastElement) {
        toastColorSelect.addEventListener('change', function() {
            // Remove all bg-* classes
            toastElement.classList.remove('bg-danger', 'bg-primary', 'bg-success', 'bg-warning', 'bg-info');
            // Add the selected bg-* class
            toastElement.classList.add(this.value);
        });
    }
};

$(document).ready(function() {
    console.log('Document ready, initializing...');
    init();
});