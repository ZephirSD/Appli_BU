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
    <title>Listes des postes</title>
</head>
<body>
    <div class="case_lien_header">
        <a href="../accueil.php">Retour</a>
        <a href="../utilisateurs/creer/creer_utilisateur.php">Créer</a>
    </div>
    <h1>Listes des Utilisateurs</h1>
    <span>
        <form method="POST" action="../../logout.php">
            <button type="submit" name="btnDeco">Deconnecter</button>
        </form>
    </span>
    <span><?php echo($_SESSION['username'])?></span>
    <table border="1">
        <?php 
            include 'affiche_postes.php';
        ?>
    </table>
</body>
</html>