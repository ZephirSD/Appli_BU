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
    <link rel="stylesheet" href="../../style/style.css">
    <title>Listes des postes</title>
</head>
<body>
    <main class="main_poste">
        <div class="case_poste">
            <div class="case_retour">
                <a href="../accueil.php">
                    <img src="../../images/back_icon.png" width="50"/>
                </a>
            </div>
            <div class="button_deco btnRight">
                <form method="POST" action="../../logout.php">
                    <button type="submit" name="btnDeco" class="btnDeco">
                        <img src="../../images/deconnexion_icone.png" width="50"/>
                        <span><?php echo(ucfirst($_SESSION['username']))?></span>
                    </button>
                </form>
            </div>
            <div class="div_titre">
                <h1 class="titre_accueil">Listes des Postes</h1>
                <a href="../postes/creer/creer_poste.php">
                    <img src="../../images/plus_icon.png" width="30"/>
                </a>
            </div>
            <div class="case_table">
                <table class="table_utilis">
                    <?php 
                        include 'affiche_postes.php';
                    ?>
                </table>
            </div>
        </div>
    </main>
</body>
</html>