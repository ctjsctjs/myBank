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
    //Require classes
    require_once getPath('class_path').'/class.Session.php';

    //Require resources
    require_once getPath('resources_path').'/session.php';
    require_once getPath('resources_path').'/strings.php';
    require_once getPath('resources_path').'/icons.php';
    require_once getPath('resources_path').'/functions.php';

    //Require template
    include_once getPath('template_path').'/template.php';
}

function connectDB(){
    //Retrive database configurations
    $databaseConfig = config('db');
    $host = databaseConfig['host'];
    $username = databaseConfig['username'];
    $database = databaseConfig['database'];
    $password = databaseConfig['password'];

    //return connection
    return mysqli_connect($host, $username, $password, $database);
}
