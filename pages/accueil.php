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
    <link rel="stylesheet" href="../style/style.css">
    <title>Accueil</title>
</head>

<body>
    <main class="main_accueil">
        <div class="case_accueil">
            <div class="button_deco">
                <form method="POST" action="../logout.php">
                    <button type="submit" name="btnDeco" class="btnDeco">
                        <img src="../images/deconnexion_icone.png" width="50"/>
                    </button>
                </form>
            </div>
            <h1 class="titre_accueil">Bienvenue <?php echo(ucfirst($_SESSION['username']))?></h1>
            <div class="case_lien_accueil">
                <a href="utilisateurs/utilisateurs.php">Utilisateurs</a>
                <a href="postes/postes.php">Postes</a>
                <a href="reservations/reservations.php">Reservations</a>
            </div>
        </div>
    </main>
</body>

</html>