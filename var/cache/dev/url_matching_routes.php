<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, true, false, null]],
        '/dashboard/tickets' => [[['_route' => 'app_dashboard_tickets', '_controller' => 'App\\Controller\\DashboardController::tickets'], null, null, null, false, false, null]],
        '/dashboard/leads' => [[['_route' => 'app_dashboard_leads', '_controller' => 'App\\Controller\\DashboardController::leads'], null, null, null, false, false, null]],
        '/dashboard/expenses' => [[['_route' => 'app_expenses', '_controller' => 'App\\Controller\\DashboardController::expenses'], null, ['GET' => 0], null, false, false, null]],
        '/connect/google' => [[['_route' => 'connect_google', '_controller' => 'App\\Controller\\GoogleController::connectAction'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_redirection', '_controller' => 'App\\Controller\\RedirectionController::home'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/login_check' => [[['_route' => 'app_login_check', '_controller' => 'App\\Controller\\SecurityController::check'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/login/error' => [[['_route' => 'app_login_error', '_controller' => 'App\\Controller\\SecurityController::loginError'], null, null, null, false, false, null]],
        '/login/success' => [[['_route' => 'app_login_success', '_controller' => 'App\\Controller\\SecurityController::loginSuccess'], null, null, null, false, false, null]],
        '/settings/budget-alert' => [[['_route' => 'app_settings_budget_alert', '_controller' => 'App\\Controller\\SettingsController::budgetAlert'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/dashboard/(?'
                    .'|lead/([^/]++)(?'
                        .'|/edit(*:77)'
                        .'|(*:84)'
                    .')'
                    .'|ticket/([^/]++)(*:107)'
                    .'|expense/([^/]++)(*:131)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        77 => [[['_route' => 'app_lead_edit', '_controller' => 'App\\Controller\\DashboardController::editLead'], ['id'], ['POST' => 0], null, false, false, null]],
        84 => [[['_route' => 'app_lead_delete', '_controller' => 'App\\Controller\\DashboardController::deleteLead'], ['id'], ['DELETE' => 0], null, false, true, null]],
        107 => [[['_route' => 'app_ticket_delete', '_controller' => 'App\\Controller\\DashboardController::deleteTicket'], ['id'], ['DELETE' => 0], null, false, true, null]],
        131 => [
            [['_route' => 'app_expense_update', '_controller' => 'App\\Controller\\DashboardController::updateExpense'], ['id'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
