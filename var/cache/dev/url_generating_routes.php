<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'list' => [[], ['_controller' => 'App\\Controller\\Blog::listPosts'], [], [['text', '/']], [], []],
    'edit' => [['id'], ['_controller' => 'App\\Controller\\Blog::editPost'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], []],
    'add' => [[], ['_controller' => 'App\\Controller\\Blog::addPost'], [], [['text', '/post/add']], [], []],
    'save' => [[], ['_controller' => 'App\\Controller\\Blog::savePost'], [], [['text', '/post/save']], [], []],
    'show' => [['id'], ['_controller' => 'App\\Controller\\Blog::showPost'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], []],
];