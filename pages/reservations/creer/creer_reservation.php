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
    <title>Création de la reservation</title>
</head>
<body>
    <main class="main_reserv">
        <div class="case_creer_utilis">
            <div class="case_retour">
                <a href="../reservations.php">
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
                <?php
                    include_once('requete_recup_info_reserv.php');
                ?>
                <form method="POST" action="requete_creer_reservation.php">
                    <div class="case_input">
                        <label>Numéro de réservation</label>
                        <input type="text" name="numReserv">
                    </div>
                    <div class="case_input">
                        <label>Poste Disponible</label>
                        <select name="dispoPoste" class="slcAppli">
                            <?php while($rowPoste = $stmtRec->fetch(PDO::FETCH_ASSOC)):?>
                                <option value="<?php echo($rowPoste['Id'])?>"><?php echo($rowPoste['Num_poste'])?></option>
                            <?php endwhile;?>
                        </select>
                    </div>
                    <div class="case_input">
                        <label>Utilisateur Disponible</label>
                        <select name="dispoUtilis" class="slcAppli">
                            <?php while($rowUtili= $stmtRec2->fetch(PDO::FETCH_ASSOC)):?>
                                <?php if($result != $rowUtili['Id']):?>
                                    <option value="<?php echo($rowUtili['Id'])?>"><?php echo($rowUtili['Email'])?></option>
                                <?php endif;?>
                            <?php endwhile;?>
                        </select>
                    </div>
                    <div class="case_input">
                        <label>Date de début</label>
                        <input type="datetime-local" name="dtDebutReserv"/>
                    </div>
                    <div class="case_input">
                        <label>Date de fin</label>
                        <input type="datetime-local" name="dtFinReserv"/>
                    </div>
                    <div class="case_button">
                        <button type="submit" name="btnCreerReserv" class="btnAppli">Créer</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>