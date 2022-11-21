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
    <link rel="stylesheet" href="../../../style/style.css">
    <title>Création de poste</title>
</head>
<body>
    <main class="main_poste">
        <div class="case_creer_poste">
            <div class="case_retour">
                <a href="../postes.php">
                    <img src="../../../images/back_icon.png" width="50"/>
                </a>
            </div>
            <h1 class="titre_accueil">Création du poste</h1>
            <div class="button_deco btnRight">
                <form method="POST" action="../../../logout.php">
                    <button type="submit" name="btnDeco" class="btnDeco">
                        <img src="../../../images/deconnexion_icone.png" width="50"/>
                        <span><?php echo(ucfirst($_SESSION['username']))?></span>
                    </button>
                </form>
            </div>
            <div class="case_form_poste">
                <form method="POST" action="requete_creer_poste.php">
                    <div class="case_input">
                        <label>Numéro de poste</label>
                        <input type="text" name="numPoste" required />
                    </div>
                    <div class="case_input">
                        <label>Disponible</label>
                        <select name="dispoPoste" class="slcAppli" required>
                            <option value="0">Non disponible</option>
                            <option value="1" selected>Disponible</option>
                        </select>
                    </div>
                    <div class="case_button">
                        <button type="submit" name="btnCreerPoste" class="btnAppli">Créer</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>