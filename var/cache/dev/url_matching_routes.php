<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/club' => [[['_route' => 'club_index', '_controller' => 'App\\Controller\\ClubController::index'], null, ['GET' => 0], null, true, false, null]],
        '/club/new' => [[['_route' => 'club_new', '_controller' => 'App\\Controller\\ClubController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/club/statistics' => [[['_route' => 'club_statistics', '_controller' => 'App\\Controller\\ClubController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/joueur/main' => [[['_route' => 'joueur_main', '_controller' => 'App\\Controller\\JoueurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/joueur/new' => [[['_route' => 'joueur_new', '_controller' => 'App\\Controller\\JoueurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/joueur/stats' => [[['_route' => 'joueur_statistics', '_controller' => 'App\\Controller\\JoueurController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/sport' => [[['_route' => 'sport_index', '_controller' => 'App\\Controller\\SportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sport/new' => [[['_route' => 'sport_new', '_controller' => 'App\\Controller\\SportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sport/statistics' => [[['_route' => 'sport_statistics', '_controller' => 'App\\Controller\\SportController::statistics'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/club/(?'
                    .'|(\\d+)(*:216)'
                    .'|(\\d+)/edit(*:234)'
                    .'|(\\d+)(*:247)'
                .')'
                .'|/joueur/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:283)'
                        .'|delete(*:297)'
                    .')'
                    .'|(*:306)'
                .')'
                .'|/sport/(?'
                    .'|(\\d+)(*:330)'
                    .'|(\\d+)/edit(*:348)'
                    .'|(\\d+)(*:361)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        216 => [[['_route' => 'club_show', '_controller' => 'App\\Controller\\ClubController::show'], ['idClub'], ['GET' => 0], null, false, true, null]],
        234 => [[['_route' => 'club_edit', '_controller' => 'App\\Controller\\ClubController::edit'], ['idClub'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        247 => [[['_route' => 'club_delete', '_controller' => 'App\\Controller\\ClubController::delete'], ['idClub'], ['POST' => 0], null, false, true, null]],
        283 => [[['_route' => 'joueur_edit', '_controller' => 'App\\Controller\\JoueurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        297 => [[['_route' => 'joueur_delete', '_controller' => 'App\\Controller\\JoueurController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        306 => [[['_route' => 'joueur_show', '_controller' => 'App\\Controller\\JoueurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        330 => [[['_route' => 'sport_show', '_controller' => 'App\\Controller\\SportController::show'], ['idSport'], ['GET' => 0], null, false, true, null]],
        348 => [[['_route' => 'sport_edit', '_controller' => 'App\\Controller\\SportController::edit'], ['idSport'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        361 => [
            [['_route' => 'sport_delete', '_controller' => 'App\\Controller\\SportController::delete'], ['idSport'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
