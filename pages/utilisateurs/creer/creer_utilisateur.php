<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de l'utilisateur</title>
</head>
<body>
    <a href="../utilisateurs.php">Retour</a>
    <h1>Création de l'utilisateur</h1>
    <span>
        <form method="POST" action="../../logout.php">
            <button type="submit" name="btnDeco">Deconnecter</button>
        </form>
    </span>
    <span><?php echo($_SESSION['username'])?></span>
    <form method="POST" action="requete_creer_utilisateur.php">
        <div>
            <label>Email</label>
            <input type="email" name="mailUtili">
        </div>
        <div>
            <label>Nom</label>
            <input type="text" name="nomUtili">
        </div>
        <div>
            <label>Prénom</label>
            <input type="text" name="prenomUtili">
        </div>
        <button type="submit" name="btnCreerUtil">Créer</button>
    </form>
</body>
</html>