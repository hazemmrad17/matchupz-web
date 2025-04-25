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
        '/abonnement' => [[['_route' => 'abonnement_index', '_controller' => 'App\\Controller\\AbonnementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/abonnement/export/csv' => [[['_route' => 'abonnement_export_csv', '_controller' => 'App\\Controller\\AbonnementController::exportCsv'], null, null, null, false, false, null]],
        '/abonnement/export/pdf' => [[['_route' => 'abonnement_export_pdf', '_controller' => 'App\\Controller\\AbonnementController::exportPdf'], null, null, null, false, false, null]],
        '/abonnement/export/excel' => [[['_route' => 'abonnement_export_excel', '_controller' => 'App\\Controller\\AbonnementController::exportExcel'], null, null, null, false, false, null]],
        '/abonnement/new' => [[['_route' => 'abonnement_new', '_controller' => 'App\\Controller\\AbonnementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/abonnement/statistics' => [[['_route' => 'abonnement_statistics', '_controller' => 'App\\Controller\\AbonnementController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/club' => [[['_route' => 'club_index', '_controller' => 'App\\Controller\\ClubController::index'], null, ['GET' => 0], null, true, false, null]],
        '/club/new' => [[['_route' => 'club_new', '_controller' => 'App\\Controller\\ClubController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/club/statistics' => [[['_route' => 'club_statistics', '_controller' => 'App\\Controller\\ClubController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/club/export/pdf' => [[['_route' => 'club_export_pdf', '_controller' => 'App\\Controller\\ClubController::exportPdf'], null, null, null, false, false, null]],
        '/club/export/csv' => [[['_route' => 'club_export_csv', '_controller' => 'App\\Controller\\ClubController::exportCsv'], null, null, null, false, false, null]],
        '/club/export/excel' => [[['_route' => 'club_export_excel', '_controller' => 'App\\Controller\\ClubController::exportExcel'], null, null, null, false, false, null]],
        '/espace' => [[['_route' => 'espace_index', '_controller' => 'App\\Controller\\EspacesportifController::index'], null, ['GET' => 0], null, true, false, null]],
        '/espace/export/csv' => [[['_route' => 'espace_export_csv', '_controller' => 'App\\Controller\\EspacesportifController::exportCsv'], null, null, null, false, false, null]],
        '/espace/export/pdf' => [[['_route' => 'espace_export_pdf', '_controller' => 'App\\Controller\\EspacesportifController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/espace/export/excel' => [[['_route' => 'espace_export_excel', '_controller' => 'App\\Controller\\EspacesportifController::exportExcel'], null, null, null, false, false, null]],
        '/espace/new' => [[['_route' => 'espace_new', '_controller' => 'App\\Controller\\EspacesportifController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/espace/statistics' => [[['_route' => 'espace_statistics', '_controller' => 'App\\Controller\\EspacesportifController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/espace/front' => [[['_route' => 'app_espace_sportifs', '_controller' => 'App\\Controller\\EspacesportifController::front'], null, ['GET' => 0], null, false, false, null]],
        '/evaluation_physique/statistiques' => [[['_route' => 'app_evaluation_physique_stats', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/evaluation_physique/maintenance' => [[['_route' => 'app_maintenance', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::maintenance'], null, null, null, false, false, null]],
        '/evaluation_physique' => [[['_route' => 'app_evaluation_physique_index', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evaluation_physique/new' => [[['_route' => 'app_evaluation_physique_new', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/historique/club' => [[['_route' => 'app_historique_club_index', '_controller' => 'App\\Controller\\HistoriqueClubController::index'], null, ['GET' => 0], null, true, false, null]],
        '/historique/club/statistics' => [[['_route' => 'app_historique_club_stats', '_controller' => 'App\\Controller\\HistoriqueClubController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/historique/club/new' => [[['_route' => 'app_historique_club_new', '_controller' => 'App\\Controller\\HistoriqueClubController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/historique/club/export/csv' => [[['_route' => 'app_historique_club_export_csv', '_controller' => 'App\\Controller\\HistoriqueClubController::exportCsv'], null, null, null, false, false, null]],
        '/historique/club/export/pdf' => [[['_route' => 'app_historique_club_export_pdf', '_controller' => 'App\\Controller\\HistoriqueClubController::exportPdf'], null, null, null, false, false, null]],
        '/historique/club/export/excel' => [[['_route' => 'app_historique_club_export_excel', '_controller' => 'App\\Controller\\HistoriqueClubController::exportExcel'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/joueur/test' => [[['_route' => 'joueur_test', '_controller' => 'App\\Controller\\JoueurController::test'], null, ['GET' => 0], null, false, false, null]],
        '/joueur' => [[['_route' => 'joueur_main', '_controller' => 'App\\Controller\\JoueurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/joueur/new' => [[['_route' => 'joueur_new', '_controller' => 'App\\Controller\\JoueurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/joueur/statistics' => [[['_route' => 'joueur_statistics', '_controller' => 'App\\Controller\\JoueurController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/joueur/export/csv' => [[['_route' => 'joueur_export_csv', '_controller' => 'App\\Controller\\JoueurController::exportCsv'], null, null, null, false, false, null]],
        '/joueur/export/pdf' => [[['_route' => 'joueur_export_pdf', '_controller' => 'App\\Controller\\JoueurController::exportPdf'], null, null, null, false, false, null]],
        '/joueur/export/excel' => [[['_route' => 'joueur_export_excel', '_controller' => 'App\\Controller\\JoueurController::exportExcel'], null, null, null, false, false, null]],
        '/performance_joueur/stats' => [[['_route' => 'performance_joueur_stats', '_controller' => 'App\\Controller\\PerformanceJoueurController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/performance_joueur' => [[['_route' => 'performance_joueur_index', '_controller' => 'App\\Controller\\PerformanceJoueurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/performance_joueur/new' => [[['_route' => 'performance_joueur_new', '_controller' => 'App\\Controller\\PerformanceJoueurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/export/csv' => [[['_route' => 'reservation_export_csv', '_controller' => 'App\\Controller\\ReservationController::exportCsv'], null, null, null, false, false, null]],
        '/reservation/export/pdf' => [[['_route' => 'reservation_export_pdf', '_controller' => 'App\\Controller\\ReservationController::exportPdf'], null, null, null, false, false, null]],
        '/reservation/export/excel' => [[['_route' => 'reservation_export_excel', '_controller' => 'App\\Controller\\ReservationController::exportExcel'], null, null, null, false, false, null]],
        '/reservation/new' => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/statistics' => [[['_route' => 'reservation_statistics', '_controller' => 'App\\Controller\\ReservationController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/google-auth' => [[['_route' => 'google_auth', '_controller' => 'App\\Controller\\ReservationController::googleAuth'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/google-logout' => [[['_route' => 'google_logout', '_controller' => 'App\\Controller\\ReservationController::googleLogout'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/google-callback' => [[['_route' => 'google_callback', '_controller' => 'App\\Controller\\ReservationController::googleCallback'], null, ['GET' => 0], null, false, false, null]],
        '/sport' => [[['_route' => 'sport_index', '_controller' => 'App\\Controller\\SportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sport/new' => [[['_route' => 'sport_new', '_controller' => 'App\\Controller\\SportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sport/statistics' => [[['_route' => 'sport_statistics', '_controller' => 'App\\Controller\\SportController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/sport/export/csv' => [[['_route' => 'sport_export_csv', '_controller' => 'App\\Controller\\SportController::exportCsv'], null, null, null, false, false, null]],
        '/sport/export/pdf' => [[['_route' => 'sport_export_pdf', '_controller' => 'App\\Controller\\SportController::exportPdf'], null, null, null, false, false, null]],
        '/sport/export/excel' => [[['_route' => 'sport_export_excel', '_controller' => 'App\\Controller\\SportController::exportExcel'], null, null, null, false, false, null]],
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
                .'|/abonnement/(?'
                    .'|(\\d+)(*:222)'
                    .'|(\\d+)/edit(*:240)'
                    .'|(\\d+)(*:253)'
                .')'
                .'|/club/(?'
                    .'|(\\d+)(*:276)'
                    .'|(\\d+)/edit(*:294)'
                    .'|(\\d+)(*:307)'
                .')'
                .'|/e(?'
                    .'|space/(?'
                        .'|(\\d+)(*:335)'
                        .'|(\\d+)/edit(*:353)'
                        .'|(\\d+)(*:366)'
                    .')'
                    .'|valuation_physique/(?'
                        .'|([^/]++)(?'
                            .'|(*:408)'
                            .'|/edit(*:421)'
                            .'|(*:429)'
                        .')'
                        .'|joueur/([^/]++)(*:453)'
                    .')'
                .')'
                .'|/historique/club/(?'
                    .'|([^/]++)(?'
                        .'|(*:494)'
                        .'|/edit(*:507)'
                        .'|(*:515)'
                    .')'
                    .'|joueur/([^/]++)(*:539)'
                    .'|club/([^/]++)/current(*:568)'
                .')'
                .'|/joueur/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:607)'
                            .'|delete(*:621)'
                        .')'
                        .'|(*:630)'
                    .')'
                    .'|tracking(*:647)'
                .')'
                .'|/performance_joueur/([^/]++)(?'
                    .'|(*:687)'
                    .'|/edit(*:700)'
                    .'|(*:708)'
                .')'
                .'|/reservation/(?'
                    .'|(\\d+)(*:738)'
                    .'|(\\d+)/edit(*:756)'
                    .'|(\\d+)(*:769)'
                    .'|(\\d+)/add\\-to\\-google\\-calendar(*:808)'
                .')'
                .'|/sport/(?'
                    .'|(\\d+)(*:832)'
                    .'|(\\d+)/edit(*:850)'
                    .'|(\\d+)(*:863)'
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
        222 => [[['_route' => 'abonnement_show', '_controller' => 'App\\Controller\\AbonnementController::show'], ['idAbonnement'], ['GET' => 0], null, false, true, null]],
        240 => [[['_route' => 'abonnement_edit', '_controller' => 'App\\Controller\\AbonnementController::edit'], ['idAbonnement'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        253 => [[['_route' => 'abonnement_delete', '_controller' => 'App\\Controller\\AbonnementController::delete'], ['idAbonnement'], ['POST' => 0], null, false, true, null]],
        276 => [[['_route' => 'club_show', '_controller' => 'App\\Controller\\ClubController::show'], ['idClub'], ['GET' => 0], null, false, true, null]],
        294 => [[['_route' => 'club_edit', '_controller' => 'App\\Controller\\ClubController::edit'], ['idClub'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        307 => [[['_route' => 'club_delete', '_controller' => 'App\\Controller\\ClubController::delete'], ['idClub'], ['POST' => 0], null, false, true, null]],
        335 => [[['_route' => 'espace_show', '_controller' => 'App\\Controller\\EspacesportifController::show'], ['id_lieu'], ['GET' => 0], null, false, true, null]],
        353 => [[['_route' => 'espace_edit', '_controller' => 'App\\Controller\\EspacesportifController::edit'], ['id_lieu'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        366 => [[['_route' => 'espace_delete', '_controller' => 'App\\Controller\\EspacesportifController::delete'], ['id_lieu'], ['POST' => 0], null, false, true, null]],
        408 => [[['_route' => 'app_evaluation_physique_show', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::show'], ['idEvaluation'], ['GET' => 0], null, false, true, null]],
        421 => [[['_route' => 'app_evaluation_physique_edit', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::edit'], ['idEvaluation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        429 => [[['_route' => 'app_evaluation_physique_delete', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::delete'], ['idEvaluation'], ['POST' => 0], null, false, true, null]],
        453 => [[['_route' => 'app_evaluation_physique_by_joueur', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::evaluationsByJoueur'], ['joueurId'], ['GET' => 0], null, false, true, null]],
        494 => [[['_route' => 'app_historique_club_show', '_controller' => 'App\\Controller\\HistoriqueClubController::show'], ['idHistorique'], ['GET' => 0], null, false, true, null]],
        507 => [[['_route' => 'app_historique_club_edit', '_controller' => 'App\\Controller\\HistoriqueClubController::edit'], ['idHistorique'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        515 => [[['_route' => 'app_historique_club_delete', '_controller' => 'App\\Controller\\HistoriqueClubController::delete'], ['idHistorique'], ['POST' => 0], null, false, true, null]],
        539 => [[['_route' => 'app_historique_club_by_joueur', '_controller' => 'App\\Controller\\HistoriqueClubController::findByJoueur'], ['joueurId'], ['GET' => 0], null, false, true, null]],
        568 => [[['_route' => 'app_historique_club_current_by_club', '_controller' => 'App\\Controller\\HistoriqueClubController::findCurrentPlayersByClub'], ['clubName'], ['GET' => 0], null, false, false, null]],
        607 => [[['_route' => 'joueur_edit', '_controller' => 'App\\Controller\\JoueurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        621 => [[['_route' => 'joueur_delete', '_controller' => 'App\\Controller\\JoueurController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        630 => [[['_route' => 'joueur_show', '_controller' => 'App\\Controller\\JoueurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        647 => [[['_route' => 'joueur_tracking', '_controller' => 'App\\Controller\\JoueurController::trackingRedirect'], [], ['GET' => 0], null, false, false, null]],
        687 => [[['_route' => 'performance_joueur_show', '_controller' => 'App\\Controller\\PerformanceJoueurController::show'], ['idPerformance'], ['GET' => 0], null, false, true, null]],
        700 => [[['_route' => 'performance_joueur_edit', '_controller' => 'App\\Controller\\PerformanceJoueurController::edit'], ['idPerformance'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        708 => [[['_route' => 'performance_joueur_delete', '_controller' => 'App\\Controller\\PerformanceJoueurController::delete'], ['idPerformance'], ['POST' => 0], null, false, true, null]],
        738 => [[['_route' => 'reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id_reservation'], ['GET' => 0], null, false, true, null]],
        756 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id_reservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        769 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id_reservation'], ['POST' => 0], null, false, true, null]],
        808 => [[['_route' => 'reservation_add_to_google_calendar', '_controller' => 'App\\Controller\\ReservationController::addToGoogleCalendar'], ['id_reservation'], ['GET' => 0], null, false, false, null]],
        832 => [[['_route' => 'sport_show', '_controller' => 'App\\Controller\\SportController::show'], ['idSport'], ['GET' => 0], null, false, true, null]],
        850 => [[['_route' => 'sport_edit', '_controller' => 'App\\Controller\\SportController::edit'], ['idSport'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        863 => [
            [['_route' => 'sport_delete', '_controller' => 'App\\Controller\\SportController::delete'], ['idSport'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
