<?php
    require_once '../protected/class.Session.php';
    $session = new Session();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $valid = true;
    
    if($valid){
        $session->set('username', $email);
        header("Location: ../home");
    } else {
        header("Location: ../register");
    }
?>