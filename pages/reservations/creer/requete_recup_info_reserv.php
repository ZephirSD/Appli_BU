<?php
    $route = $_SERVER['DOCUMENT_ROOT'];
    require $route.'\Appli_BU\db\db.php';
    $sql = 'SELECT * FROM poste WHERE Disponible = "1"';
    try{
        $stmtRec = $db->query($sql);    
        $stmtRec->execute();
    }catch (PDOException $e){
        echo $e->getMessage();
    } 
    $sql2 = 'SELECT * FROM utilisateur ORDER BY Nom';
    try{
        $stmtRec2 = $db->query($sql2);    
        $stmtRec2->execute();
    }catch (PDOException $e){
        echo $e->getMessage();
    } 
    $sql3 = 'SELECT utilisateur_attr FROM reservation';
    try{
        $stmtRec3 = $db->query($sql3);    
        $stmtRec3->execute();
        $result = $stmtRec3->fetchAll();
    }catch (PDOException $e){
        echo $e->getMessage();
    } 
?>
