<?php
    $route = $_SERVER['DOCUMENT_ROOT'];
    require $route.'\Appli_BU\db\db.php';
    $Id = $_GET['Id'];
    $sql = 'SELECT * FROM utilisateur WHERE Id = :Id';
    try{
        $stmtRec = $db->prepare($sql);    
        $stmtRec->bindParam(':Id', $Id);
        $stmtRec->execute();
    }catch (PDOException $e){
        echo $e->getMessage();
    }    
?>