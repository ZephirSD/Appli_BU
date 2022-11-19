<?php
    $route = $_SERVER['DOCUMENT_ROOT'];
    require $route.'\Appli_BU\db\db.php';
    if(isset($_POST['btnCreerUtil'])){
        try{
            $email = $_POST['mailUtili'];
            $nom = $_POST['nomUtili'];
            $prenom = $_POST['prenomUtili'];
            $attribution = "0";
            $sql = "INSERT INTO utilisateur (Email, Nom, Prenom, Attribution) VALUES (:Email, :Nom, :Prenom, :Attribution)";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':Email', $email);
            $stmt->bindParam(':Nom', $nom);
            $stmt->bindParam(':Prenom', $prenom);
            $stmt->bindParam(':Attribution', $attribution);
            $stmt->execute();
            header('location:http://localhost/Appli_BU/pages/utilisateurs/utilisateurs.php');
        }
        catch(PDOException $e){
            echo $e;
        }
    }
?>