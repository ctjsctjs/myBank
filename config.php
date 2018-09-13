<?php

/**
 * Used to store website configuration information.
 *
 * @var string
 */
function config($key = '')
{
    $config = [
        'name' => 'MyBank',
        'nav_menu' => [
            '' => 'home',
            'register' => 'register',
            'login' => 'login'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'pretty_uri' => true,
        'version' => 'v1.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
