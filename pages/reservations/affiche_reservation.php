<?php
    include_once('requete_reservation.php');
?>
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
    <tr>
        <td><?php echo($row['numero'])?></td>
        <td><?php echo($row['Email'])?></td>
        <td><?php echo($row['Num_poste'])?></td>
        <td><?php echo($row['date_debut'])?></td>
        <td><?php echo($row['date_fin'])?></td>
        <td><a href="../postes/modifier/modifier_poste.php?Id=<?php echo($row['Id']) ?>">Modifier</a></td>
        <td><a href="../postes/supprimer/supprim_poste.php?Id=<?php echo($row['Id'])?>">Supprimer</a></td>
    </tr>
<?php endwhile; ?>