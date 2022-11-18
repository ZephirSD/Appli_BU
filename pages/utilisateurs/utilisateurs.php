<?php
    session_start();
    if(!isset($_SESSION['id']) && empty($_SESSION['id'])){
        header('location:http://localhost/Appli_BU/');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des utilisateurs</title>
</head>
<body>
    <h1>Listes des Utilisateurs</h1>
    <span><?php echo($_SESSION['username'])?></span>
    <table border="1">
        <?php 
            include 'affiche_utilisateurs.php';
        ?>
    </table>
</body>
</html>