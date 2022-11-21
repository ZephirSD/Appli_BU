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
    <title>Modification Utilisateurs</title>
</head>
<body>
    <main class="main_utilis">
        <div class="case_modif_utilis">
            <div class="case_retour">
                <a href="../utilisateurs.php">
                    <img src="../../../images/back_icon.png" width="50"/>
                </a>
            </div>
            <h1 class="titre_accueil">Modification de l'utilisateur</h1>
            <div class="button_deco btnRight">
                <form method="POST" action="../../../logout.php">
                    <button type="submit" name="btnDeco" class="btnDeco">
                        <img src="../../../images/deconnexion_icone.png" width="50"/>
                        <span><?php echo(ucfirst($_SESSION['username']))?></span>
                    </button>
                </form>
            </div>
            <?php 
                include 'recup_utilisateurs.php';
            ?>
            <div class="case_form_utilis">
                <form method="POST" action="requete_modification_utilisateurs.php">
                    <?php while($row = $stmtRec->fetch(PDO::FETCH_ASSOC)):?>
                    <input type="hidden" name="idModUtili" value="<?php echo $row['Id'];?>"/>
                    <div class="case_input">
                        <label>Email</label>
                        <input type="email" name="mailModUtili" value="<?php echo $row['Email'];?>" required/>
                    </div>
                    <div class="case_input">
                        <label>Nom</label>
                        <input type="text" name="nomModUtili" value="<?php echo $row['Nom'];?>" required/>
                    </div>
                    <div class="case_input">
                        <label>Prenom</label>
                        <input type="text" name="prenomModUtili" value="<?php echo $row['Prenom'];?>" required/>
                    </div>
                    <?php endwhile;?>
                    <div class="case_button">
                        <button type="submit" name="btnModUtili" class="btnAppli">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>