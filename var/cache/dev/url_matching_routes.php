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
        '/club/export/pdf' => [[['_route' => 'club_export_pdf', '_controller' => 'App\\Controller\\ClubController::exportPdf'], null, null, null, false, false, null]],
        '/club/export/csv' => [[['_route' => 'club_export_csv', '_controller' => 'App\\Controller\\ClubController::exportCsv'], null, null, null, false, false, null]],
        '/club/export/excel' => [[['_route' => 'club_export_excel', '_controller' => 'App\\Controller\\ClubController::exportExcel'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/espace' => [[['_route' => 'espace_index', '_controller' => 'App\\Controller\\EspacesportifController::index'], null, ['GET' => 0], null, true, false, null]],
        '/espace/new' => [[['_route' => 'espace_new', '_controller' => 'App\\Controller\\EspacesportifController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/espace/statistics' => [[['_route' => 'espace_statistics', '_controller' => 'App\\Controller\\EspacesportifController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/evaluation_physique/statistiques' => [[['_route' => 'app_evaluation_physique_stats', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/evaluation_physique/maintenance' => [[['_route' => 'app_maintenance', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::maintenance'], null, null, null, false, false, null]],
        '/evaluation_physique' => [[['_route' => 'app_evaluation_physique_index', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evaluation_physique/new' => [[['_route' => 'app_evaluation_physique_new', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/features' => [[['_route' => 'app_features', '_controller' => 'App\\Controller\\FitnessController::features'], null, null, null, false, false, null]],
        '/course' => [[['_route' => 'app_course', '_controller' => 'App\\Controller\\FitnessController::course'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\FitnessController::blog'], null, null, null, false, false, null]],
        '/feature' => [[['_route' => 'app_feature', '_controller' => 'App\\Controller\\FitnessController::feature'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'app_team', '_controller' => 'App\\Controller\\FitnessController::team'], null, null, null, false, false, null]],
        '/testimonial' => [[['_route' => 'app_testimonial', '_controller' => 'App\\Controller\\FitnessController::testimonial'], null, null, null, false, false, null]],
        '/404' => [[['_route' => 'app_404', '_controller' => 'App\\Controller\\FitnessController::notFound'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\FitnessController::contact'], null, null, null, false, false, null]],
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
        '/joueur/tracking' => [[['_route' => 'joueur_tracking', '_controller' => 'App\\Controller\\JoueurController::trackingRedirect'], null, ['GET' => 0], null, false, false, null]],
        '/joueur/formations' => [[['_route' => 'football_layout', '_controller' => 'App\\Controller\\JoueurController::layout'], null, null, null, false, false, null]],
        '/match/main' => [[['_route' => 'match_main', '_controller' => 'App\\Controller\\MatchController::index'], null, ['GET' => 0], null, false, false, null]],
        '/match/new' => [[['_route' => 'match_new', '_controller' => 'App\\Controller\\MatchController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/match/stats' => [[['_route' => 'match_statistics', '_controller' => 'App\\Controller\\MatchController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/performance_joueur/stats' => [[['_route' => 'performance_joueur_stats', '_controller' => 'App\\Controller\\PerformanceJoueurController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/performance_joueur' => [[['_route' => 'performance_joueur_index', '_controller' => 'App\\Controller\\PerformanceJoueurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/performance_joueur/new' => [[['_route' => 'performance_joueur_new', '_controller' => 'App\\Controller\\PerformanceJoueurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/new' => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/statistics' => [[['_route' => 'reservation_statistics', '_controller' => 'App\\Controller\\ReservationController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/schedule/mainF' => [[['_route' => 'schedule_mainF', '_controller' => 'App\\Controller\\ScheduleController::mainF'], null, ['GET' => 0], null, false, false, null]],
        '/schedule/main' => [[['_route' => 'schedule_main', '_controller' => 'App\\Controller\\ScheduleController::main'], null, ['GET' => 0], null, false, false, null]],
        '/schedule/statistics' => [[['_route' => 'schedule_statistics', '_controller' => 'App\\Controller\\ScheduleController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/schedule/search' => [[['_route' => 'schedule_search', '_controller' => 'App\\Controller\\ScheduleController::search'], null, ['GET' => 0], null, false, false, null]],
        '/schedule/new' => [[['_route' => 'schedule_new', '_controller' => 'App\\Controller\\ScheduleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/schedule/test-view' => [[['_route' => 'test_view', '_controller' => 'App\\Controller\\ScheduleController::testView'], null, null, null, false, false, null]],
        '/schedule/export/pdf' => [[['_route' => 'schedule_export_pdf', '_controller' => 'App\\Controller\\ScheduleController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/schedule/export/csv' => [[['_route' => 'schedule_export_csv', '_controller' => 'App\\Controller\\ScheduleController::exportCsv'], null, ['GET' => 0], null, false, false, null]],
        '/schedule/export/excel' => [[['_route' => 'schedule_export_excel', '_controller' => 'App\\Controller\\ScheduleController::exportExcel'], null, ['GET' => 0], null, false, false, null]],
        '/schedule/google-callback' => [[['_route' => 'schedule_google_callback', '_controller' => 'App\\Controller\\ScheduleController::googleCallback'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/club/(?'
                    .'|(\\d+)(*:216)'
                    .'|(\\d+)/edit(*:234)'
                    .'|(\\d+)(*:247)'
                .')'
                .'|/e(?'
                    .'|space/(?'
                        .'|(\\d+)(*:275)'
                        .'|(\\d+)/edit(*:293)'
                        .'|(\\d+)(*:306)'
                    .')'
                    .'|valuation_physique/(?'
                        .'|([^/]++)(?'
                            .'|(*:348)'
                            .'|/edit(*:361)'
                            .'|(*:369)'
                        .')'
                        .'|joueur/([^/]++)(*:393)'
                    .')'
                .')'
                .'|/historique/club/(?'
                    .'|([^/]++)(?'
                        .'|(*:434)'
                        .'|/edit(*:447)'
                        .'|(*:455)'
                    .')'
                    .'|joueur/([^/]++)(*:479)'
                    .'|club/([^/]++)/current(*:508)'
                .')'
                .'|/joueur/(?'
                    .'|([^/]++)/edit(*:541)'
                    .'|(\\d+)(*:554)'
                    .'|([^/]++)/delete(*:577)'
                .')'
                .'|/match/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:612)'
                        .'|delete(*:626)'
                    .')'
                    .'|(*:635)'
                .')'
                .'|/performance_joueur/([^/]++)(?'
                    .'|(*:675)'
                    .'|/edit(*:688)'
                    .'|(*:696)'
                .')'
                .'|/reservation/(?'
                    .'|(\\d+)(*:726)'
                    .'|(\\d+)/edit(*:744)'
                    .'|(\\d+)(*:757)'
                .')'
                .'|/s(?'
                    .'|chedule/(?'
                        .'|(\\d+)(*:787)'
                        .'|(\\d+)/showF(*:806)'
                        .'|(\\d+)/edit(*:824)'
                        .'|(\\d+)/delete(*:844)'
                        .'|(\\d+)/add\\-to\\-google\\-calendar(*:883)'
                        .'|(\\d+)/news(*:901)'
                    .')'
                    .'|port/(?'
                        .'|(\\d+)(*:923)'
                        .'|(\\d+)/edit(*:941)'
                        .'|(\\d+)(*:954)'
                    .')'
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
        275 => [[['_route' => 'espace_show', '_controller' => 'App\\Controller\\EspacesportifController::show'], ['id_lieu'], ['GET' => 0], null, false, true, null]],
        293 => [[['_route' => 'espace_edit', '_controller' => 'App\\Controller\\EspacesportifController::edit'], ['id_lieu'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        306 => [[['_route' => 'espace_delete', '_controller' => 'App\\Controller\\EspacesportifController::delete'], ['id_lieu'], ['POST' => 0], null, false, true, null]],
        348 => [[['_route' => 'app_evaluation_physique_show', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::show'], ['idEvaluation'], ['GET' => 0], null, false, true, null]],
        361 => [[['_route' => 'app_evaluation_physique_edit', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::edit'], ['idEvaluation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        369 => [[['_route' => 'app_evaluation_physique_delete', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::delete'], ['idEvaluation'], ['POST' => 0], null, false, true, null]],
        393 => [[['_route' => 'app_evaluation_physique_by_joueur', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::evaluationsByJoueur'], ['joueurId'], ['GET' => 0], null, false, true, null]],
        434 => [[['_route' => 'app_historique_club_show', '_controller' => 'App\\Controller\\HistoriqueClubController::show'], ['idHistorique'], ['GET' => 0], null, false, true, null]],
        447 => [[['_route' => 'app_historique_club_edit', '_controller' => 'App\\Controller\\HistoriqueClubController::edit'], ['idHistorique'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        455 => [[['_route' => 'app_historique_club_delete', '_controller' => 'App\\Controller\\HistoriqueClubController::delete'], ['idHistorique'], ['POST' => 0], null, false, true, null]],
        479 => [[['_route' => 'app_historique_club_by_joueur', '_controller' => 'App\\Controller\\HistoriqueClubController::findByJoueur'], ['joueurId'], ['GET' => 0], null, false, true, null]],
        508 => [[['_route' => 'app_historique_club_current_by_club', '_controller' => 'App\\Controller\\HistoriqueClubController::findCurrentPlayersByClub'], ['clubName'], ['GET' => 0], null, false, false, null]],
        541 => [[['_route' => 'joueur_edit', '_controller' => 'App\\Controller\\JoueurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        554 => [[['_route' => 'joueur_show', '_controller' => 'App\\Controller\\JoueurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        577 => [[['_route' => 'joueur_delete', '_controller' => 'App\\Controller\\JoueurController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        612 => [[['_route' => 'match_edit', '_controller' => 'App\\Controller\\MatchController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        626 => [[['_route' => 'match_delete', '_controller' => 'App\\Controller\\MatchController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        635 => [[['_route' => 'match_show', '_controller' => 'App\\Controller\\MatchController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        675 => [[['_route' => 'performance_joueur_show', '_controller' => 'App\\Controller\\PerformanceJoueurController::show'], ['idPerformance'], ['GET' => 0], null, false, true, null]],
        688 => [[['_route' => 'performance_joueur_edit', '_controller' => 'App\\Controller\\PerformanceJoueurController::edit'], ['idPerformance'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        696 => [[['_route' => 'performance_joueur_delete', '_controller' => 'App\\Controller\\PerformanceJoueurController::delete'], ['idPerformance'], ['POST' => 0], null, false, true, null]],
        726 => [[['_route' => 'reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id_reservation'], ['GET' => 0], null, false, true, null]],
        744 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id_reservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        757 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id_reservation'], ['POST' => 0], null, false, true, null]],
        787 => [[['_route' => 'schedule_show', '_controller' => 'App\\Controller\\ScheduleController::show'], ['idSchedule'], ['GET' => 0], null, false, true, null]],
        806 => [[['_route' => 'schedule_showF', '_controller' => 'App\\Controller\\ScheduleController::showF'], ['idSchedule'], ['GET' => 0], null, false, false, null]],
        824 => [[['_route' => 'schedule_edit', '_controller' => 'App\\Controller\\ScheduleController::edit'], ['idSchedule'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        844 => [[['_route' => 'schedule_delete', '_controller' => 'App\\Controller\\ScheduleController::delete'], ['idSchedule'], ['POST' => 0], null, false, false, null]],
        883 => [[['_route' => 'schedule_add_to_google_calendar', '_controller' => 'App\\Controller\\ScheduleController::addToGoogleCalendar'], ['idSchedule'], ['GET' => 0], null, false, false, null]],
        901 => [[['_route' => 'schedule_news', '_controller' => 'App\\Controller\\ScheduleController::news'], ['idSchedule'], ['GET' => 0], null, false, false, null]],
        923 => [[['_route' => 'sport_show', '_controller' => 'App\\Controller\\SportController::show'], ['idSport'], ['GET' => 0], null, false, true, null]],
        941 => [[['_route' => 'sport_edit', '_controller' => 'App\\Controller\\SportController::edit'], ['idSport'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        954 => [
            [['_route' => 'sport_delete', '_controller' => 'App\\Controller\\SportController::delete'], ['idSport'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
