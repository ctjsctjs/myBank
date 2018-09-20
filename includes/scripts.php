<!-- JS -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/nav.js"></script>

<?php 

    //Add scripts based on page title
    switch (pageTitle()) {
        case 'home':
        case '':
            echo '<script type="text/javascript" src="js/nav-scroll.js"></script>';
            break; 
        case 'dashboard':
            $role = getSessionData('role');
            echo '<script type="text/javascript" src="js/dashboard_'.$role.'.js"></script>';
            break;
        default:
    }

    //Add scripts based on user log in role
    switch ($role = getSessionData('role')){
        case 'user':
            echo '<script type="text/javascript" src="js/dashboard_'.$role.'.js"></script>';
            break;
        default:
    }
?>
