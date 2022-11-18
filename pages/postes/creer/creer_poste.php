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
    <title>Création de poste</title>
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
    <form method="POST" action="requete_creer_poste.php">
        <div>
            <label>Numéro de poste</label>
            <input type="text" name="numPoste">
        </div>
        <div>
            <label>Disponible</label>
            <select name="dispoPoste">
                <option value="0">Non disponible</option>
                <option value="1">Disponible</option>
            </select>
        </div>
        <button type="submit" name="btnCreerPoste">Créer</button>
    </form>
</body>
</html>