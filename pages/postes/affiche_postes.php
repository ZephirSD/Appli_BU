<?php
    $route = $_SERVER['DOCUMENT_ROOT'];
    include_once('requete_postes.php');
?>
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
    <tr>
        <td><?php echo($row['Num_poste'])?></td>
        <td><?php echo($row['Disponible'] == "1") ? "Disponible" : "Non Disponible"?></td>
        <td><a href="../postes/modifier/modifier_poste.php?Id=<?php echo($row['Id']) ?>">Modifier</a></td>
        <td><a href="../postes/supprimer/supprim_poste.php?Id=<?php echo($row['Id'])?>">Supprimer</a></td>
    </tr>
<?php endwhile; ?>