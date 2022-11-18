<?php
    $route = $_SERVER['DOCUMENT_ROOT'];
    require $route.'\Appli_BU\db\db.php';
    if(isset($_POST['btnModUtili'])){
        $email = $_POST['mailModUtili'];
        $nom = $_POST['nomModUtili'];
        $prenom = $_POST['prenomModUtili'];
        $id = $_POST['idModUtili'];
        $sql = "UPDATE utilisateur SET Email = :Email, Prenom = :Prenom, Nom = :Nom WHERE Id = :Id";
        $stmtMod = $db->prepare($sql);
        $stmtMod->bindParam(':Id',$id);
        $stmtMod->bindParam(':Email',$email);
        $stmtMod->bindParam(':Nom',$nom);
        $stmtMod->bindParam(':Prenom',$prenom);
        $stmtMod->execute();
        header('location:http://localhost/Appli_BU/pages/utilisateurs/utilisateurs.php');
    }
?>