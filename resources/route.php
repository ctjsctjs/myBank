<?php
/**
*
*/
function getPath($key){
    $path = [
        'template_path' => 'resources/template',
        'resources_path' => 'resources',
        'class_path' => 'resources/class',
        'protected_path' => 'protected',
        'content_path' => 'content',
    ];
    return $path[$key];
}

function getNavConfig(){
    $path = [
        'Banking' => 'banking',
        'Products' => 'products',
        'About Us' => 'aboutUs'
    ];
    return $path;
}

function getProtectedPath($path){
    echo getPath('protected_path').$path;
}

/**
 * Displays page content. It takes the data from 
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */

function getPageContent()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home'; //Get user path
    
    switch ($page) {
        case 'home':
            if (loggedIn()){
                $role = getSessionData('role');
                $content = 'dashboard_'.$role;
            } else {
                $content = 'home';
            }
            break;
        case 'dashboard':
            $role = getSessionData('role');
            $content = 'dashboard_'.$role;
            break;
        case 'login':
            $content = 'login';
            break;
        case 'register':
            $content = 'register';
            break;
        default:
            $content = $page;
    }

    $path = getPath('content_path').'/'.$content.'.php';

    //If content page does not exist
    if (!file_exists(filter_var($path, FILTER_SANITIZE_URL))) {
        $path = getPath('content_path').'/404.php';
    }

    include_once $path;
    clearSessionData();
}
