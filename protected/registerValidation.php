<?php
    require_once '../resources/class/class.Session.php';
    require_once '../resources/strings.php';
    require_once '../resources/icons.php';

    $session = new Session();
    $nric = $_POST['nric'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobileNo = $_POST['mobileNo'];
    $address = $_POST['address'];
    $income = $_POST['income'];
    $valid = true;

    //Check if nric consists of only valid characters
    if(preg_match('/[^A-Za-z0-9.#\s\-$]/', $nric)){
        $session->set('register_nric_error', ICON_ERROR.ERR_INVALID_CHAR);
        $valid = false;
    }

    //Check if nric is correct format
    if(preg_match('/[(?i)^[STFG]d{7}[A-Z]$]/', $nric)){
        $session->set('register_nric_error', ICON_ERROR.ERR_INVALID_NRIC);
        $valid = false;
    }

    //Check if name is empty
    if($nric==null){
        $session->set('register_nric_error', ICON_ERROR.ERR_FIELD_BLANK);
        $valid = false;
    }

    //Check if name consists of only valid characters
    if(preg_match('/[^A-Za-z0-9.#\s\-$]/', $name)){
        $session->set('register_name_error', ICON_ERROR.ERR_INVALID_CHAR);
        $valid = false;
    }

    //Check if name is empty
    if($name==null){
        $session->set('register_name_error', ICON_ERROR.ERR_FIELD_BLANK);
        $valid = false;
    }

    //check is email is a valid email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $session->set('register_email_error', ICON_ERROR.ERR_INVALID_EMAIL);
        $valid = false;
    }

    //check if email field is blank
    if($email==null){
        $session->set('register_email_error', ICON_ERROR.ERR_FIELD_BLANK);
        $valid = false;
    }

    //check if mobile number field is blank
    if($mobileNo==null){
        $session->set('register_mobileNo_error', ICON_ERROR.ERR_FIELD_BLANK);
        $valid = false;
    }

    //check if address field is blank
    if($address==null){
        $session->set('register_address_error', ICON_ERROR.ERR_FIELD_BLANK);
        $valid = false;
    }

    //check if address field is blank
    if($income==null){
        $session->set('register_income_error', ICON_ERROR.ERR_FIELD_BLANK);
        $valid = false;
    }

    if($valid){
        /**
         * QUERY DB
         */
        //$session->set('username', $email);  
        //$session->set('role', $role); 
        
        header("Location: ../success");
    } else {
        $session->set('register_nric_value', $nric);
        $session->set('register_name_value', $name);
        $session->set('register_email_value', $email);
        $session->set('register_mobileNo_value', $mobileNo);
        $session->set('register_address_value', $address);
        $session->set('register_income_value', $income);
        header("Location: ../register");
    }
?>