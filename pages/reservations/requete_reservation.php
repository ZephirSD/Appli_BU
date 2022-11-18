<?php
    $route = $_SERVER['DOCUMENT_ROOT'];
    require $route.'\Appli_BU\db\db.php';
    $sql = 'SELECT reservation.numero, utilisateur.Email, poste.Num_poste, reservation.date_debut, reservation.date_fin FROM reservation JOIN utilisateur ON reservation.utilisateur_attr = utilisateur.Id JOIN poste ON reservation.poste_attr = poste.Id';
    try{
        $stmt = $db->query($sql);    
        if($stmt === false){
            print('Erreur');
        }
    }catch (PDOException $e){
        echo $e->getMessage();
    }    
?>