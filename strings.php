<?php

/**
 * Used to store website content.
 *
 * @var string
 */
function getString($page, $key)
{
    $string = [
        'register' => [
            'desc' => "MyBank in Singapore is part of an international banking group, with more than 150 years of history in some of the world's most dynamic markets. Our purpose is to drive commerce and prosperity through our unique diversity, and our heritage and values are expressed in our brand promise, Here for good."          
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'pretty_uri' => true,
        'version' => 'v1.0',
        'copyright' => '© SecureBank 2018'
    ];
    echo $string[$page][$key];
    return $string[$page][$key];
}
