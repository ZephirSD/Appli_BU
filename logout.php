<?php
    session_start();
    if(isset($_POST['btnDeco'])){
        $_SESSION['id'] = "";
        $_SESSION['username'] = "";
        $_SESSION['email'] = "";
        if(empty($_SESSION['id']) && empty($_SESSION['username']) && empty($_SESSION['email'])){
            header('location:http://localhost/Appli_BU/');
        }
    }
?>