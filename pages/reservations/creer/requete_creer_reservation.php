<?php
    $route = $_SERVER['DOCUMENT_ROOT'];
    require $route.'\Appli_BU\db\db.php';
    if(isset($_POST['btnCreerReserv'])){
        try{
            $numReserv = $_POST['numReserv'];
            $dispoPoste = $_POST['dispoPoste'];
            $dispoUtil = $_POST['dispoUtilis'];
            $dtDtRsv = $_POST['dtDebutReserv'];
            $dtFinRsv = $_POST['dtFinReserv'];
            $attrValide = "1";
            $posteValide = "0";
            $sql = "INSERT INTO reservation (numero, poste_attr, utilisateur_attr, date_debut, date_fin) VALUES (:numero, :posteAttr, :utilisAttr, :dtDebut, :dtFin)";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':numero', $numReserv);
            $stmt->bindParam(':posteAttr', $dispoPoste);
            $stmt->bindParam(':utilisAttr', $dispoUtil);
            $stmt->bindParam(':dtDebut', $dtDtRsv);
            $stmt->bindParam(':dtFin', $dtFinRsv);
            if($stmt->execute() == true){
                $sqlUser = "UPDATE utilisateur SET Attribution = :Attribution WHERE Id = :Id";
                $stmtUser = $db->prepare($sqlUser);
                $stmtUser->bindParam(':Attribution', $attrValide);
                $stmtUser->bindParam(':Id', $dispoUtil);
                $stmtUser->execute();
                $sqlPoste = "UPDATE poste SET Disponible = :Disponible WHERE Id = :Id";
                $stmtPoste = $db->prepare($sqlPoste);
                $stmtPoste->bindParam(':Disponible', $posteValide);
                $stmtPoste->bindParam(':Id', $dispoPoste);
                $stmtPoste->execute();
            }
            header('location:http://localhost/Appli_BU/pages/reservations/reservations.php');
        }
        catch(PDOException $e){
            echo $e;
        }
    }
?>