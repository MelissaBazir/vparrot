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
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/utilisateur/nouveau' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/occasions' => [[['_route' => 'occasions_list', '_controller' => 'App\\Controller\\CarController::list'], null, ['GET' => 0], null, false, false, null]],
        '/profil/occasions' => [[['_route' => 'app_car_index', '_controller' => 'App\\Controller\\CarController::index'], null, ['GET' => 0], null, false, false, null]],
        '/profil/occasions/nouveau' => [[['_route' => 'app_car_new', '_controller' => 'App\\Controller\\CarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/sociétés' => [[['_route' => 'app_company_index', '_controller' => 'App\\Controller\\CompanyController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/sociétés/new' => [[['_route' => 'app_company_new', '_controller' => 'App\\Controller\\CompanyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/footer' => [[['_route' => 'app_footer', '_controller' => 'App\\Controller\\FooterController::hours'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/admin/horaires' => [[['_route' => 'app_opening_index', '_controller' => 'App\\Controller\\OpeningController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/horaires/nouveau' => [[['_route' => 'app_opening_new', '_controller' => 'App\\Controller\\OpeningController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\Profile\\ProfileController::index'], null, null, null, false, false, null]],
        '/admin/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/profil/avis' => [[['_route' => 'app_review_index', '_controller' => 'App\\Controller\\ReviewController::index'], null, ['GET' => 0], null, false, false, null]],
        '/avis' => [[['_route' => 'app_review_list', '_controller' => 'App\\Controller\\ReviewController::list'], null, ['GET' => 0], null, false, false, null]],
        '/avis/nouveau' => [[['_route' => 'app_review_new', '_controller' => 'App\\Controller\\ReviewController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/profil/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/oubli-mdp' => [[['_route' => 'forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], null, null, null, false, false, null]],
        '/admin/services' => [[['_route' => 'app_service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, false, false, null]],
        '/services' => [[['_route' => 'app_service_list', '_controller' => 'App\\Controller\\ServiceController::list'], null, ['GET' => 0], null, false, false, null]],
        '/admin/services/nouveau' => [[['_route' => 'app_service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|utilisateur/([^/]++)(?'
                        .'|(*:202)'
                        .'|/modifier(*:219)'
                        .'|(*:227)'
                    .')'
                    .'|s(?'
                        .'|ociétés/([^/]++)(?'
                            .'|(*:261)'
                            .'|/edit(*:274)'
                            .'|(*:282)'
                        .')'
                        .'|ervices/([^/]++)(?'
                            .'|(*:310)'
                            .'|/edit(*:323)'
                            .'|(*:331)'
                        .')'
                    .')'
                    .'|horaires/([^/]++)(?'
                        .'|(*:361)'
                        .'|/modifier(*:378)'
                        .'|(*:386)'
                    .')'
                .')'
                .'|/profil/(?'
                    .'|occasions/([^/]++)(?'
                        .'|(*:428)'
                        .'|/modifier(*:445)'
                        .'|(*:453)'
                    .')'
                    .'|avis/([^/]++)(?'
                        .'|(*:478)'
                        .'|/edit(*:491)'
                        .'|(*:499)'
                    .')'
                .')'
                .'|/o(?'
                    .'|ccasions/([^/]++)(*:531)'
                    .'|ubli\\-mdp/([^/]++)(*:557)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        202 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        219 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        227 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        261 => [[['_route' => 'app_company_show', '_controller' => 'App\\Controller\\CompanyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        274 => [[['_route' => 'app_company_edit', '_controller' => 'App\\Controller\\CompanyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        282 => [[['_route' => 'app_company_delete', '_controller' => 'App\\Controller\\CompanyController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        310 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        323 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        331 => [[['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        361 => [[['_route' => 'app_opening_show', '_controller' => 'App\\Controller\\OpeningController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        378 => [[['_route' => 'app_opening_edit', '_controller' => 'App\\Controller\\OpeningController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        386 => [[['_route' => 'app_opening_delete', '_controller' => 'App\\Controller\\OpeningController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        428 => [[['_route' => 'app_car_show', '_controller' => 'App\\Controller\\CarController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        445 => [[['_route' => 'app_car_edit', '_controller' => 'App\\Controller\\CarController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        453 => [[['_route' => 'app_car_delete', '_controller' => 'App\\Controller\\CarController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        478 => [[['_route' => 'app_review_show', '_controller' => 'App\\Controller\\ReviewController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        491 => [[['_route' => 'app_review_edit', '_controller' => 'App\\Controller\\ReviewController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        499 => [[['_route' => 'app_review_delete', '_controller' => 'App\\Controller\\ReviewController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        531 => [[['_route' => 'occasions_details', '_controller' => 'App\\Controller\\CarController::details'], ['slug'], ['GET' => 0], null, false, true, null]],
        557 => [
            [['_route' => 'reset_pwd', '_controller' => 'App\\Controller\\SecurityController::resetPwd'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
