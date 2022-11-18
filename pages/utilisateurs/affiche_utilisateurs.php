<?php
    $route = $_SERVER['DOCUMENT_ROOT'];
    require $route.'\Appli_BU\pages\utilisateurs\requete_utilisateur.php';
?>
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
    <tr>
        <td><?php echo($row['Nom'])?></td>
        <td><?php echo($row['Prenom'])?></td>
        <td><?php echo($row['Email'])?></td>
    </tr>
<?php endwhile; ?>