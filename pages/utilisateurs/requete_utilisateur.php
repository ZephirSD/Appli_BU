<?php
    $route = $_SERVER['DOCUMENT_ROOT'];
    require $route.'\Appli_BU\db\db.php';
    $sql = 'SELECT * FROM utilisateur';
    try{
        $stmt = $db->query($sql);    
        if($stmt === false){
            print('Erreur');
        }
    }catch (PDOException $e){
        echo $e->getMessage();
    }
    
?>