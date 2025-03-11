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
        '/cursos' => [[['_route' => 'cursos', '_controller' => 'App\\Controller\\CursosController::getCursos'], null, ['GET' => 0], null, false, false, null]],
        '/dimension' => [[['_route' => 'dimension', '_controller' => 'App\\Controller\\DimensionesController::getDimensiones'], null, ['GET' => 0], null, false, false, null]],
        '/entidadesexternas' => [[['_route' => 'entidadesExternas', '_controller' => 'App\\Controller\\EntidadesExternasController::getEntidadesExternas'], null, ['GET' => 0], null, false, false, null]],
        '/iniciativas' => [
            [['_route' => 'app_iniciativa_searchiniciativas', '_controller' => 'App\\Controller\\IniciativaController::searchIniciativas'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_iniciativa_createiniciativa', '_controller' => 'App\\Controller\\IniciativaController::createIniciativa'], null, ['POST' => 0], null, false, false, null],
        ],
        '/metas' => [[['_route' => 'metas', '_controller' => 'App\\Controller\\MetasController::getMetas'], null, ['GET' => 0], null, false, false, null]],
        '/modulos' => [[['_route' => 'modulos', '_controller' => 'App\\Controller\\ModulosController::getCursos'], null, ['GET' => 0], null, false, false, null]],
        '/ods' => [[['_route' => 'ods', '_controller' => 'App\\Controller\\ODSController::getCursos'], null, ['GET' => 0], null, false, false, null]],
        '/profesores' => [[['_route' => 'profesores', '_controller' => 'App\\Controller\\ProfesoresController::getCursos'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/iniciativas/([^/]++)(?'
                    .'|(*:226)'
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
        226 => [
            [['_route' => 'app_iniciativa_deleteiniciativa', '_controller' => 'App\\Controller\\IniciativaController::deleteIniciativa'], ['idIniciativa'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_iniciativa_updateiniciativa', '_controller' => 'App\\Controller\\IniciativaController::updateIniciativa'], ['idIniciativa'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
