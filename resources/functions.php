<?php

/**
 * Displays site name.
 */
function siteName()
{
    echo config('name');
}

/**
 * Displays site version.
 */
function siteVersion()
{
    echo config('version');
}

/**
 * Displays site copyright information.
 */
function siteCopyright()
{
    echo config('copyright');
}

/**
 * Website navigation.
 */
function navMenu($sep = ' | ')
{
    $nav_menu = '';

    foreach (config('nav_menu') as $uri => $name) {
        $nav_menu .= '<a href="/'.(config('pretty_uri') || $uri == '' ? '' : '?page=').$uri.'">'.$name.'</a>'.$sep;
    }

    echo trim($nav_menu, $sep);
}

/**
 * Displays page title. It takes the data from 
 * URL, it replaces the hyphens with spaces and 
 * it capitalizes the words.
 */
function pageTitle()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'home';
    //echo ucwords(str_replace('-', ' ', $page));
    return $page;
}
