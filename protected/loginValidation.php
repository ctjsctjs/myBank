<?php
    require_once '../resources/class/class.Session.php';
    require_once '../resources/strings.php';
    require_once '../resources/icons.php';

    $session = new Session();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $valid = true;
    $role = ROLE_ADMIN;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $session->set('login_email_error', ICON_ERROR.INVALID_EMAIL);
        $valid = false;
    }

    if($email==null){
        $session->set('login_email_error', ICON_ERROR.FIELD_BLANK);
        $valid = false;
    }

    if($password==null){
        $session->set('login_pw_error', ICON_ERROR.INVALID_PW);
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