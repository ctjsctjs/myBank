<?php
/**
*
*/
function getPath($key){
    $path = [
        'template_path' => 'resources/template',
        'protected_path' => 'resources/protected',
        'content_path' => 'content',
    ];
    return $path[$key];
}

/**
 * Displays page content. It takes the data from 
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */

function getPageContent()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd().'/'.getPath('content_path').'/'.$page.'.php';
    
    if (file_exists(filter_var($path, FILTER_SANITIZE_URL))) {
        include $path;
    } else {
        include getPath('content_path').'/404.php';
    }
}
