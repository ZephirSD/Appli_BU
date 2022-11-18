<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification Utilisateurs</title>
</head>
<body>
    <a href="../utilisateurs.php">Retour</a>
    <h1>Modification de l'utilisateur</h1>
    <span>
        <form method="POST" action="../../logout.php">
            <button type="submit" name="btnDeco">Deconnecter</button>
        </form>
    </span>
    <?php 
        include 'recup_utilisateurs.php';
    ?>
    <form method="POST" action="requete_modification_utilisateurs.php">
        <?php while($row = $stmtRec->fetch(PDO::FETCH_ASSOC)):?>
        <input type="hidden" name="idModUtili" value="<?php echo $row['Id'];?>"/>
        <div>
            <label>Email</label>
            <input type="email" name="mailModUtili" value="<?php echo $row['Email'];?>">
        </div>
        <div>
            <label>Nom</label>
            <input type="text" name="nomModUtili" value="<?php echo $row['Nom'];?>">
        </div>
        <div>
            <label>Prenom</label>
            <input type="text" name="prenomModUtili" value="<?php echo $row['Prenom'];?>">
        </div>
        <?php endwhile;?>
        <button type="submit" name="btnModUtili">Modifier</button>
    </form>
</body>
</html>