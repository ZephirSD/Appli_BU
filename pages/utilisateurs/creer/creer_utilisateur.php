<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style/style.css">
    <title>Création de l'utilisateur</title>
</head>
<body>
    <main class="main_utilis">
        <div class="case_creer_utilis">
            <div class="case_retour">
                <a href="../utilisateurs.php">
                    <img src="../../../images/back_icon.png" width="50"/>
                </a>
            </div>
            <h1 class="titre_accueil">Création de l'utilisateur</h1>
            <div class="button_deco btnRight">
                <form method="POST" action="../../../logout.php">
                    <button type="submit" name="btnDeco" class="btnDeco">
                        <img src="../../../images/deconnexion_icone.png" width="50"/>
                        <span><?php echo(ucfirst($_SESSION['username']))?></span>
                    </button>
                </form>
            </div>
            <div class="case_form_utilis">
                <form method="POST" action="requete_creer_utilisateur.php">
                    <div class="case_input">
                        <label>Email</label>
                        <input type="email" name="mailUtili">
                    </div>
                    <div class="case_input">
                        <label>Nom</label>
                        <input type="text" name="nomUtili">
                    </div>
                    <div class="case_input">
                        <label>Prénom</label>
                        <input type="text" name="prenomUtili">
                    </div>
                    <div class="case_button">
                        <button type="submit" name="btnCreerUtil" class="btnAppli">Créer</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>