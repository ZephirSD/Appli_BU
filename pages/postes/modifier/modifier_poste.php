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
    <title>Modification des Postes</title>
</head>
<body>
    <main class="main_poste">
        <div class="case_modif_poste">
            <div class="case_retour">
                <a href="../postes.php">
                    <img src="../../../images/back_icon.png" width="50"/>
                </a>
            </div>
            <h1 class="titre_accueil">Modification du poste</h1>
            <div class="button_deco btnRight">
                <form method="POST" action="../../../logout.php">
                    <button type="submit" name="btnDeco" class="btnDeco">
                        <img src="../../../images/deconnexion_icone.png" width="50"/>
                        <span><?php echo(ucfirst($_SESSION['username']))?></span>
                    </button>
                </form>
            </div>
            <div class="case_form_utilis">
                <?php 
                    include 'recup_poste.php';
                ?>
                <form method="POST" action="requete_modification_poste.php">
                    <?php while($row = $stmtRec->fetch(PDO::FETCH_ASSOC)):?>
                        <input type="hidden" name="idModPoste" value="<?php echo $row['Id'];?>"/>
                        <div class="case_input">
                            <label>Numéro de poste</label>
                            <input type="text" name="numPoste" value="<?php echo $row['Num_poste'];?>">
                        </div>
                        <div class="case_input">
                            <label>Disponible</label>
                            <select name="dispoPoste" class="slcAppli">
                                <option value="0" <?php echo($row['Disponible'] == "0" ? "selected" : "" )?>>Non disponible</option>
                                <option value="1" <?php echo($row['Disponible'] == "1" ? "selected" : "" ) ?>>Disponible</option>
                            </select>
                        </div>
                    <?php endwhile;?>
                    <div class="case_button">
                        <button type="submit" name="btnModPoste" class="btnAppli">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>