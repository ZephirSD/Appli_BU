<?php
    session_start();
    if (isset($_SESSION['id']) && empty($_SESSION['id'])) {
        header('location:http://localhost/Appli_BU/');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>

<body>
    <span>
        <form method="POST" action="../logout.php">
            <button type="submit" name="btnDeco">Deconnecter</button>
        </form>
    </span>
    <span><?php echo ($_SESSION['username']) ?></span>
    <a href="utilisateurs/utilisateurs.php">Utilisateurs</a>
    <a href="postes/postes.php">Postes</a>
    <a href="reservations/reservations.php">Reservations</a>
</body>

</html>