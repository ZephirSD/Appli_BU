<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification des Postes</title>
</head>
<body>
<a href="../postes.php">Retour</a>
    <h1>Création de l'utilisateur</h1>
    <span>
        <form method="POST" action="../../logout.php">
            <button type="submit" name="btnDeco">Deconnecter</button>
        </form>
    </span>
    <span><?php echo($_SESSION['username'])?></span>
    <?php 
        include 'recup_poste.php';
    ?>
    <form method="POST" action="requete_modification_poste.php">
        <?php while($row = $stmtRec->fetch(PDO::FETCH_ASSOC)):?>
            <input type="hidden" name="idModPoste" value="<?php echo $row['Id'];?>"/>
            <div>
                <label>Numéro de poste</label>
                <input type="text" name="numPoste" value="<?php echo $row['Num_poste'];?>">
            </div>
            <div>
                <label>Disponible</label>
                <select name="dispoPoste">
                    <option value="0" <?php echo($row['Disponible'] == "0" ? "selected" : "" )?>>Non disponible</option>
                    <option value="1" <?php echo($row['Disponible'] == "1" ? "selected" : "" ) ?>>Disponible</option>
                </select>
            </div>
            <button type="submit" name="btnModPoste">Modifier</button>
        <?php endwhile;?>
    </form>
</body>
</html>