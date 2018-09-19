<?php
    require_once '../resources/class/class.Session.php';
    require_once '../resources/strings.php';
    require_once '../resources/icons.php';

    $session = new Session();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $valid = true;
    $role = ROLE_ADMIN;

    //check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $session->set('login_email_error', ICON_ERROR.INVALID_EMAIL);
        $valid = false;
    }

    //check if email field is blank
    if($email==null){
        $session->set('login_email_error', ICON_ERROR.FIELD_BLANK);
        $valid = false;
    }

    //check if password field is blank
    if($password==null){
        $session->set('login_pw_error', ICON_ERROR.INVALID_PW);
        $valid = false;
    }

    //check if password field is blank
    if($password==null){
        $session->set('login_pw_error', ICON_ERROR.INVALID_PW);
        $valid = false;
    }

    //check if password is more than 7 characters
    if(strlen($password)<8){
        $session->set('login_pw_error', ICON_ERROR.SHORT_PW);
        $valid = false;
    }

    if($valid){
        /**
         * QUERY DB
         */
        $session->set('username', $email);  
        $session->set('role', $role); 
        
        header("Location: ../dashboard");
    } else {
        $session->set('login_email_value', $email);
        header("Location: ../login");
    }
?>