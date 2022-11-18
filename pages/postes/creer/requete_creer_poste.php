<?php
    $route = $_SERVER['DOCUMENT_ROOT'];
    require $route.'\Appli_BU\db\db.php';
    if(isset($_POST['btnCreerPoste'])){
        try{
            $num_poste = $_POST['numPoste'];
            $disponible = $_POST['dispoPoste'];
            $sql = "INSERT INTO poste (Num_poste, Disponible) VALUES (:Num_poste, :Disponible)";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':Num_poste', $num_poste);
            $stmt->bindParam(':Disponible', $disponible);
            $stmt->execute();
            header('location:http://localhost/Appli_BU/pages/postes/postes.php');
        }
        catch(PDOException $e){
            echo $e;
        }
    }
?>