<?php 

function back_login(){
    if(!empty($_POST['signUp'])){
        header("Location: login.php");
        exit;
    }
}

?>