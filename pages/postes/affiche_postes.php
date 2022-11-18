<?php
    $route = $_SERVER['DOCUMENT_ROOT'];
    require $route.'\Appli_BU\pages\postes\requete_postes.php';
?>
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
    <tr>
        <td><?php echo($row['Num_poste'])?></td>
        <td><?php echo($row['Disponible'] == "1") ? "Disponible" : "Non Disponible"?></td>
        <td><a href="../postes/modifier/modifier_utilisateurs.php?Id=<?php echo($row['Id']) ?>">Modifier</a></td>
        <td><a href="../postes/supprimer/supprim_utilisateur.php?Id=<?php echo($row['Id'])?>">Supprimer</a></td>
    </tr>
<?php endwhile; ?>