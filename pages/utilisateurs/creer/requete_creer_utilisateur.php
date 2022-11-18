<?php
    $route = $_SERVER['DOCUMENT_ROOT'];
    require $route.'\Appli_BU\db\db.php';
    if(isset($_POST['btnCreerUtil'])){
        try{
            $email = $_POST['mailUtili'];
            $nom = $_POST['nomUtili'];
            $prenom = $_POST['prenomUtili'];
            $sql = "INSERT INTO utilisateur (Email, Nom, Prenom) VALUES(:Email, :Nom, :Prenom)";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':Email', $email);
            $stmt->bindParam(':Nom', $nom);
            $stmt->bindParam(':Prenom', $prenom);
            $stmt->execute();
            header('location:http://localhost/Appli_BU/pages/utilisateurs/utilisateurs.php');
        }
        catch(PDOException $e){
            echo $e;
        }
    }
?>