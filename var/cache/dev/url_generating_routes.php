<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'client_index' => [[], ['_controller' => 'App\\Controller\\ClientController::index'], [], [['text', '/client/']], [], []],
    'client_new' => [[], ['_controller' => 'App\\Controller\\ClientController::new'], [], [['text', '/client/new']], [], []],
    'client_show' => [['id'], ['_controller' => 'App\\Controller\\ClientController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/client']], [], []],
    'client_edit' => [['id'], ['_controller' => 'App\\Controller\\ClientController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/client']], [], []],
    'client_delete' => [['id'], ['_controller' => 'App\\Controller\\ClientController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/client']], [], []],
    'dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/']], [], []],
    'employer_index' => [[], ['_controller' => 'App\\Controller\\EmployerController::index'], [], [['text', '/employer/']], [], []],
    'employer_new' => [[], ['_controller' => 'App\\Controller\\EmployerController::new'], [], [['text', '/employer/new']], [], []],
    'employer_show' => [['id'], ['_controller' => 'App\\Controller\\EmployerController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/employer']], [], []],
    'employer_edit' => [['id'], ['_controller' => 'App\\Controller\\EmployerController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/employer']], [], []],
    'employer_delete' => [['id'], ['_controller' => 'App\\Controller\\EmployerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/employer']], [], []],
    'gestion_paie' => [[], ['_controller' => 'App\\Controller\\GestionPaieController::index'], [], [['text', '/paie/']], [], []],
];
