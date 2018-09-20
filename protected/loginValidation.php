<?php
    require_once '../resources/class/class.Session.php';
    require_once '../resources/strings.php';
    require_once '../resources/icons.php';
    require_once '../resources/config.php';

    //$conn = connectDB();
    $session = new Session();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $valid = true;

    //check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $session->set('login_email_error', ICON_ERROR.ERR_INVALID_EMAIL);
        $valid = false;
    }

    //check if email field is blank
    if($email==null){
        $session->set('login_email_error', ICON_ERROR.ERR_FIELD_BLANK);
        $valid = false;
    }

    //check if password field is blank
    if($password==null){
        $session->set('login_pw_error', ICON_ERROR.ERR_INVALID_PW);
        $valid = false;
    }

    //check if password field is blank
    if($password==null){
        $session->set('login_pw_error', ICON_ERROR.ERR_INVALID_PW);
        $valid = false;
    }

    //check if password is more than 7 characters
    if(strlen($password)<8){
        $session->set('login_pw_error', ICON_ERROR.ERR_SHORT_PW);
        $valid = false;
    }

    //If basic validation passes, check if username and password is valid
    if($valid){
        /**
         * QUERY DB
         * 
         * $query = 
         * $result = mysqli_query($conn, $query) or die(mysqli_connect_error());
         * $userData = mysqli_fetch_array($result);
         * $userDataRows = mysqli_num_rows($result);
         */ 

         //Dummy data
         $userDataRows = 1;
         $userData['name']='Clement';
         $userData['roles']='user';

        //Check if username exists in DB
        if ($userDataRows < 1) {
            $session->set('login_email_error', ICON_ERROR.ERR_NOT_REGISTERED);
            $valid = false;
        } 
       
        //check if password is wrong
        if(false){
            $session->set('login_pw_error', ICON_ERROR.ERR_WRONG_PW);
            $valid = false;
        }

        //If username and password is valid, set session
        if($valid){
            $session->set('name', $userData['name']);  
            $session->set('username', $email);  
            $session->set('role', $userData['roles']); 
            header("Location: ../dashboard");

        } else {
            
            $session->set('login_email_value', $email);
            header("Location: ../login");

        }        
    } else {
        $session->set('login_email_value', $email);
        header("Location: ../login");
    }
?>