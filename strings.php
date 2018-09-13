<?php

/**
 * Used to store website content.
 *
 * @var string
 */
function getPageContent($key)
{
    $page = pageTitle(); //Get page title
    $string = [
        'home' => [

            'bannerExtract' => "We've worked with thousands of people to build the bank 
            account modern businesses need - and we are just getting started.",

            'introExtract' => "We've worked with thousands of people to build the bank 
            account modern businesses need - and we are just getting started.",

            'cta' => 'Get Started',

            'introTitle' => "Digital Banking Re-imagined"          
        ],
        'register' => [
            'extract' => "MyBank in Singapore is part of an international banking group, 
            with more than 150 years of history in some of the world's most dynamic markets. 
            Our purpose is to drive commerce and prosperity through our unique diversity, 
            and our heritage and values are expressed in our brand promise, Here for good.",     
            
            'tagline' => "Manage your money anytime, anywhere."          
        ],
        'login' => [
            'extract' => "MyBank in Singapore is part of an international banking group, 
            with more than 150 years of history in some of the world's most dynamic markets. 
            Our purpose is to drive commerce and prosperity through our unique diversity, 
            and our heritage and values are expressed in our brand promise, Here for good.",     
            
            'tagline' => "Welcome back!"          
        ]
    ];
    echo $string[$page][$key];
    return;
}

/**
 * Used to store website content.
 *
 * @var string
 */
function getSettings($key)
{
    $string = [
        'name' => 'MyBank',
        'copyright' => '© MyBank 2018'
    ];
    echo $string[$key];
    return;
}
