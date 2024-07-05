<?php session_start();

    function logged_in(){
        return isset($_SESSION['user_id']);
    }
    function confirmed_logged_in(){
        if(!logged_in()){
            redirect_to("login.php");
    }
}

 ?>
