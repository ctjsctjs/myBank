<?php

function getSession(){
    return new Session();
}

function getSessionData($key){
    $session = getSession(); 
    return $session->get($key);
}

function clearSessionData(){
    $session = getSession(); 
    if ($session->get('username') == null){
        $session->destroy();
    }
    return;
}

function loggedIn(){
    $session = getSession(); 
    if ($session->get('username') != null){
        return true;
    } else {
        return false;
    }
}