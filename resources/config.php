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
        'db' => [
            'user' => 'host',
            'password' => '',
            'host' => 'localhost',
            'database' => ''
        ],
        'pretty_uri' => true,
        'version' => 'v1.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}

/**
 * Starts everything and displays the template.
 */
function run()
{
    require_once 'protected/class.Session.php';

    require_once 'resources/session.php';
    require_once 'resources/strings.php';
    require_once 'resources/functions.php';
    require_once 'resources/route.php';

    include_once getPath('template_path').'/template.php';
}
