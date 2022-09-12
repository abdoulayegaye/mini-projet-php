<?php
    require_once "functions.php";
    $titre = "Mini-projet";
    $h1 = "Liste des étudiants";
    $etudiants = ordreDeMerite(getAllEtudiants());
    $total=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $titre ?></title>
</head>
<body>
    <h1><?= $h1 ?></h1>
    <table border="1">
        <tr>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Photo</th>
            <th>Moyenne</th>
        </tr>
        <?php foreach($etudiants as $et){ ?>
            <tr bgcolor="<?= $et['couleur'] ?>">
                <td><?php echo $et["matricule"]; ?></td>
                <td><?= strtoupper($et['nom']) ?></td>
                <td><?= ucwords($et['prenom']) ?></td>
                <td><img src="<?= $et['photo'] ?>" width="90px" height="60px"></td>
                <td><?= getMoyenne($et['notes']) ?></td>
            </tr>
            <?php $total += getMoyenne($et['notes']); ?>
        <?php } ?>
        <?php $moy=$total/count($etudiants); ?>
        <tr>
            <td colspan="4">Moyenne Générale</td>
            <td style="color:<?= ($moy>=10) ? 'green' : 'red' ?>"><?= $moy ?></td>
        </tr>
    </table>
</body>
</html>