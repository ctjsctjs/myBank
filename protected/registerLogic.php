<?php
    $test = $_POST['test'];
    if($test!=null){
        header("Location: ../home");
    } else {
        header("Location: ../register");
    }
?>