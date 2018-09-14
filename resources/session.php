<?php

function getSession(){
    return new Session();
}

function getSessionUsername(){
    $session = getSession(); 
    return $session->get('username');
}