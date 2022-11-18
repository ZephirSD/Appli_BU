<?php
    session_start();
    if(isset($_SESSION['id']) && empty($_SESSION['id'])){
        header('location:http://localhost/Appli_BU/');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de la reservation</title>
</head>
<body>
    <a href="../reservations.php">Retour</a>
    <h1>Création de la reservation</h1>
    <span>
        <form method="POST" action="../../logout.php">
            <button type="submit" name="btnDeco">Deconnecter</button>
        </form>
    </span>
    <span><?php echo($_SESSION['username'])?></span>
    <?php
        include_once('requete_recup_info_reserv.php');
    ?>
    <form method="POST" action="requete_creer_reservation.php">
        <div>
            <label>Numéro de reservation</label>
            <input type="text" name="numReserv">
        </div>
        <div>
            <label>Poste Disponible</label>
            <select name="dispoPoste">
                <?php while($rowPoste = $stmtRec->fetch(PDO::FETCH_ASSOC)):?>
                    <option value="<?php echo($rowPoste['Id'])?>"><?php echo($rowPoste['Num_poste'])?></option>
                <?php endwhile;?>
            </select>
        </div>
        <div>
            <label>Utilisateur Disponible</label>
            <select name="dispoUtilis">
                <?php while($rowUtili= $stmtRec2->fetch(PDO::FETCH_ASSOC)):?>
                    <?php if($result != $rowUtili['Id']):?>
                        <option value="<?php echo($rowUtili['Id'])?>"><?php echo($rowUtili['Email'])?></option>
                    <?php endif;?>
                <?php endwhile;?>
            </select>
        </div>
        <div>
            <label>Date de début</label>
            <input type="datetime-local" name="dtDebutReserv"/>
        </div>
        <div>
            <label>Date de fin</label>
            <input type="datetime-local" name="dtFinReserv"/>
        </div>
        <button type="submit" name="btnCreerReserv">Créer</button>
    </form>
</body>
</html>