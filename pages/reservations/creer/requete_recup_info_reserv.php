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
    $sql2 = 'SELECT * FROM utilisateur WHERE Attribution = "0" ORDER BY Nom';
    try{
        $stmtRec2 = $db->query($sql2);    
        $stmtRec2->execute();
    }catch (PDOException $e){
        echo $e->getMessage();
    } 
?>
