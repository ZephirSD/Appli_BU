<?php
    $route = $_SERVER['DOCUMENT_ROOT'];
    require $route.'\Appli_BU\pages\utilisateurs\requete_utilisateur.php';
?>
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
    <tr>
        <td><?php echo($row['Nom'])?></td>
        <td><?php echo($row['Prenom'])?></td>
        <td><?php echo($row['Email'])?></td>
        <td><a href="../utilisateurs/modifier/modifier_utilisateurs.php?Id=<?php echo($row['Id']) ?>">Modifier</a></td>
        <td><a href="../utilisateurs/supprimer/supprim_utilisateur.php?Id=<?php echo($row['Id'])?>">Supprimer</a></td>
    </tr>
<?php endwhile; ?>