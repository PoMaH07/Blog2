<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'list', '_controller' => 'App\\Controller\\Blog::listPosts'], null, null, null, false, false, null]],
        '/post/add' => [[['_route' => 'add', '_controller' => 'App\\Controller\\Blog::addPost'], null, ['GET' => 0], null, false, false, null]],
        '/post/save' => [[['_route' => 'save', '_controller' => 'App\\Controller\\Blog::savePost'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/post/([^/]++)(?'
                    .'|/edit(*:64)'
                    .'|(*:71)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\Blog::editPost'], ['id'], ['GET' => 0], null, false, false, null]],
        71 => [
            [['_route' => 'show', '_controller' => 'App\\Controller\\Blog::showPost'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
