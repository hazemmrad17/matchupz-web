<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/user/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\UserController::forgotPassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/reset-password' => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\UserController::resetPassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/forgot-passwordB' => [[['_route' => 'app_forgot_passwordB', '_controller' => 'App\\Controller\\UserController::forgotPasswordB'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/reset-passwordB' => [[['_route' => 'app_reset_passwordB', '_controller' => 'App\\Controller\\UserController::resetPasswordB'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/contrat/main' => [[['_route' => 'contrat_main', '_controller' => 'App\\Controller\\ContratController::index'], null, ['GET' => 0], null, false, false, null]],
        '/contrat/new' => [[['_route' => 'contrat_new', '_controller' => 'App\\Controller\\ContratController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contrat/statistics' => [[['_route' => 'contrat_statistics', '_controller' => 'App\\Controller\\ContratController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/contrat/front' => [[['_route' => 'contrat_front', '_controller' => 'App\\Controller\\ContratController::front'], null, ['GET' => 0], null, false, false, null]],
        '/contrat/contrat/send-sms' => [[['_route' => 'contrat_send_sms', '_controller' => 'App\\Controller\\ContratController::sendTwilioSms'], null, ['POST' => 0], null, false, false, null]],
        '/contrat/check-expiring' => [[['_route' => 'contrat_check_expiring', '_controller' => 'App\\Controller\\ContratController::checkExpiringContractsAction'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/espace' => [[['_route' => 'espace_index', '_controller' => 'App\\Controller\\EspacesportifController::index'], null, ['GET' => 0], null, true, false, null]],
        '/espace/export/csv' => [[['_route' => 'espace_export_csv', '_controller' => 'App\\Controller\\EspacesportifController::exportCsv'], null, null, null, false, false, null]],
        '/espace/export/pdf' => [[['_route' => 'espace_export_pdf', '_controller' => 'App\\Controller\\EspacesportifController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/espace/export/excel' => [[['_route' => 'espace_export_excel', '_controller' => 'App\\Controller\\EspacesportifController::exportExcel'], null, null, null, false, false, null]],
        '/espace/new' => [[['_route' => 'espace_new', '_controller' => 'App\\Controller\\EspacesportifController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/espace/statistics' => [[['_route' => 'espace_statistics', '_controller' => 'App\\Controller\\EspacesportifController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/espace/front' => [[['_route' => 'app_espace_sportifs', '_controller' => 'App\\Controller\\EspacesportifController::front'], null, ['GET' => 0], null, false, false, null]],
        '/espace/recommend' => [[['_route' => 'espace_recommend', '_controller' => 'App\\Controller\\EspacesportifController::recommend'], null, ['POST' => 0], null, false, false, null]],
        '/evaluation_physique/statistiques' => [[['_route' => 'app_evaluation_physique_stats', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/evaluation_physique/maintenance' => [[['_route' => 'app_maintenance', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::maintenance'], null, null, null, false, false, null]],
        '/evaluation_physique' => [[['_route' => 'app_evaluation_physique_index', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evaluation_physique/new' => [[['_route' => 'app_evaluation_physique_new', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/face-id-authenticate' => [[['_route' => 'app_face_id_authenticate', '_controller' => 'App\\Controller\\FaceIdController::authenticate'], null, ['POST' => 0], null, false, false, null]],
        '/fournisseur/fournisseur' => [[['_route' => 'app_fournisseur_index', '_controller' => 'App\\Controller\\FournisseurController::index'], null, null, null, false, false, null]],
        '/fournisseur' => [[['_route' => 'app_fournisseur_indexF', '_controller' => 'App\\Controller\\FournisseurController::indexF'], null, null, null, true, false, null]],
        '/fournisseur/new' => [[['_route' => 'app_fournisseur_new', '_controller' => 'App\\Controller\\FournisseurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fournisseur/fournisseur/widgets' => [[['_route' => 'app_fournisseur_widgets', '_controller' => 'App\\Controller\\FournisseurController::widgets'], null, null, null, false, false, null]],
        '/fournisseur/fournisseur/stats' => [[['_route' => 'app_fournisseur_stats', '_controller' => 'App\\Controller\\FournisseurController::stats'], null, null, null, false, false, null]],
        '/gemini/ask' => [[['_route' => 'gemini_chat_ask', '_controller' => 'App\\Controller\\GeminiController::ask'], null, ['POST' => 0], null, false, false, null]],
        '/historique/club' => [[['_route' => 'app_historique_club_index', '_controller' => 'App\\Controller\\HistoriqueClubController::index'], null, ['GET' => 0], null, true, false, null]],
        '/historique/club/statistics' => [[['_route' => 'app_historique_club_stats', '_controller' => 'App\\Controller\\HistoriqueClubController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/historique/club/new' => [[['_route' => 'app_historique_club_new', '_controller' => 'App\\Controller\\HistoriqueClubController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/historique/club/export/csv' => [[['_route' => 'app_historique_club_export_csv', '_controller' => 'App\\Controller\\HistoriqueClubController::exportCsv'], null, null, null, false, false, null]],
        '/historique/club/export/pdf' => [[['_route' => 'app_historique_club_export_pdf', '_controller' => 'App\\Controller\\HistoriqueClubController::exportPdf'], null, null, null, false, false, null]],
        '/historique/club/export/excel' => [[['_route' => 'app_historique_club_export_excel', '_controller' => 'App\\Controller\\HistoriqueClubController::exportExcel'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/joueur/test' => [[['_route' => 'joueur_test', '_controller' => 'App\\Controller\\JoueurController::test'], null, ['GET' => 0], null, false, false, null]],
        '/joueur' => [[['_route' => 'joueur_main', '_controller' => 'App\\Controller\\JoueurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/joueur/statistics' => [[['_route' => 'joueur_statistics', '_controller' => 'App\\Controller\\JoueurController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/joueur/new' => [[['_route' => 'joueur_new', '_controller' => 'App\\Controller\\JoueurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/joueur/export/csv' => [[['_route' => 'joueur_export_csv', '_controller' => 'App\\Controller\\JoueurController::exportCsv'], null, null, null, false, false, null]],
        '/joueur/export/pdf' => [[['_route' => 'joueur_export_pdf', '_controller' => 'App\\Controller\\JoueurController::exportPdf'], null, null, null, false, false, null]],
        '/joueur/export/excel' => [[['_route' => 'joueur_export_excel', '_controller' => 'App\\Controller\\JoueurController::exportExcel'], null, null, null, false, false, null]],
        '/joueur/formations' => [[['_route' => 'football_layout', '_controller' => 'App\\Controller\\JoueurController::layout'], null, null, null, false, false, null]],
        '/joueur/features' => [[['_route' => 'app_features', '_controller' => 'App\\Controller\\JoueurController::features'], null, null, null, false, false, null]],
        '/joueur/scouting' => [[['_route' => 'joueur_scouting', '_controller' => 'App\\Controller\\JoueurController::scouting'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/joueur/football_analysis' => [[['_route' => 'football_analysis', '_controller' => 'App\\Controller\\JoueurController::footballAnalysis'], null, null, null, false, false, null]],
        '/match/main' => [[['_route' => 'match_main', '_controller' => 'App\\Controller\\MatchController::index'], null, ['GET' => 0], null, false, false, null]],
        '/match/new' => [[['_route' => 'match_new', '_controller' => 'App\\Controller\\MatchController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/match/stats' => [[['_route' => 'match_statistics', '_controller' => 'App\\Controller\\MatchController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/materiel' => [[['_route' => 'app_materiel_index', '_controller' => 'App\\Controller\\MaterielController::index'], null, null, null, true, false, null]],
        '/materiel/scan' => [[['_route' => 'app_materiel_scan', '_controller' => 'App\\Controller\\MaterielController::scan'], null, ['GET' => 0], null, false, false, null]],
        '/materiel/materiel' => [[['_route' => 'app_materiel_indexF', '_controller' => 'App\\Controller\\MaterielController::indexF'], null, ['GET' => 0], null, false, false, null]],
        '/materiel/new' => [[['_route' => 'app_materiel_new', '_controller' => 'App\\Controller\\MaterielController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/materiel/statistics' => [[['_route' => 'app_materiel_statistics', '_controller' => 'App\\Controller\\MaterielController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/materiel/export/csv' => [[['_route' => 'app_materiel_export_csv', '_controller' => 'App\\Controller\\MaterielController::exportCsv'], null, null, null, false, false, null]],
        '/materiel/export/pdf' => [[['_route' => 'app_materiel_export_pdf', '_controller' => 'App\\Controller\\MaterielController::exportPdf'], null, null, null, false, false, null]],
        '/materiel/export/excel' => [[['_route' => 'app_materiel_export_excel', '_controller' => 'App\\Controller\\MaterielController::exportExcel'], null, null, null, false, false, null]],
        '/materiel/search' => [[['_route' => 'app_materiel_search', '_controller' => 'App\\Controller\\MaterielController::search'], null, ['GET' => 0], null, false, false, null]],
        '/materiel/materiel/analyze-image-AI' => [[['_route' => 'app_materiel_analyze_image_AI', '_controller' => 'App\\Controller\\MaterielController::analyzeImageAI'], null, ['POST' => 0], null, false, false, null]],
        '/materiel/materiel/analyze-image' => [[['_route' => 'app_materiel_analyze_image', '_controller' => 'App\\Controller\\MaterielController::analyzeImage'], null, ['POST' => 0], null, false, false, null]],
        '/materiel/detect-object-webcam' => [[['_route' => 'app_materiel_detect_object_webcam', '_controller' => 'App\\Controller\\MaterielController::detectObjectWebcam'], null, ['POST' => 0], null, false, false, null]],
        '/performance_joueur/stats' => [[['_route' => 'performance_joueur_stats', '_controller' => 'App\\Controller\\PerformanceJoueurController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/performance_joueur' => [[['_route' => 'performance_joueur_index', '_controller' => 'App\\Controller\\PerformanceJoueurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation' => [[['_route' => 'reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/export/csv' => [[['_route' => 'reservation_export_csv', '_controller' => 'App\\Controller\\ReservationController::exportCsv'], null, null, null, false, false, null]],
        '/reservation/export/pdf' => [[['_route' => 'reservation_export_pdf', '_controller' => 'App\\Controller\\ReservationController::exportPdf'], null, null, null, false, false, null]],
        '/reservation/export/excel' => [[['_route' => 'reservation_export_excel', '_controller' => 'App\\Controller\\ReservationController::exportExcel'], null, null, null, false, false, null]],
        '/reservation/new' => [[['_route' => 'reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/statistics' => [[['_route' => 'reservation_statistics', '_controller' => 'App\\Controller\\ReservationController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/google-auth' => [[['_route' => 'google_auth', '_controller' => 'App\\Controller\\ReservationController::googleAuth'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/google-logout' => [[['_route' => 'google_logout', '_controller' => 'App\\Controller\\ReservationController::googleLogout'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/google-callback' => [[['_route' => 'google_callback', '_controller' => 'App\\Controller\\ReservationController::googleCallback'], null, ['GET' => 0], null, false, false, null]],
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
        '/connect/google' => [[['_route' => 'connect_google', '_controller' => 'App\\Controller\\SecurityController::connectGoogle'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\SecurityController::connectGoogleCheck'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/check-face-id-available' => [[['_route' => 'check_face_id_available', '_controller' => 'App\\Controller\\SecurityController::checkFaceIdAvailable'], null, ['POST' => 0], null, false, false, null]],
        '/verify-face-id' => [[['_route' => 'verify_face_id', '_controller' => 'App\\Controller\\SecurityController::verifyFaceId'], null, ['POST' => 0], null, false, false, null]],
        '/sponsor/main' => [[['_route' => 'sponsor_main', '_controller' => 'App\\Controller\\SponsorController::main'], null, ['GET' => 0], null, false, false, null]],
        '/sponsor/sponsor/search' => [[['_route' => 'sponsor_search', '_controller' => 'App\\Controller\\SponsorController::search'], null, ['GET' => 0], null, false, false, null]],
        '/sponsor/statistics' => [[['_route' => 'sponsor_statistics', '_controller' => 'App\\Controller\\SponsorController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/sponsor/new' => [[['_route' => 'sponsor_new', '_controller' => 'App\\Controller\\SponsorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sponsor/front' => [[['_route' => 'sponsor_front', '_controller' => 'App\\Controller\\SponsorController::front'], null, ['GET' => 0], null, false, false, null]],
        '/sport' => [[['_route' => 'sport_index', '_controller' => 'App\\Controller\\SportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sport/new' => [[['_route' => 'sport_new', '_controller' => 'App\\Controller\\SportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sport/statistics' => [[['_route' => 'sport_statistics', '_controller' => 'App\\Controller\\SportController::statistics'], null, ['GET' => 0], null, false, false, null]],
        '/sport/export/csv' => [[['_route' => 'sport_export_csv', '_controller' => 'App\\Controller\\SportController::exportCsv'], null, null, null, false, false, null]],
        '/sport/export/pdf' => [[['_route' => 'sport_export_pdf', '_controller' => 'App\\Controller\\SportController::exportPdf'], null, null, null, false, false, null]],
        '/sport/export/excel' => [[['_route' => 'sport_export_excel', '_controller' => 'App\\Controller\\SportController::exportExcel'], null, null, null, false, false, null]],
        '/test-auth' => [[['_route' => 'test_auth', '_controller' => 'App\\Controller\\TestController::testAuth'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/registerF' => [[['_route' => 'app_registerF', '_controller' => 'App\\Controller\\UserController::registerF'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/user/pagenjareb' => [[['_route' => 'app_jareb', '_controller' => 'App\\Controller\\UserController::pagejareb'], null, null, null, false, false, null]],
        '/user/verif-userF' => [[['_route' => 'app_verif_userF', '_controller' => 'App\\Controller\\UserController::verifUserF'], null, ['POST' => 0], null, false, false, null]],
        '/user/acceuil' => [[['_route' => 'app_acceuil', '_controller' => 'App\\Controller\\UserController::acceuil'], null, null, null, false, false, null]],
        '/user/export-pdf' => [[['_route' => 'app_user_export_pdf', '_controller' => 'App\\Controller\\UserController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/user/verif-user' => [[['_route' => 'app_verif_user', '_controller' => 'App\\Controller\\UserController::verifUser'], null, ['POST' => 0], null, false, false, null]],
        '/user/auth' => [[['_route' => 'app_user_auth', '_controller' => 'App\\Controller\\UserController::auth'], null, null, null, false, false, null]],
        '/user/logout' => [[['_route' => 'app_user_logout', '_controller' => 'App\\Controller\\UserController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/user/logoutF' => [[['_route' => 'app_user_logoutF', '_controller' => 'App\\Controller\\UserController::logoutF'], null, ['GET' => 0], null, false, false, null]],
        '/user/register' => [[['_route' => 'app_user_register', '_controller' => 'App\\Controller\\UserController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, null, null, false, false, null]],
        '/user/profile' => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\UserController::profile'], null, ['GET' => 0], null, false, false, null]],
        '/gemini' => [[['_route' => 'gemini_chat', '_controller' => 'App\\Controller\\GeminiController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/c(?'
                    .'|lub/(?'
                        .'|(\\d+)/edit(*:284)'
                        .'|(\\d+)(?'
                            .'|(*:300)'
                        .')'
                    .')'
                    .'|ontrat/(?'
                        .'|(\\d+)(*:325)'
                        .'|(\\d+)/edit(*:343)'
                        .'|(\\d+)(*:356)'
                        .'|export(?:/([^/]++)(?:/(\\d+))?)?(*:395)'
                    .')'
                .')'
                .'|/e(?'
                    .'|space/(?'
                        .'|(\\d+)(*:424)'
                        .'|(\\d+)/edit(*:442)'
                        .'|(\\d+)(*:455)'
                    .')'
                    .'|valuation_physique/(?'
                        .'|([^/]++)(?'
                            .'|(*:497)'
                            .'|/edit(*:510)'
                            .'|(*:518)'
                        .')'
                        .'|joueur/([^/]++)(*:542)'
                    .')'
                .')'
                .'|/fournisseur/(?'
                    .'|fournisseur/(\\d+)(*:585)'
                    .'|([^/]++)(?'
                        .'|(*:604)'
                        .'|/edit(*:617)'
                        .'|(*:625)'
                    .')'
                    .'|fournisseur/export/(csv|xlsx)(*:663)'
                .')'
                .'|/historique/club/(?'
                    .'|([^/]++)(?'
                        .'|/edit(*:708)'
                        .'|(*:716)'
                    .')'
                    .'|joueur/([^/]++)(*:740)'
                    .'|club/([^/]++)/current(*:769)'
                .')'
                .'|/joueur/(?'
                    .'|([^/]++)/edit(*:802)'
                    .'|(\\d+)(*:815)'
                    .'|([^/]++)/delete(*:838)'
                .')'
                .'|/mat(?'
                    .'|ch/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:876)'
                            .'|delete(*:890)'
                        .')'
                        .'|(*:899)'
                    .')'
                    .'|eriel/(?'
                        .'|materiel/(\\d+)(*:931)'
                        .'|(\\d+)/edit(*:949)'
                        .'|(\\d+)(*:962)'
                        .'|([^/]++)/notify\\-slack(*:992)'
                        .'|(\\d+)(*:1005)'
                        .'|fournisseurs\\-by\\-type/([^/]++)(*:1045)'
                    .')'
                .')'
                .'|/performance_joueur/(?'
                    .'|new(?:/(\\d+))?(*:1093)'
                    .'|([^/]++)(?'
                        .'|(*:1113)'
                        .'|/edit(*:1127)'
                        .'|(*:1136)'
                    .')'
                    .'|joueur/([^/]++)(*:1161)'
                .')'
                .'|/reservation/(?'
                    .'|(\\d+)(*:1192)'
                    .'|(\\d+)/edit(*:1211)'
                    .'|(\\d+)(*:1225)'
                    .'|(\\d+)/add\\-to\\-google\\-calendar(*:1265)'
                .')'
                .'|/s(?'
                    .'|chedule/(?'
                        .'|(\\d+)(*:1296)'
                        .'|(\\d+)/showF(*:1316)'
                        .'|(\\d+)/edit(*:1335)'
                        .'|(\\d+)/delete(*:1356)'
                        .'|(\\d+)/add\\-to\\-google\\-calendar(*:1396)'
                        .'|(\\d+)/news(*:1415)'
                    .')'
                    .'|po(?'
                        .'|nsor/(?'
                            .'|(\\d+)(*:1443)'
                            .'|(\\d+)/edit(*:1462)'
                            .'|(\\d+)(*:1476)'
                            .'|export(?:/([^/]++))?(*:1505)'
                            .'|(\\d+)/stripe\\-charge(*:1534)'
                        .')'
                        .'|rt/(?'
                            .'|(\\d+)/edit(*:1560)'
                            .'|(\\d+)(?'
                                .'|(*:1577)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:1607)'
                    .'|profileF(*:1624)'
                    .'|([^/]++)(?'
                        .'|(*:1644)'
                        .'|/edit(?'
                            .'|(*:1661)'
                            .'|Front(*:1675)'
                        .')'
                    .')'
                    .'|face\\-id\\-login(*:1701)'
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
        284 => [[['_route' => 'club_edit', '_controller' => 'App\\Controller\\ClubController::edit'], ['idClub'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        300 => [
            [['_route' => 'club_show', '_controller' => 'App\\Controller\\ClubController::show'], ['idClub'], ['GET' => 0], null, false, true, null],
            [['_route' => 'club_delete', '_controller' => 'App\\Controller\\ClubController::delete'], ['idClub'], ['POST' => 0], null, false, true, null],
        ],
        325 => [[['_route' => 'contrat_show', '_controller' => 'App\\Controller\\ContratController::show'], ['idContrat'], ['GET' => 0], null, false, true, null]],
        343 => [[['_route' => 'contrat_edit', '_controller' => 'App\\Controller\\ContratController::edit'], ['idContrat'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        356 => [[['_route' => 'contrat_delete', '_controller' => 'App\\Controller\\ContratController::delete'], ['idContrat'], ['POST' => 0], null, false, true, null]],
        395 => [[['_route' => 'contrat_export', 'idContrat' => null, 'format' => 'xlsx', '_controller' => 'App\\Controller\\ContratController::export'], ['format', 'idContrat'], null, null, false, true, null]],
        424 => [[['_route' => 'espace_show', '_controller' => 'App\\Controller\\EspacesportifController::show'], ['id_lieu'], ['GET' => 0], null, false, true, null]],
        442 => [[['_route' => 'espace_edit', '_controller' => 'App\\Controller\\EspacesportifController::edit'], ['id_lieu'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        455 => [[['_route' => 'espace_delete', '_controller' => 'App\\Controller\\EspacesportifController::delete'], ['id_lieu'], ['POST' => 0], null, false, true, null]],
        497 => [[['_route' => 'app_evaluation_physique_show', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::show'], ['idEvaluation'], ['GET' => 0], null, false, true, null]],
        510 => [[['_route' => 'app_evaluation_physique_edit', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::edit'], ['idEvaluation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        518 => [[['_route' => 'app_evaluation_physique_delete', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::delete'], ['idEvaluation'], ['POST' => 0], null, false, true, null]],
        542 => [[['_route' => 'app_evaluation_physique_by_joueur', '_controller' => 'App\\Controller\\EvaluationPhysiqueController::evaluationsByJoueur'], ['joueurId'], ['GET' => 0], null, false, true, null]],
        585 => [[['_route' => 'app_fournisseur_show', '_controller' => 'App\\Controller\\FournisseurController::show'], ['id_fournisseur'], null, null, false, true, null]],
        604 => [[['_route' => 'app_fournisseur_showF', '_controller' => 'App\\Controller\\FournisseurController::showF'], ['id_fournisseur'], ['GET' => 0], null, false, true, null]],
        617 => [[['_route' => 'app_fournisseur_edit', '_controller' => 'App\\Controller\\FournisseurController::edit'], ['id_fournisseur'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        625 => [[['_route' => 'app_fournisseur_delete', '_controller' => 'App\\Controller\\FournisseurController::delete'], ['id_fournisseur'], ['POST' => 0], null, false, true, null]],
        663 => [[['_route' => 'app_fournisseur_export', '_controller' => 'App\\Controller\\FournisseurController::export'], ['format'], null, null, false, true, null]],
        708 => [[['_route' => 'app_historique_club_edit', '_controller' => 'App\\Controller\\HistoriqueClubController::edit'], ['idHistorique'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        716 => [
            [['_route' => 'app_historique_club_show', '_controller' => 'App\\Controller\\HistoriqueClubController::show'], ['idHistorique'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_historique_club_delete', '_controller' => 'App\\Controller\\HistoriqueClubController::delete'], ['idHistorique'], ['POST' => 0], null, false, true, null],
        ],
        740 => [[['_route' => 'app_historique_club_by_joueur', '_controller' => 'App\\Controller\\HistoriqueClubController::findByJoueur'], ['joueurId'], ['GET' => 0], null, false, true, null]],
        769 => [[['_route' => 'app_historique_club_current_by_club', '_controller' => 'App\\Controller\\HistoriqueClubController::findCurrentPlayersByClub'], ['clubName'], ['GET' => 0], null, false, false, null]],
        802 => [[['_route' => 'joueur_edit', '_controller' => 'App\\Controller\\JoueurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        815 => [[['_route' => 'joueur_show', '_controller' => 'App\\Controller\\JoueurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        838 => [[['_route' => 'joueur_delete', '_controller' => 'App\\Controller\\JoueurController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        876 => [[['_route' => 'match_edit', '_controller' => 'App\\Controller\\MatchController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        890 => [[['_route' => 'match_delete', '_controller' => 'App\\Controller\\MatchController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        899 => [[['_route' => 'match_show', '_controller' => 'App\\Controller\\MatchController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        931 => [[['_route' => 'app_materiel_showF', '_controller' => 'App\\Controller\\MaterielController::showF'], ['id'], ['GET' => 0], null, false, true, null]],
        949 => [[['_route' => 'app_materiel_edit', '_controller' => 'App\\Controller\\MaterielController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        962 => [[['_route' => 'app_materiel_delete', '_controller' => 'App\\Controller\\MaterielController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        992 => [[['_route' => 'app_materiel_notify_slack', '_controller' => 'App\\Controller\\MaterielController::notifySlack'], ['id'], ['POST' => 0], null, false, false, null]],
        1005 => [[['_route' => 'app_materiel_show', '_controller' => 'App\\Controller\\MaterielController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1045 => [[['_route' => 'app_fournisseurs_by_type', '_controller' => 'App\\Controller\\MaterielController::fournisseursByType'], ['type'], ['GET' => 0], null, false, true, null]],
        1093 => [[['_route' => 'performance_joueur_new', 'joueurId' => null, '_controller' => 'App\\Controller\\PerformanceJoueurController::new'], ['joueurId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1113 => [[['_route' => 'performance_joueur_show', '_controller' => 'App\\Controller\\PerformanceJoueurController::show'], ['idPerformance'], ['GET' => 0], null, false, true, null]],
        1127 => [[['_route' => 'performance_joueur_edit', '_controller' => 'App\\Controller\\PerformanceJoueurController::edit'], ['idPerformance'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1136 => [[['_route' => 'performance_joueur_delete', '_controller' => 'App\\Controller\\PerformanceJoueurController::delete'], ['idPerformance'], ['POST' => 0], null, false, true, null]],
        1161 => [[['_route' => 'app_performance_joueur_by_joueur', '_controller' => 'App\\Controller\\PerformanceJoueurController::performancesByJoueur'], ['joueurId'], ['GET' => 0], null, false, true, null]],
        1192 => [[['_route' => 'reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id_reservation'], ['GET' => 0], null, false, true, null]],
        1211 => [[['_route' => 'reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id_reservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1225 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id_reservation'], ['POST' => 0], null, false, true, null]],
        1265 => [[['_route' => 'reservation_add_to_google_calendar', '_controller' => 'App\\Controller\\ReservationController::addToGoogleCalendar'], ['id_reservation'], ['GET' => 0], null, false, false, null]],
        1296 => [[['_route' => 'schedule_show', '_controller' => 'App\\Controller\\ScheduleController::show'], ['idSchedule'], ['GET' => 0], null, false, true, null]],
        1316 => [[['_route' => 'schedule_showF', '_controller' => 'App\\Controller\\ScheduleController::showF'], ['idSchedule'], ['GET' => 0], null, false, false, null]],
        1335 => [[['_route' => 'schedule_edit', '_controller' => 'App\\Controller\\ScheduleController::edit'], ['idSchedule'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1356 => [[['_route' => 'schedule_delete', '_controller' => 'App\\Controller\\ScheduleController::delete'], ['idSchedule'], ['POST' => 0], null, false, false, null]],
        1396 => [[['_route' => 'schedule_add_to_google_calendar', '_controller' => 'App\\Controller\\ScheduleController::addToGoogleCalendar'], ['idSchedule'], ['GET' => 0], null, false, false, null]],
        1415 => [[['_route' => 'schedule_news', '_controller' => 'App\\Controller\\ScheduleController::news'], ['idSchedule'], ['GET' => 0], null, false, false, null]],
        1443 => [[['_route' => 'sponsor_show', '_controller' => 'App\\Controller\\SponsorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1462 => [[['_route' => 'sponsor_edit', '_controller' => 'App\\Controller\\SponsorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1476 => [[['_route' => 'sponsor_delete', '_controller' => 'App\\Controller\\SponsorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1505 => [[['_route' => 'sponsor_export', 'format' => 'xlsx', '_controller' => 'App\\Controller\\SponsorController::export'], ['format'], null, null, false, true, null]],
        1534 => [[['_route' => 'sponsor_stripe_charge', '_controller' => 'App\\Controller\\SponsorController::createCharge'], ['id'], ['POST' => 0], null, false, false, null]],
        1560 => [[['_route' => 'sport_edit', '_controller' => 'App\\Controller\\SportController::edit'], ['idSport'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1577 => [
            [['_route' => 'sport_delete', '_controller' => 'App\\Controller\\SportController::delete'], ['idSport'], ['POST' => 0], null, false, true, null],
            [['_route' => 'sport_show', '_controller' => 'App\\Controller\\SportController::show'], ['idSport'], ['GET' => 0], null, false, true, null],
        ],
        1607 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id_user'], ['POST' => 0], null, false, true, null]],
        1624 => [[['_route' => 'app_user_profile_front', '_controller' => 'App\\Controller\\UserController::profileF'], [], ['GET' => 0], null, false, false, null]],
        1644 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id_user'], ['GET' => 0], null, false, true, null]],
        1661 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1675 => [[['_route' => 'app_user_edit_profile_front', '_controller' => 'App\\Controller\\UserController::editFront'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1701 => [
            [['_route' => 'app_face_id_login', '_controller' => 'App\\Controller\\UserController::faceIdLogin'], [], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
