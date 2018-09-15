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
function getNavMenu()
{
    foreach (getNavConfig() as $name => $uri) {
        //$nav_menu .= '<a href="/'.(config('pretty_uri') || $uri == '' ? '' : '?page=').$uri.'">'.$name.'</a>'.$sep;
        echo '<li class="nav-link"><a href="'.$uri.'">'.$name.'</a></li>' ;
    }
}

function getSideMenu()
{
    foreach (getNavConfig() as $name => $uri) {
        //$nav_menu .= '<a href="/'.(config('pretty_uri') || $uri == '' ? '' : '?page=').$uri.'">'.$name.'</a>'.$sep;
        echo '<li><a href="'.$uri.'">'.$name.'</a></li>' ;
    }
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
