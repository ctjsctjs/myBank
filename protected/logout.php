<?php
    require_once '../resources/class/class.Session.php';
    $session = new Session();
    $session->destroy();    
    header("Location: ../home");
?>