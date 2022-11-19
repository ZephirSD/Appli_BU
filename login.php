<?php
    include 'db/db.php';
    session_start();
    if(isset($_POST['btnConnexion'])){
        $username = $_POST['username'];
        $motdepasse = $_POST['password'];
        $requete = "SELECT * FROM user WHERE Username=:username AND Motdepasse=:motdepasse";
        $login = $db -> prepare($requete);
        $login->bindParam(':username',$username);
        $login->bindParam(':motdepasse',md5($motdepasse));
        $login->execute();
        $connection = $login->fetch(PDO::FETCH_ASSOC);
        if(!empty($connection)){
            $_SESSION['id'] = $connection['Id'];
            $_SESSION['username'] = $connection['Username'];
            $_SESSION['email'] = $connection['Email'];
            header('location:pages/accueil.php');
        }
        else{
            header('location:http://localhost/Appli_BU/');
        }
    }
    else{
        header('location:http://localhost/Appli_BU/');
    }
?>