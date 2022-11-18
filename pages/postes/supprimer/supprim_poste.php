<?php
    $route = $_SERVER['DOCUMENT_ROOT'];
    require $route.'\Appli_BU\db\db.php';
    try{
        $Id = $_GET['Id'];
        $sql = "DELETE FROM poste WHERE Id = :Id";
        $supp = $db -> prepare($sql);
        $supp->bindParam(':Id',$Id);
        $supp->execute();
        header('location: http://localhost/Appli_BU/pages/postes/postes.php');
    }
    catch(PDOException $e){
        echo $e;
    }
?>