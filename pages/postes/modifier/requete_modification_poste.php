<?php
    $route = $_SERVER['DOCUMENT_ROOT'];
    require $route.'\Appli_BU\db\db.php';
    if(isset($_POST['btnModPoste'])){
        $num_poste = $_POST['numPoste'];
        $disponible = $_POST['dispoPoste'];
        $id = $_POST['idModPoste'];
        $sql = "UPDATE poste SET Num_poste = :Num_poste, Disponible = :Disponible WHERE Id = :Id";
        $stmtMod = $db->prepare($sql);
        $stmtMod->bindParam(':Id',$id);
        $stmtMod->bindParam(':Num_poste',$num_poste);
        $stmtMod->bindParam(':Disponible',$disponible);
        $stmtMod->execute();
        header('location:http://localhost/Appli_BU/pages/postes/postes.php');
    }
?>