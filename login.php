<?php
    include 'db/db.php';
    session_start();
    if(isset($_POST['btnConnexion'])){
        $username = $_POST['username'];
        $motdepasse = $_POST['password'];
        $requete = "SELECT * FROM user WHERE Username=:username AND Motdepasse=:motdepasse";
        $login = $db -> prepare($requete);
        $login->bindParam(':username',$username);
        $login->bindParam(':motdepasse',$motdepasse);
        $login->execute();
        $connection = $login->fetch(PDO::FETCH_ASSOC);
        if(!empty($connection)){
            $_SESSION['id'] = $connection['Id'];
            $_SESSION['username'] = $connection['Username'];
            header('location:pages/utilisateurs/utilisateurs.php');
        }
    }
?>