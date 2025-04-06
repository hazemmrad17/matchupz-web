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
        '/evaluation/physique/statistiques' => [[['_route' => 'app_evaluation_physique_stats', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/evaluation/physique/maintenance' => [[['_route' => 'app_maintenance', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::maintenance'], null, null, null, false, false, null]],
        '/evaluation/physique' => [[['_route' => 'app_evaluation_physique_index', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evaluation/physique/new' => [[['_route' => 'app_evaluation_physique_new', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/historique/club' => [[['_route' => 'app_historique_club_index', '_controller' => 'App\\Controller\\HistoriqueClubController::index'], null, ['GET' => 0], null, true, false, null]],
        '/historique/club/statistics' => [[['_route' => 'app_historique_club_stats', '_controller' => 'App\\Controller\\HistoriqueClubController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/historique/club/new' => [[['_route' => 'app_historique_club_new', '_controller' => 'App\\Controller\\HistoriqueClubController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/joueur' => [[['_route' => 'joueur_main', '_controller' => 'App\\Controller\\JoueurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/joueur/new' => [[['_route' => 'joueur_new', '_controller' => 'App\\Controller\\JoueurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/joueur/statistics' => [[['_route' => 'joueur_statistics', '_controller' => 'App\\Controller\\JoueurController::statistics'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/evaluation/physique/([^/]++)(?'
                    .'|(*:288)'
                    .'|/edit(*:301)'
                    .'|(*:309)'
                .')'
                .'|/historique/club/(?'
                    .'|([^/]++)(?'
                        .'|(*:349)'
                        .'|/edit(*:362)'
                        .'|(*:370)'
                    .')'
                    .'|joueur/([^/]++)(*:394)'
                    .'|club/([^/]++)/current(*:423)'
                .')'
                .'|/joueur/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:459)'
                        .'|delete(*:473)'
                    .')'
                    .'|(*:482)'
                .')'
                .'|/sport/(?'
                    .'|(\\d+)(*:506)'
                    .'|(\\d+)/edit(*:524)'
                    .'|(\\d+)(*:537)'
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
        288 => [[['_route' => 'app_evaluation_physique_show', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::show'], ['idEvaluation'], ['GET' => 0], null, false, true, null]],
        301 => [[['_route' => 'app_evaluation_physique_edit', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::edit'], ['idEvaluation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        309 => [[['_route' => 'app_evaluation_physique_delete', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::delete'], ['idEvaluation'], ['POST' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_historique_club_show', '_controller' => 'App\\Controller\\HistoriqueClubController::show'], ['idHistorique'], ['GET' => 0], null, false, true, null]],
        362 => [[['_route' => 'app_historique_club_edit', '_controller' => 'App\\Controller\\HistoriqueClubController::edit'], ['idHistorique'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        370 => [[['_route' => 'app_historique_club_delete', '_controller' => 'App\\Controller\\HistoriqueClubController::delete'], ['idHistorique'], ['POST' => 0], null, false, true, null]],
        394 => [[['_route' => 'app_historique_club_by_joueur', '_controller' => 'App\\Controller\\HistoriqueClubController::findByJoueur'], ['joueurId'], ['GET' => 0], null, false, true, null]],
        423 => [[['_route' => 'app_historique_club_current_by_club', '_controller' => 'App\\Controller\\HistoriqueClubController::findCurrentPlayersByClub'], ['clubId'], ['GET' => 0], null, false, false, null]],
        459 => [[['_route' => 'joueur_edit', '_controller' => 'App\\Controller\\JoueurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        473 => [[['_route' => 'joueur_delete', '_controller' => 'App\\Controller\\JoueurController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        482 => [[['_route' => 'joueur_show', '_controller' => 'App\\Controller\\JoueurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        506 => [[['_route' => 'sport_show', '_controller' => 'App\\Controller\\SportController::show'], ['idSport'], ['GET' => 0], null, false, true, null]],
        524 => [[['_route' => 'sport_edit', '_controller' => 'App\\Controller\\SportController::edit'], ['idSport'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        537 => [
            [['_route' => 'sport_delete', '_controller' => 'App\\Controller\\SportController::delete'], ['idSport'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
